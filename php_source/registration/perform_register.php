<?php
/*
 * perform_register.php
 *
 * Takes registration information from registration.php. Inserts user's info
 * into database and provides user with alias to use when solving questions.
 */

include_once "../global_variables.php";

$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];

if (($firstname == "" || $lastname == "" || $email == ""))
{
	$message = "Registration failed! Please make sure all fields are filled out.";
	header("Location: ../../info/registration.php?message=$message");
	die();
}

$alias = $firstname{0}.rand(0, 100).$lastname{0}.rand(0,100);

require_once '../openDB.php';
$query = registerUser($firstname, $lastname, $alias, $email);

if ($query->rowCount())
{
	$headers = 'From: ' . $GLOBALS["qm_email"] . "\r\n";
	$headers .= 'Cc: ' . $GLOBALS["qm_email"] . "\r\n";

	$body = "Thank you $firstname for registering.\r\n
Your user ID is: $alias \r\n

Use your user ID to submit your answers to puzzles.  You can check your progress at: quest.skule.ca/1T5/leaderboards.php\r\n 
Good luck! \r\n
                      ";
	mail($email, "[Quest]Registration Complete!", $body, $headers);
	$message = "Registration success! An email will be sent each time a new stage is released. In the mean time, your ID is $alias if you would like to start puzzles right away.";
	header("Location: ../../index.php?message=$message");
	die();
}
else
{
	$message = "Registration failed! Please try again, or contact me at " . $GLOBALS["qm_email"];
	header("Location: ../../info/registration.php?message=$message");
	die();
}
