<?php
/**
 * Confirm that the user is in control of the email address that they registered with.
 */

include_once(__DIR__ . "/../php_source/global_variables.php");
include_once(__DIR__ . "/../php_source/global_functions.php");
include_once(__DIR__ . "/../php_source/quest_db.php");
include_once(__DIR__ . "/../php_source/email/email_registration.php");

if (!array_key_exists('id', $_REQUEST)) {
    refresh_with_message("No validation ID found. I don't think you're doing something you want to be doing.", true);
}

$alias_hash = $_REQUEST["id"];

$verify_query = check_for_existence("need_verification", "alias_hash", $alias_hash);

if (!$verify_query->rowCount()) {
    refresh_with_message("That ID is invalid. ", true);
} else {
    // If the ID exists, check if it has already been validated
    $row = $verify_query->fetch();
    $alias = $row["alias"];
    $check_query = check_for_existence("alldata", "alias", $alias);

    if ($check_query->rowCount()) {
        refresh_with_message("This ID has already been validated. Your alias is $alias. You're good to start solving puzzles.", true);
    } else {
        // If the user has not yet been added to alldata, do so.
        $first_name = $row["first_name"];
        $last_name = $row["last_name"];
        $email = $row["email"];

        validate_user($first_name, $last_name, $alias, $email);
        email_verify($first_name, $alias, $email);
        refresh_with_message("Thank you for validating your email address. Your alias is $alias. You're good to start solving puzzles.", true);
    }
}
