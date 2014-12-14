<?php
/**
 * answer_check.php
 *
 * Takes in user-submitted ID and solution, as well as hidden question variable.
 * Confirms that the user ID exists and the question variable is valid.
 * If solution matches question, updates the leaderboard database and informs
 * the user that they have solved the question. Can also provide hints on
 * incorrect answers and additional information on correct answers.
 * Sends an email to the Questmaster if something notable happens.
 */

include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");

define('SOLVED', 0);
define('INVALID_LOGIN', 1);
define('MYSQL_ERROR', 2);
define('NO_QUESTION', 3);
define('WRONG', 4);

$subject[SOLVED] = "[Quest] Puzzle Solved";
$subject[INVALID_LOGIN] = "[Quest] Invalid login!!";
$subject[MYSQL_ERROR] = "[Quest] MYSQL ERROR!!";
$subject[NO_QUESTION] = "[Quest] No Question in Answercheck";
$subject[WRONG] = "[Quest] Wrong";

$body[0] = "Congratulations! You have successfully solved puzzle ";
$body[1] = $body[0] . "1: Bring The Beat Back!";
$body[2] = $body[0] . "2: Startups!";
$body[3] = $body[0] . "3: Putney!";
$body[4] = $body[0] . "4: Bottoms Up!";
$body[5] = $body[0] . "5: Creative, Ahem, Inspiration!";
$body[6] = $body[0] . "6: Solve For X!";
$body[7] = $body[0] . "7: A New Beginning!";
$body[8] = $body[0] . "8: !";
$body[9] = $body[0] . "9: !";
$body[10] = $body[0] . "10: Hellhole!";
$body[11] = $body[0] . "11: !";
$body[12] = $body[0] . "12: Syndicated!";
$body[13] = $body[0] . "13: !";
$body[14] = $body[0] . "14: Crossroads!";
$body[15] = $body[0] . "15: !";
$body[16] = $body[0] . "16: !";
$body[17] = $body[0] . "17: !";
$body[18] = $body[0] . "18: !";
$body[19] = $body[0] . "19: !";
$body[20] = $body[0] . "20: !";
$body[21] = $body[0] . "21: !";
$body[22] = "Congratulations! You've solved all of the Phase 3 puzzles! Now go win that Quest!";

$numPuzzles = sizeof($body) - 1;

$question = $_REQUEST['question'];
$questionUrl = $_REQUEST['questionUrl'];

// If $question is not a valid puzzle number, something has gone wrong
if (!is_numeric($question) || $question < 1 || $question > $numPuzzles) {
    unknown_error();
}

// Make sure an alias and answer have been submitted
$alias = $_REQUEST['alias'];
$answer = $_REQUEST['answer'];

if ($alias == "") {
    refresh_with_message("Please make sure you fill in your login name.");
}
if ($answer == "") {
    refresh_with_message("Please make sure you fill in the answer box.");
}

// Check the database for existence of the supplied username
require_once(__DIR__ . "/../quest_db.php");

$query = check_for_existence("alldata", "alias", $alias);
if (!$query->rowCount()) {
    mail($GLOBALS["qm_email"],
            $subject[INVALID_LOGIN],
            $questionUrl . "\r\n" . $alias,
            $GLOBALS["headers"]);
    refresh_with_message("Login name not found. Please make sure you entered the correct login name.");
}
$row = $query->fetch();

// Then confirm that the answer is correct
require_once(__DIR__ . "/puzzle_messages.php");

list($solveFlag, $message) = get_answer_status($question, $answer);

if (!$solveFlag) {
    mail($GLOBALS["qm_email"],
            $subject[WRONG] . ":  $alias",
            $question . " :   " . $answer . "\r\n" . $row['name'] . " " . $row['lastname'],
            $GLOBALS["headers"]);
} else {
    $correct_query = alias_answer_correct($question, $alias);

    mail($row['email'],
            $subject[SOLVED],
            "To user $alias:" . "\r\n" . $body[$question],
            $GLOBALS["headers"]);

    // If this is the first time the user has solved a given puzzle, check to see if Nobody should send an email.
    if ($correct_query->rowCount()) {
        include_once(__DIR__ . "/../email/email_from_nobody.php");
        email_from_nobody($row, $question);
    }
}

refresh_with_message($message);
