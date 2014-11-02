<?php
include_once "../php_source/global_variables.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <title>Hints</title>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css"/>
</head>
<body>
<div id="container">
    <?php
    include '../php_source/header.php'
    ?>
    <div id="maincontent_container">
        <div id="maincontent">
            <div id="maincontent_top">
                <div id="started_container">
                    <h1>Hints</h1>

                    <p>
                        None yet! If a puzzle is solved by less than 5 people before the next phase activates, automatic
                        hints will be provided here. If you want a hint on a particular puzzle, you are entitled to
                        <strong>two</strong> for the entire quest, and you can request one by e-mailing the Questmaster.
                    </p>

                    <h2>Contact</h2>

                    <p>
                        You can contact the Questmasters at <a
                            href="mailto:<? echo $GLOBALS["qm_email"] ?>"><? echo $GLOBALS["qm_email"] ?></a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
