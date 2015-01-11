<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 11;
$questionTitle = "As The Crow Flies";
ob_start();
?>
Each license plate contains two airport codes, split equally between the United States and Europe. On the license plates referring to American airports, one of the airport codes matches the state of the license plate:

Source  City 1   Destination  City 2
------  -------  -----------  -------
OAK     Oakland  SEA          Seattle
BFI     Seattle  DAL          Dallas
DFW     Dallas   MDW          Chicago
ORD     Chicago  PIE          Tampa

In this order, the license plates form <a href="as_the_crow_flies_usa.jpg">an unbroken path</a> across the country. Following the same state order for the remaining plates gives <a href="as_the_crow_flies_europe.jpg">a similar unbroken path</a> in Europe:

Source  City 1      Destination  City 2
------  ----------  -----------  ----------
WMI     Warsaw      TXL          Berlin
SXF     Berlin      CPH          Copenhagen
RKE     Copenhagen  GSE          Gothenburg
GOT     Gothenburg  OSL          Oslo

These paths look like the letters M and L, respectively. As hinted by "as the hours went past", the letter in the earlier time zones (Europe) should be placed first. Looking for a destination with the identifier 'LM' yields Lash Miller Chemical Laboratories, one of the buildings on the University of Toronto campus.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "LASH MILLER");
