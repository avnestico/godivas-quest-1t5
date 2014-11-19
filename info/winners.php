<?php
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
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"/>
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
                    <h2>
                        <?php
                        $message = htmlspecialchars($_REQUEST['message']);
                        if ($message != "")
                            echo "<h2>$message</h2>";
                        ?>
                    </h2>

                    <h1><strong>Winners</strong></h1>

                    <p>The first ten(-ish) solvers received a <a href="../media/patch.jpg">commemorative patch</a>
                        for their efforts.</p>
                    <table width="83%" border="1">
                        <tr>
                            <th width="48%" scope="col">Name</th>
                            <th width="40%" scope="col">Year/Discipline</th>
                            <th width="12%" scope="col">Solve Time</th>
                        </tr>
                        <tr>
                            <td>1)</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2)</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
