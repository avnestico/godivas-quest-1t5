<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 7;
$questionTitle = "A New Beginning";
ob_start();
?>
The answers to the six phase 1 puzzles are, in order:

CAPITALCITY
FOUNDED
1729
PROTEAMS
COMMON
DENOMINATOR

A quick google search will tell you that Baltimore, the capital city of Maryland, was founded in 1729. Baltimore's pro sports teams are the Orioles (MLB) and the Ravens (NFL).

The 'common denominator' of the raven and the oriole refers to the least-significant common word of their scientific classifications. This is their order, Passeriformes.

After solving this puzzle, questers received an email that nudged them towards <a href="../../godivanet/">GodivaNet</a>.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "PASSERIFORMES");
