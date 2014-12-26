<?php
/**
 * perform_register.php
 *
 * Takes registration information, inserts user's info into database, and provides user with alias to use when solving questions.
 */

include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");
include_once(__DIR__ . "/../email/email_registration.php");

if (PHP_VERSION_ID < 50500) {
    require_once(__DIR__ . "/password.php");
}

function get_validation_url($alias) {
    $pwoptions = ['cost' => 8,];
    $alias_hash = password_hash($alias, PASSWORD_BCRYPT, $pwoptions);

    // Remove hash information
    $alias_hash_array = explode("$", $alias_hash);
    $alias_hash = end($alias_hash_array);

    //Delete periods from the url; if this is not done, a period at the end of the url could be seen as malformed
    $alias_hash = str_replace('.','',$alias_hash);

    //Delete slashes too, just in case.
    $alias_hash = str_replace('/','',$alias_hash);

    return $alias_hash;
}

// Fail early
if (!isset($_REQUEST['first_name'])) {
    unknown_error();
}

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];

// Validate registration data. An empty string is returned on successful validation.
require_once(__DIR__ . "/validate_register.php");
$message = info_validation_message($first_name, $last_name, $email);

if ($message != "") {
    refresh_with_message($message);
}

// Create the user's alias, hash it, and use the hashed string as their validation url.
// TODO: figure out if this has a security hole.
// TODO: replace all this stuff with UTORauth so that we can get rid of aliases once and for all.
// This is only being done because I don't have the time to figure out UTORauth in the middle of the Quest.
$alias = strtolower($first_name{0}) . sprintf('%02d', rand(0, 99)) . strtolower($last_name{0}) . sprintf('%02d', rand(0, 99));
$alias_hash = get_validation_url($alias);

// Register the user and send them an email to validate their email address.
require_once(__DIR__ . "/../quest_db.php");
$query = register_user($first_name, $last_name, $alias, $alias_hash, $email);

if ($query->rowCount()) {
    email_register($first_name, $alias_hash, $email);
    refresh_with_message("Your information has been submitted. Please check your email for the next step in the registration process.", true);
} else {
    refresh_with_message("Registration failed! Please try again, or contact me at " . $GLOBALS["qm_email"]);
}
