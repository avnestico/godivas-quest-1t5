<?php
/**
 * perform_login.php
 *
 * Takes user-supplied username and password and validates against stored
 * username and password in database.
 */
session_start();
include_once "../global_variables.php";

// Compatibility library. Needed as long as php version is < 5.5.0.
if (PHP_VERSION_ID < 50500) {
    require 'password.php';
}

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if ($username == "" || $password == "")
{
	$message = "Login failed! Please make sure all fields are filled out.";
	header("Location: ../../godivanet/index.php?message=$message");
	die();
}

require_once '../openDB.php';
$query = checkForUsername($username);

if (!$query->columnCount())
{
	$message = "Login failed! Username " . $username . " does not exist.";
	header("Location: ../../godivanet/index.php?message=$message");
	die();
}
else
{
    $row = $query->fetch();
	if (!password_verify($password, $row['password']))
	{
		$message = "Login failed! Username and password do not match.";
		header("Location: ../../godivanet/index.php?message=$message");
		die();
	}
	else
	{
        $_SESSION['auth'] = true;
        $_SESSION[$username] = true;
		$message = "Login successful!";
		header("Location: ../../godivanet/index.php?message=$message");
		die();
	}
}
