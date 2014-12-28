<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 12;
$questionTitle = "Syndicated";
ob_start();
?>

<p><em>Editor's note: This puzzle had 144 possible permutations. This is the only one with a unique
        solution. The solution can be found without any guessing. This note is not a hint.</em></p>
<br/>

<img style="border:none;" src="syndicated.jpg" alt="Syndicated">

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
