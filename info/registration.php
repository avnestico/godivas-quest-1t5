<?php
session_start();
include_once "../php_source/global_variables.php";
if (!array_key_exists('message', $_REQUEST)) {
    $_REQUEST['message'] = "";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>

    <title>Registration</title>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css" media="screen"/>
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
                    <h2>Registration</h2>

                    <?php
                    $message = $_REQUEST['message'];
                    if ($message != "")
                        echo "<h1>$message</h1>";
                    ?>

                    <script type="text/javascript" src="../php_source/submitenter.js"></script>
                    <div style="text-align:center">
                        <form name="registerform" action="../php_source/registration/perform_register.php" method="post"
                              id="registerform">
                            First name:<br/>
                            <input name="firstname" type="text" value=""
                                   onKeyPress="return submitenter(this,event)"/><br/>
                            <br/>
                            Last name:<br/>
                            <input name="lastname" type="text" value=""
                                   onKeyPress="return submitenter(this,event)"/><br/>
                            <br/>
                            Email: (Important)<br/>
                            <input name="email" type="text" value="" onKeyPress="return submitenter(this,event)"/><br/>
                            <br/>

                            <div id="form_submit" onclick="registerform.submit();">
                                <a><b>Register</b></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
