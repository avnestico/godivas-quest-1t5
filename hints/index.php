<?php
include_once(__DIR__ . "/../php_source/global_variables.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta name="viewport" content="width=800px"/>

    <title>Hints</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"/>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css"/>
</head>
<body>
<div id="container">
    <?php
    include_once(__DIR__ . "/../php_source/header.php");
    ?>
    <div id="content_container">
        <div id="content">
            <h1>Hints</h1>

            <p>
                If you want a hint on a particular puzzle, contact the Questmaster at
                <?php echo "<a href=mailto:" . $GLOBALS["qm_email"] . ">" . $GLOBALS["qm_email"] . "</a>" ?> with how
                far you've gotten. I might point you in the right direction or confirm that that's already where you're
                going.
            </p>

            <h3>Notice</h3>

            <p>
                Puzzles <a href="../phase1/bottoms_up">4 (Bottoms Up)</a>, <a href="../phase2/dont_get_upset">8 (Don't
                Get Upset)</a>, and <a href="../phase2/restrainable_brainteaser">13 (Restrainable Brainteaser)</a>
                have been modified from their original forms. Please try them again if you've gotten stuck on them
                before.
            </p>

            <img src="../style/splash.png" title="Find where this picture comes from. -Nobody"
                 style="display: block; margin: 0 auto;"/>
        </div>
    </div>
</div>
</body>
</html>
