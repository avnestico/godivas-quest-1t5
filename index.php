<?php
session_start();
include_once "php_source/global_variables.php";
if (!array_key_exists('message', $_REQUEST)) {
    $_REQUEST['message'] = "";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>

    <title>Godiva's Quest</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" href="style/mystyle.css" type="text/css"/>
</head>

<body>
<div id="container">
    <?php
    include_once 'php_source/header.php';
    ?>

    <div id="maincontent_container">
        <div id="maincontent">
            <div id="maincontent_top">
                <div id="started_container">
                    <?php
                    $message = htmlspecialchars($_REQUEST['message']);
                    if ($message != "")
                        echo "<h2>$message</h2>";
                    ?>

                    <h1><strong>Welcome to Godiva's Quest 1T5!</strong></h1>

                    <p><strong>Godiva's Quest</strong> is an annual Skule tradition that tests students' logic,
                        problem-solving skills, and perseverance by having them (you) solve a set of increasingly
                        difficult puzzles. Beginning in 0T0, this year marks the Quest's 15th anniversary!</p>

                    <p>The first U of T St. George Engineering Undergrad student to solve the final puzzle (we have ways
                        of knowing who it is) will become next year's Questmaster and the third judge of <strong>Ye
                            Grande Olde Chariot Races</strong> held on the Wednesday of Godiva Week! If no one solves
                        the final puzzle by January 6th, the eligible person with the most solves wins.</p>

                    <p>There can only be one winner, but collaboration is encouraged and the top 10 people to complete
                        the Quest (or, if less than 10 people solve it, the top 10 people on the leaderboard) will
                        receive an <a href="/1T5/media/patch.jpg">ultra-exclusive limited edition patch</a> for his or
                        her coveralls!</p>

                    <p>Frosh cannot win by tradition, but are certainly encouraged to participate and can still earn the
                        patch!</p>

                    <h3><strong>The Puzzles</strong></h3>

                    <p>Every puzzle's solution will be one or two words which can be submitted on the puzzles'
                        respective pages. If your answer is close but not quite right, a clue will be automatically
                        provided.</p>

                    <p>There will be three phases to the Quest with seven puzzles each. When the third phase is
                        released, Questers will have all the tools they need to solve the Quest. Solving more puzzles
                        before the third phase is released will help you solve the Quest faster, but it is not <em>strictly</em>
                        necessary to have solved all the puzzles to complete the Quest.</p>

                    <p>There is one on-campus puzzle per phase, requiring you to visit a location on or around U of T.
                        Every location that is necessary to solve a puzzle is completely accessible to <em>all</em>
                        engineering students. If you're trying to break into somewhere, you're on the wrong track.</p>

                    <p>Unlike in past years, questers are encouraged to take peeks behind the veil and look for hidden
                        areas of the website. Leave no stone unturned and you'll be rewarded for your efforts. The only
                        exception to this rule is the php source folder - things in that folder are there for a reason,
                        so please don't try to break into there.</p>

                    <p>Everyone is eligible for two hints. If you're really really stuck,
                        e-mail <? echo $GLOBALS["qm_email"] ?> and explain where you are in the puzzle, and a hint will
                        be provided. If a puzzle has less than 5 solvers by the time the next phase is active, hints for
                        those puzzles will be provided to everyone.</p>

                    <h3><strong>Past Winners</strong></h3>

                    <p>Previous winners are ineligible to win again, so you are <strong>not</strong> competing against
                        Ryan Wills, Ang Cui, Evangelos Staikos, Alvin Ho, Tommy Liu, Ian Swartz, John Zhou, or Harry
                        Zhao. Of course, you are also not competing against the Questmasters.</p>

                    <hr/>

                    <p>Happy questing!<br/>
                        Andrew Nestico and Abhinav Ramakrishnan, Questmasters 1T5</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>