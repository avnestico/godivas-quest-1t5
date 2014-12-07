<?php
session_start();
include_once(__DIR__ . "/../php_source/global_variables.php");
$user1 = $GLOBALS["user1"];
$user2 = $GLOBALS["user2"];
$user3 = $GLOBALS["user3"];

if (!array_key_exists('auth', $_SESSION)) {
    $_SESSION['auth'] = false;
}
if (!array_key_exists($user1, $_SESSION)) {
    $_SESSION[$user1] = false;
}
if (!array_key_exists($user2, $_SESSION)) {
    $_SESSION[$user2] = false;
}
if (!array_key_exists($user3, $_SESSION)) {
    $_SESSION[$user3] = false;
}
$_SESSION['indexauth'] = $_SESSION['auth'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta name="viewport" content="width=800px"/>
    <title>GodivaNet</title>

    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"/>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css"/>
</head>

<body>
<div id="container">
    <?php
    include_once(__DIR__ . "/../php_source/godivanet/users/godivanet_header.php");
    include_once(__DIR__ . "/../php_source/message.php");
    ?>

    <div id="content_container">
        <div id="content">
            <?php
            if (!array_key_exists('indexauth', $_SESSION) || !$_SESSION['indexauth']) {
                echo "<h2>Welcome to GodivaNet!</h2>";
                include_once(__DIR__ . "/../php_source/godivanet/form_login.php");
            } else {
                if ($_SESSION[$user1]) {
                    echo "Logged in as user 1";
                } else if ($_SESSION[$user2]) {
                    echo "Logged in as user 2";
                } else if ($_SESSION[$user3]) {
                    echo "Logged in as user 3";
                } else {
                    echo "Login error";
                }
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>