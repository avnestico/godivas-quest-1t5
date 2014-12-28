<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 10;
$questionTitle = "Hellhole";
ob_start();
?>

<p>31st floor, going down.</p>
<br/>
<img style="border:none;" src="hellhole.jpg" width="100%" alt="Hellhole">

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
