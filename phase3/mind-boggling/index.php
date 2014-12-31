<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 19;
$questionTitle = "Mind-Boggling";
ob_start();
?>

<p>
    Stop this madness before it spirals out of control!
</p>
<br/>

<img src="mind-boggling.jpg" alt="Mind-Boggling">

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
