<?php
session_start();
include_once(__DIR__ . "/../php_source/global_variables.php");
include_once(__DIR__ . "/../php_source/godivanet/users/display_email.php");
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
/**
 * print_godivanet_content
 *
 * Prints login form (if unauthorized) or user's emails (if authorized).
 *
 * @param $auth
 * @param $user1
 * @param $user2
 * @param $user3
 */
function print_godivanet_content($auth, $user1, $user2, $user3) {
    if (!$auth) {
        echo "<h2>Welcome to GodivaNet!</h2>";
        include_once(__DIR__ . "/../php_source/godivanet/form_login.php");
    } else {
        echo "<h2>Inbox</h2>";
        if ($user1) {
            print_email_table(1);
        } else if ($user2) {
            print_email_table(2);
        } else if ($user3) {
            print_email_table(3);
        } else {
            echo "Login error";
        }
    }
}

/**
 * print_godivanet_solution
 *
 * Prints solution to GodivaNet puzzles and all users' emails.
 */
function print_godivanet_solution() {
    echo "<h2>Solution to #22: GodivaNet</h2>";
    include_once(__DIR__ . "/../php_source/global_functions.php");
    ?>
    <p>This page was hidden for the duration of the Quest, but its existence was hinted at by several pages. The most
        notable hint was in the title text of the picture at the <a href='../hints'>Hints</a> page, which pointed to
        the also-hidden <a href='../style'>Style</a> page.</p>
    <p>Upon finding this page, users were presented with a login screen. Each meta puzzle was linked to a Godiva
        Industries employee, and logging in as that user provided access to their email inbox. Their usernames were
        their names in utorID form (ie, John Smith -> smithjoh). The passwords for the first two users was the solution
        to their respective phases' meta puzzles, and the password for the last phase was hinted at in the second user's
        GodivaNet emails.</p>
    <p>Click below to expand each user's GodivaNet emails.</p><br/>
    <script src="../php_source/js/toggle_visibility.js" type="text/javascript"></script>
    <?php
    print_spoiler("godivanet1", "User 1: larkrobi (Robin Lark)", true);
    echo "Password: passeriformes<br/><br/>";
    print_email_table(1);
    print_spoiler("godivanet2", "User 2: kingpete (Peter King)");
    echo "Password: universitycollege<br/><br/>";
    print_email_table(2);
    print_spoiler("godivanet3", "User 3: boldsere (Serena Bold)");
    echo "Password: rhondameek<br/><br/>";
    print_email_table(3);
    print_spoiler_end();
    echo "<p>The first person to talk to Rhonda, address her by her codename, and ask her for the J.P. Potts Memorial Trophy was the champion of Godiva's Quest 1T5.</p>";
}
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
            if (!$GLOBALS['quest_finished']) {
                if (!array_key_exists('indexauth', $_SESSION) || !$_SESSION['indexauth']) {
                    $auth = false;
                } else {
                    $auth = true;
                }
                print_godivanet_content($auth, $_SESSION[$user1], $_SESSION[$user2], $_SESSION[$user3]);
            } else {
                print_godivanet_solution();
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>