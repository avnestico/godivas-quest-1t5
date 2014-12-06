<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");
require_once(__DIR__ . "/../quest_db.php");

/**
 * Send email to all users
 *
 * Send a non-personalized email to all questers.
 *
 * @param $subject
 * @param $body
 * @param $headers
 */
function send_email_to_all_users($subject, $body, $headers)
{
    $query = select_all_aliases();

    while ($row = $query->fetch()) {
        list(, , , $email) = get_info_from_row($row, true);
        mail($email, $subject, $body, $headers);
    }
}

function email_content($num) {
    switch ($num) {
        case 1:
            $subject = "[Quest] The Quest Has Begun!";
            $body = "Quester,\r\n\r\n" .
                    "The first phase of puzzles for Godiva's Quest have been released! Hurry up and start questing!\r\n" .
                    "You can find the puzzles at quest.skule.ca/1T5/phase1/.\r\n\r\n" .
                    "Sincerely,\r\n" .
                    "Andrew Nestico,\r\n" .
                    "Questmaster 1T5";
            $headers = $GLOBALS['headers'];
            break;
        case 2:
            $subject = "[Quest] Phase 2 of the Quest is Now Available!";
            $body = "Dearest Quester,\r\n\r\n" .
                    "The second phase of Godiva's Quest is now available online at quest.skule.ca/1T5/phase2/.\r\n\r\n" .
                    "Have fun,\r\n" .
                    "Andrew Nestico,\r\n" .
                    "Questmaster 1T5";
            $headers = $GLOBALS['headers'];
            break;
        case 3:
            $subject = "[Quest] The Last Phase of the Quest is Up!";
            $body = "Valiant Quester,\r\n\r\n" .
                    "It's been a long journey, and the end is now upon us. Godiva's Quest 1T5 is coming to a close, and I could not " .
                    "be prouder of the progress that's been made. Soon we will crown our Godiva's Quest 1T5 Champion!\r\n" .
                    "As before, you can find the puzzles at quest.skule.ca/1T5/phase3/.\r\n\r\n" .
                    "May the odds be ever in your favour,\r\n" .
                    "Mrs. Bold,\r\n" .
                    "President,\r\n" .
                    "Godiva Industries";
            $headers = $GLOBALS['headers'];
            break;
        default:
            die("Invalid content number");
    }
    send_email_to_all_users($subject, $body, $headers);
}