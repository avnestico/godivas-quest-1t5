<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 2;
$questionTitle = "Startups";
ob_start();
?>
The seven companies, in the order listed, are:

FORTUNE BRANDS
COLECO
YOUTUBE
AVONPRODUCTS
JOHNDEERE
WRIGLEY
NINTENDO

As hinted by '45 degree angle', you want to look at the first letter of the first answer, second letter of the second answer, and so on. Doing so spells 'founded', the puzzle's answer.

<div id="solution">FOUNDED</div>
<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), true);
