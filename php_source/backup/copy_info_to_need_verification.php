<?php
/**
 * copy_info_to_need_validation
 *
 * Copy user info from the backup to need_validation if their email address ends in utormail.ca
 */

include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");
require_once(__DIR__ . "/../quest_db.php");
include_once(__DIR__ . "/../registration/verification_functions.php");

function copy_info($row) {
    $email = $row['email'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $alias = $row['alias'];

    $check_query = check_for_existence("need_verification", "alias", $alias);

    if ($check_query->rowCount()) {
        echo "User already exists: $email\n";
    } else {
        if (strpos($email, 'utoronto.ca') !== false) {
            $alias_hash = get_verification_url($alias);
            register_user($first_name, $last_name, $alias, $alias_hash, $email);
            email_register($first_name, $alias_hash, $email);
            echo "Verification email sent: $email\n";
        } else {
            email_not_registered($first_name, $email);
            echo "Information email sent: $email\n";
        }
    }
}

if ($argc == 1) {
    $query = select_all_aliases("backup");

    while ($row = $query->fetch()) {
        copy_info($row);
    }
}

if ($argc == 2) {
    $alias = $argv[1];
    $single_user_query = check_for_existence("backup", "alias", $alias);

    if ($single_user_query->rowCount()) {
        $row = $single_user_query->fetch();
        copy_info($row);
    } else {
        echo "Alias does not exist.\n";
    }
}
