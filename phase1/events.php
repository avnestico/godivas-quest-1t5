<?php
if (!array_key_exists('message', $_REQUEST)) {
    $_REQUEST['message'] = "";
}
$questionNumber = 1;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />
    <title>This Day in History</title>
    <link rel="stylesheet" href="../style/mystyle.css" type=
    "text/css" />
</head>
<body>
<div id="container">
    <?php
    include '../php_source/puzzle_header.php';
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

                    <h2>#1: This Day in History</h2>
                    <br>
                    <p>
                        This millenium has been host to some major headlines and more than a few not-so-major ones. What's so special about these events?</p>
                    <br>
                    <br>AOL and Time Warner announce merger
                    <br>The ACFTA comes into effect
                    <br>Executive Order 13233 is issued by George W. Bush
                    <br>Juan Emilio Bosch Gavi�o, first elected president of the Dominican Republic, dies
                    <br>The Solway Harvester sinks off the coast of Ramsey
                    <br>A large sinkhole opens up in Schmalkalden, Germany
                    <br>A strange black monolith appears in Seattle's Magnuson Park
                    <br>The 2000 Summer Olympics in Sydney, Australia come to a close

                    <br>
                    <br>
                    <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
