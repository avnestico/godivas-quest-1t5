<?php
session_start();
$user1 = 'testuser';
$user2 = 'testuser2';
$user3 = 'testuser3';

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

    <title>GodivaNet</title>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css"/>
</head>

<body>
<div id="container">
    <?php
    include_once "../php_source/godivanet/users/godivanet_header.php";
    ?>

    <div id="maincontent_container">
        <div id="maincontent">
            <div id="maincontent_top">
                <div id="started_container">
                    <?php
                    $message = $_REQUEST['message'];
                    if ($message != "")
                        echo "<h2>$message</h2>";
                    if (!$_SESSION['indexauth']) {
                        echo "<h2>Welcome to GodivaNet!</h2>";
                        include_once "../php_source/godivanet/login.php";
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
    </div>
</div>
</body>
</html>