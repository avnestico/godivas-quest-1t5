<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="generator" content=
"HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />
<title>Godiva's Quest </title>
<link rel="stylesheet" href="style/mystyle.css" type="text/css" />
</head>
<body>
<div id="container">
<?php
include 'header.php'
?>
<div id="maincontent_container">
<div id="maincontent">
<div id="maincontent_top">
<div id="started_container">
<?php
$message = $_REQUEST['message'];
if ($message != "")
  echo "<h2>$message</h2>";
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
