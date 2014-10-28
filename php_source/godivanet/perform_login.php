<?php
include_once "../global_variables.php";

// Compatibility library. Needed as long as php version is < 5.5.0.
if (PHP_VERSION_ID < 50500) {
    require 'password.php';
}

if ($_REQUEST['username'] == "" || $_REQUEST['password']== "")
{
	$message = "Login failed! Please make sure all fields are filled out.";
	header("Location: ../godivanet/index.php?message=$message");
	die();
}

//Connect to the MySQL server with given address, user, and password
require_once '../openDB.php';
$db = new MySQL;
$db->connectDB(); 

$username = mysql_real_escape_string($_REQUEST['username']);

$query = "select * from godivanet (username) values ('$username');";

$result = mysql_query($query);

if (!$result)
{
	$message = "Login failed! Username does not exist.";
	header("Location: ../godivanet/index.php?message=$message");
	die();
}
else
{
	if (!password_verify($_REQUEST['password'], $row['password']))
	{
		$message = "Login failed! Username and password do not match.";
		header("Location: ../godivanet/index.php?message=$message");
		die();
	}
	else
	{
		$message = "Login successful!";
		header("Location: ../godivanet/index.php?message=$message");
		die();
	}
}

$db->disconnectDB();

?>
