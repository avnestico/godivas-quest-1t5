<?php
session_start();
include_once(__DIR__ . "/../php_source/global_variables.php");

function print_registration_content() {
    echo "<p>You will be sent emails with additional instructions. If the email address you submit is not one you have
        access to for the entire Quest, you will not be able to complete the Quest.</p><br/>";
    include_once(__DIR__ . "/../php_source/registration/form_registration.php");
}

function print_registration_closed() {
    $year = $GLOBALS['this_year'];
    echo "<p>Registration is closed, as Godiva's Quest $year has ended.</p>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta name="viewport" content="width=800px"/>

    <title>Registration</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"/>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css" media="screen"/>
</head>

<body>
<div id="container">
    <?php
    include_once(__DIR__ . "/../php_source/header.php");
    include_once(__DIR__ . "/../php_source/message.php");
    ?>

    <div id="content_container">
        <div id="content">
            <h2>Registration</h2>
            <?php if (!$GLOBALS['quest_finished']) {
                print_registration_content();
            } else {
                print_registration_closed();
            }?>
        </div>
    </div>
</div>
</body>
</html>
