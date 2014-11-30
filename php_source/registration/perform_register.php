<?php
/**
 * perform_register.php
 *
 * Takes registration information from registration.php. Inserts user's info
 * into database and provides user with alias to use when solving questions.
 */

include_once "../global_variables.php";
include_once "../global_functions.php";

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];

// Validate registration data. An empty string is returned on successful validation.
include_once "validate_register.php";
$message = info_validation_message($firstname, $lastname, $email);

if ($message != "") {
    refresh_with_message($message);
}

$alias = strtolower($firstname{0}) . sprintf('%02d', rand(0, 99)) . strtolower($lastname{0}) . sprintf('%02d', rand(0, 99));

require_once '../quest_db.php';
$query = register_alias($firstname, $lastname, $alias, $email);

if ($query->rowCount()) {
    $body = "Thank you $firstname for registering.\r\n
Your user ID is: $alias \r\n

Use your user ID to submit your answers to puzzles.  You can check your progress at " . $GLOBALS['leaderboard_url'] . "\r\nGood luck!";
    mail($email, "[Quest]Registration Complete!", $body, $GLOBALS["headers"]);
    $message = "Registration success! An email will be sent each time a new stage is released. In the meantime, your ID is $alias if you would like to start puzzles right away.";
    header("Location: ../../index.php?message=$message");
    die();
} else {
    refresh_with_message("Registration failed! Please try again, or contact me at " . $GLOBALS["qm_email"]);
}
