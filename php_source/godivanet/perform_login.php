<?php
/**
 * perform_login.php
 *
 * Takes user-supplied username and password and validates against stored
 * username and password in database.
 */

/**
 * quest_completed
 *
 * Update database on successful completion of final Quest puzzle.
 *
 * @param mixed $row
 */
function quest_completed($row) {
    $alias = $row['alias'];
    $question = $GLOBALS['meta'][1];
    $correct_query = alias_answer_correct($question, $alias);

    // If it's the first time solving the puzzle, send a congratulatory email from Nobody.
    if ($correct_query->rowCount()) {
        include_once(__DIR__ . "/../email/email_from_nobody.php");
        email_from_nobody($row, $question);
    }

    mail($row['email'],
            "[Quest] You've Completed Godiva's Quest!",
            "To user " . $alias . ":\r\nCongratulations on completing the final puzzle of Godiva's Quest! " .
            "Find the J.P. Potts Trophy first to win the Quest!",
            $GLOBALS["headers"]);
}

session_start();
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");

// Fail early
if (!isset($_REQUEST['username'])) {
    unknown_error();
}

// Compatibility library. Needed as long as php version is < 5.5.0.
if (PHP_VERSION_ID < 50500) {
    require_once(__DIR__ . "/password.php");
}

$alias = $_REQUEST['alias'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($alias == "" || $username == "" || $password == "") {
    refresh_with_message("Login failed! Please make sure all fields are filled out.");
}

require_once(__DIR__ . "/../quest_db.php");
$alias_query = check_for_existence("alldata", "alias", $alias);

if (!$alias_query->rowCount()) {
    refresh_with_message("Quest ID " . $alias . " does not exist. Please make sure you entered the correct ID.");
}

$query = check_for_existence("godivanet", "username", $username);

if (!$query->rowCount()) {
    refresh_with_message("Login failed! Username " . $username . " does not exist.");
} else {
    $row = $query->fetch();
    if (!password_verify($password, $row['password'])) {
        refresh_with_message("Login failed! Username and password do not match.");
    } else {
        $_SESSION['auth'] = true;
        $_SESSION[$username] = true;
        if ($username == $GLOBALS['user3']) {
            quest_completed($alias_query->fetch());
        }
        refresh_with_message("Login successful!");
    }
}
