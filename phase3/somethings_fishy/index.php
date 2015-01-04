<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 18;
$questionTitle = "Something's Fishy";
ob_start();
?>

<p>Identify these fish by their last common name.</p>
<br/>

<?php
$fish = range(1,16);
shuffle($fish);
$break = 0;

foreach ($fish as $i) {
    echo("<a href='0$i.jpg'><img style='vertical-align: middle' src='$i.jpg' width='25%'/></a>");
    $break += 1;
    if ($break % 4 == 0) {
        echo("<p></p>\n");
    }
}
?>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
