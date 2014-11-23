<?php
/**
 * perform_login.php
 *
 * Takes user-supplied username and password and validates against stored
 * username and password in database.
 */

/**
 * user_login_correct: Update database on correct GodivaNet login
 *
 * @param $alias
 * @param $username
 */
function user_login_correct($alias, $username) {
    switch($username) {
        case $GLOBALS['user1']:
            $question = $GLOBALS['meta'][1];
            break;
        case $GLOBALS['user2']:
            $question = $GLOBALS['meta'][2];
            break;
        case $GLOBALS['user3']:
            $question = $GLOBALS['meta'][3];
            break;
        default:
            unknown_error();
    }

    if (isset($question)) {
        alias_answer_correct($question, $alias);
    } else {
        unknown_error();
    }
}

session_start();
include_once "../global_variables.php";
include_once "../global_functions.php";

// Compatibility library. Needed as long as php version is < 5.5.0.
if (PHP_VERSION_ID < 50500) {
    require 'password.php';
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$alias = $_REQUEST['alias'];

if ($username == "" || $password == "") {
    refresh_with_message("Login failed! Please make sure all fields are filled out.");
}

require_once '../quest_db.php';
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
        user_login_correct($alias, $username);
        refresh_with_message("Login successful!");
    }
}