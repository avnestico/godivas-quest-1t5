<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 11;
$questionTitle = "As The Crow Flies";
ob_start();
?>

<p>I saw all of these license plates on the road the other day. At first I thought it was a coincidence, but
    as the hours went past, I realized just how far they all had gone and what their final destination was.</p>
<br/>

<img src="plate1.jpg" width="49%">
<img src="plate2.jpg" width="49%">
<img src="plate3.jpg" width="49%">
<img src="plate4.jpg" width="49%">
<img src="plate5.jpg" width="49%">
<img src="plate6.jpg" width="49%">
<img src="plate7.jpg" width="49%">
<img src="plate8.jpg" width="49%">

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
