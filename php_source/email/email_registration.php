<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");

/**
 * email_register
 *
 * Sent when the user first registers for the Quest. It requests that the user click the validation link.
 *
 * @param $first_name
 * @param $registration_url
 * @param $email
 */
function email_register($first_name, $alias_hash, $email) {
    $body = "$first_name,\r\n\r\n" .
            "Thank you for registering for Godiva's Quest. Before you can begin solving puzzles, " .
            "I need you to verify that you have access to this email account.\r\n" .
            "Please click the link below, or copy and paste it into your browser to go to the page directly:\r\n\r\n" .
            $GLOBALS['verification_url'] . $alias_hash . "\r\n\r\n" .
            "Thank you.\r\n" .
            "Andrew Nestico,\r\n" .
            "Questmaster 1T5\r\n\r\n";

    mail($email, "[Quest] Registration Complete!", $body, $GLOBALS["headers"]);
}

/**
 * email_verify
 *
 * Sent when the user clicks the verification link, giving them their alias and allowing them to start solving puzzles.
 *
 * @param $first_name
 * @param $alias
 * @param $email
 */
function email_verify($first_name, $alias, $email) {
    $body = "$first_name,\r\n\r\n" .
            "Thank you for registering for Godiva's Quest! Your Quest ID is $alias. Use this ID to submit your answers to puzzles.\r\n" .
            "You can check your progress at " . $GLOBALS['leaderboard_url'] . "\r\n" .
            "If you're having trouble, you can email " . $GLOBALS["qm_email"] . " and I'll see if I can help you.\r\n\r\n" .
            "Good luck!\r\n" .
            "Andrew Nestico,\r\n" .
            "Questmaster 1T5\r\n\r\n";

    mail($email, "[Quest] Thank You For Validating Your Email Address!", $body, $GLOBALS["headers"]);
}
