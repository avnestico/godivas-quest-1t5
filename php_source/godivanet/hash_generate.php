<?php

// Compatibility library. The file and this line can be safely removed if the
// server is upgraded to php => 5.5.0. Use "php5_cli phpinfo.php" to check this.
if (PHP_VERSION_ID < 50500) {
	require 'password.php';
}

// Replace these with your username and password
$user = "gquest1t5";
$pass = "engsci1t5ftw";

// Hashing options and function
$pwoptions = ['cost' => 8,];
$passhash  = password_hash($pass, PASSWORD_BCRYPT, $pwoptions);

// Place username in user.txt
echo "Username:\n" . $user;
file_put_contents('user.txt', $user);
echo "\n";

// Place hashed password in pass.txt
echo "Password hash:\n" . $passhash;
file_put_contents('pass.txt', $passhash);
echo "\n";

?>