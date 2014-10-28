<?php
include_once "../global_variables.php";

if (($_REQUEST['name'] == "" || $_REQUEST['lastname']== "" || $_REQUEST['email'] == ""))
{
	$message = "Registration failed! Please make sure all fields are filled out.";
	header("Location: ../registration.php?message=$message");
	die();
}

//Connect to the MySQL server with given address, user, and password
require_once '../openDB.php';
$db = new MySQL;
$db->connectDB(); 

$name = mysql_real_escape_string($_REQUEST['name']);
$lastname = mysql_real_escape_string($_REQUEST['lastname']);
$email = mysql_real_escape_string($_REQUEST['email']);

$alias = $name{0}.rand(0, 100).$lastname{0}.rand(0,100);

$query = "insert into alldata (name,lastname,alias,email) values ('$name','$lastname','$alias','$email');";

$result = mysql_query($query);

if ($result)
{
	$headers = 'From: ' . $GLOBALS["qm_email"] . "\r\n";
	$headers .= 'Cc: ' . $GLOBALS["qm_email"] . "\r\n";

	$body = "Thank you $name for registering.\r\n
Your user ID is: $alias \r\n

Use your user ID to submit your answers to puzzles.  You can check your progress at: quest.skule.ca/1T5/leaderboards.php\r\n 
Good luck! \r\n
                      ";
	mail($email, "[Quest]Registration Complete!", $body, $headers);
	$message = "Registration success! An email will be sent each time a new stage is released. In the mean time, your ID is $alias if you would like to start puzzles right away.";
	header("Location: /1T5/index.php?message=$message");
	die();
}
else
{
	$message = "Registration failed! Please try again, or contact me at " . $GLOBALS["qm_email"];
	header("Location: ../registration.php?message=$message");
	die();
}

$db->disconnectDB();
