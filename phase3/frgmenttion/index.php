<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 16;
$questionTitle = "Fr<a>gment</a>tion";
ob_start();
?>



<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
