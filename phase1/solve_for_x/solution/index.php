<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 6;
$questionTitle = "Solve For X";
ob_start();
?>
This type of puzzle is a <a href="http://en.wikipedia.org/wiki/Nonogram">nonogram</a>. The solution to the nonogram is:

<img src="solution.jpg"/>

The nonogram reads, "Z = Y/X". Knowing this, the title is an obvious clue for what to do next. Attempting to submit Y OVER Z as an answer, as many are likely to do, gives the response:

<q>I don't want what X is equal to, I want what X is.</q>

X is the denominator of the fraction Y/X.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "DENOMINATOR");
