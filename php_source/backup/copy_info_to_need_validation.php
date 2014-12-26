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

$query = select_all_aliases("backup");

while ($row = $query->fetch()) {
    $email = $row['email'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $alias = $row['alias'];

    if (strpos($email,'utoronto.ca') !== false) {
        $alias_hash = get_verification_url($alias);
        register_user($first_name, $last_name, $alias, $alias_hash, $email);
        email_register($first_name, $alias_hash, $email);
        echo "Verification email sent: $email\n";
    } else {
        email_not_registered($first_name, $email);
        echo "Information email sent: $email\n";
    }
}
