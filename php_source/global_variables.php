<?php
$GLOBALS['this_year'] = "1T5";
$GLOBALS['quest_finished'] = true;

$GLOBALS['leaderboard_url'] = "http://quest.skule.ca/" . $GLOBALS['this_year'] . "/leaderboard/";
$GLOBALS['verification_url'] = "http://quest.skule.ca/" . $GLOBALS['this_year'] . "/verification/?id=";

// Designate some puzzles as meta or otherwise special.
// Instead of a 'Y', these puzzles will be marked with a '!' on the leaderboard.
// Usually only used for the puzzle that ends the Quest.
$GLOBALS['meta'][1] = 22;

// Pull email addresses from credentials file
include_once(__DIR__ . "/credentials.php");
$credentials_email = get_credentials_email();

// Questmaster's email address
$GLOBALS['qm_email'] = $credentials_email['user'] . $GLOBALS['this_year'] . "@" . $credentials_email['domain'];

// Email headers
$GLOBALS['header_base'] = "\r\nCC: " . $GLOBALS['qm_email'];
$GLOBALS['headers'] = "From: Questmaster " . $GLOBALS['this_year'] . " <" . $GLOBALS['qm_email'] . ">"
        . $GLOBALS['header_base'];

// For when you want to send an email 'anonymously'.
$GLOBALS['nobody'] = "From: " . $credentials_email['nobody']
        . $GLOBALS['header_base']
        . "\r\nReply-To: " . $GLOBALS['qm_email'];

// For use with GodivaNet logins.
$GLOBALS['user1'] = "larkrobi";
$GLOBALS['user2'] = "kingpete";
$GLOBALS['user3'] = "boldsere";
