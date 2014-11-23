<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />
    <title>Godiva's Quest </title>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css" />
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
                    <h2>
                        <?php
                        if (!array_key_exists('message', $_REQUEST)) {
                            $_REQUEST['message'] = "";
                        }
                        $message = htmlspecialchars($_REQUEST['message']);
                        if ($message != "")
                            echo "<h2>$message</h2>";
                        ?>
                    </h2>
                    <h1><strong>Phase 1</strong></h1>
                    <p><a href="events.php">#1: This Day in History</a></p>
                    <p><a href="photo.php">#2: A Picture's Worth</a></p>
                    <p>Good luck!</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
