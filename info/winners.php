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
                        $message = $_REQUEST['message'];
                        if ($message != "")
                            echo "<h2>$message</h2>";
                        ?>
                    </h2>

                    <h1><strong>Winners</strong></h1>

                    <p>The first ten(-ish) solvers received a <a href="../media/the patch.jpg">commemorative patch</a>
                        for their efforts.</p>
                    <table width="83%" border="1">
                        <tr>
                            <th width="48%" scope="col">Name</th>
                            <th width="40%" scope="col">Year/Discipline</th>
                            <th width="12%" scope="col">Solve Time</th>
                        </tr>
                        <tr>
                            <td>1) <span email="gkabhi2@gmail.com"
                                         name="Abhinav Ramakrishnan">Abhinav Ramakrishnan</span></td>
                            <td>Engsci 1T5</td>
                            <td>Jan 6, 9:49AM</td>
                        </tr>
                        <tr>
                            <td>2) Steven Berios</td>
                            <td>Engsci 1T5</td>
                            <td>Jan 6, 9:50AM</td>
                        </tr>
                        <tr>
                            <td>2) Emil Kerimov</td>
                            <td>Engsci 1T5</td>
                            <td>Jan 6, 9:50AM</td>
                        </tr>
                        <tr>
                            <td>2) Andrew Nestico</td>
                            <td>Engsci 1T5</td>
                            <td>Jan 6, 9:50AM</td>
                        </tr>
                        <tr>
                            <td>5) Olga Bondarev</td>
                            <td>ECE 1T6</td>
                            <td>Jan 6, 1:22PM</td>
                        </tr>
                        <tr>
                            <td>6) Colin Parker</td>
                            <td>&nbsp;</td>
                            <td>Jan 6, 1:30PM</td>
                        </tr>
                        <tr>
                            <td>7) #TeamF!rosh: Jessica Leung, Fan Guo, Connor Smith, Eugene Sha, Ozan Coşkun, Paul
                                Zhou, and Ahmed Yusuf
                            </td>
                            <td>Engsci 1T7</td>
                            <td>Jan 6, 7:50PM</td>
                        </tr>
                    </table>
                    <p><strong>Andrew </strong>will be the third judge of Ye Grande Olde Chariot Races on Wednesday and
                        <strong>Abhinav</strong> and <strong>Andrew</strong> will be Questmasters 1T5! Congratulations!
                    </p>

                    <div class="clearthis">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
