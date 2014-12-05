<?php
/**
 * perform_register.php
 *
 * Takes registration information from registration.php. Inserts user's info
 * into database and provides user with alias to use when solving questions.
 */

include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");

$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];

// Validate registration data. An empty string is returned on successful validation.
require_once(__DIR__ . "/validate_register.php");
$message = info_validation_message($first_name, $last_name, $email);

if ($message != "") {
    refresh_with_message($message);
}

$alias = strtolower($first_name{0}) . sprintf('%02d', rand(0, 99)) . strtolower($last_name{0}) . sprintf('%02d', rand(0, 99));

require_once(__DIR__ . "/../quest_db.php");
$query = register_alias($first_name, $last_name, $alias, $email);

if ($query->rowCount()) {
    $body = "Thank you $first_name for registering.\r\n
Your user ID is: $alias \r\n

Use your user ID to submit your answers to puzzles.  You can check your progress at " . $GLOBALS['leaderboard_url'] . "\r\nGood luck!";
    mail($email, "[Quest]Registration Complete!", $body, $GLOBALS["headers"]);
    $message = "Registration success! An email will be sent each time a new stage is released. In the meantime, your ID is $alias if you would like to start puzzles right away.";
    header("Location: ../../index.php?message=$message");
    die();
} else {
    refresh_with_message("Registration failed! Please try again, or contact me at " . $GLOBALS["qm_email"]);
}
