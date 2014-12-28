<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 6;
$questionTitle = "Solve For X";
ob_start();
?>

<p>This one can't be that difficult. After all, it's just under there.</p>
<br/>

<div id="centre">
    <img style="border:none;" src="solve_for_x.jpg" alt="Solve For X">
</div>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
