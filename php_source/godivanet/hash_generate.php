<?php
/**
 * hash_generate.php
 *
 * Script to pass user and a hashed password to an SQL database
 * Connects to the database using quest_db.php
 * Usage: php5 -f hash_generate.php <SQL table> <username> <password>
 */

// Uses the password.php compatibility library for password functions. The file
// and this line can be safely removed if the server is upgraded to php >=
// 5.5.0. You can use "php -f php_info.php" to check this.
if (PHP_VERSION_ID < 50500) {
    require_once(__DIR__ . "/../registration/password.php");
}

// If the number of arguments is incorrect, cancel user creation.
if ($argc != 4) {
    die("Usage: php -f hash_generate.php <SQL table> <username> <password>\n");
}

$table = $argv[1];
$user = $argv[2];
$pass = $argv[3];

// Hashing options and function
$pwoptions = ['cost' => 8,];
$passhash = password_hash($pass, PASSWORD_BCRYPT, $pwoptions);

echo "Username:\n" . $user . "\n";
echo "Password hash:\n" . $passhash . "\n";

// Connect to the database.
require_once(__DIR__ . "/../quest_db.php");

$query = insert_user_and_hash($table, $user, $passhash);

if ($query->rowCount()) {
    echo "User created successfully\n";
} else {
    echo "User creation failed\n";
}
