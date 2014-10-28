<?php
/*
 * hash_generate.php
 * Script to pass user and a hashed password to an SQL database
 * Connects to the database using openDB.php
 * Usage: php5-cli hash_generate.php <SQL table> <username> <password>
 */

/*
 * Uses the password.php compatibility library for password functions. The file
 * and this line can be safely removed if the server is upgraded to php >=
 * 5.5.0. You can use "php5_cli phpinfo.php" to check this.
 */
if (PHP_VERSION_ID < 50500) {
	require 'password.php';
}

// If the number of arguments is incorrect, cancel user creation.
if ($argc != 4) {
    die("Usage: php5-cli hash_generate.php <SQL table> <username> <password>\n");
}

// Connect to the database.
require_once '../openDB.php';
$db = new MySQL;
$db->connectDB();

$table = mysql_real_escape_string($argv[1]);
$user = mysql_real_escape_string($argv[2]);
$pass = $argv[3];

// Hashing options and function
$pwoptions = ['cost' => 8,];
$passhash  = password_hash($pass, PASSWORD_BCRYPT, $pwoptions);

echo "Username:\n" . $user . "\n";
echo "Password hash:\n" . $passhash . "\n";

$query = "insert into $table (username, password) values ('$user','$passhash');";

$result = mysql_query($query);

if ($result) {
    echo "User created successfully\n";
} else {
    echo "User creation failed\n";
}

$db->disconnectDB();
