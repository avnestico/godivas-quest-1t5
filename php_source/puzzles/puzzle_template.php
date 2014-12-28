<?php
function print_template($questionNumber, $questionTitle, $content) {
    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta name="viewport" content="width=800px"/>
    <title><?php echo $questionTitle ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="../../favicon.ico"/>
    <link rel="stylesheet" href="../../style/mystyle.css" type=
    "text/css"/>
</head>
<body>
    <div id="container">
        <?php
        include_once(__DIR__ . "/puzzle_header.php");
        include_once(__DIR__ . "/../message.php");
        ?>
        <div id="content_container">
            <div id="content">
                <h2>#<?php echo $questionNumber ?>: <?php echo $questionTitle ?></h2>
                <?php echo $content ?>
            </div>
        </div>
    </div>
</body>
</html>

    <?php
}
