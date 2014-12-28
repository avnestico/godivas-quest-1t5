<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 1;
$questionTitle = "Bring The Beat Back";
ob_start();
?>

<p>Geez, this is insufferable. I just can't wait for these clips to end.</p>
<br/>

<p><a href="verse_1.mp3">Verse 1</a></p>

<p><a href="verse_2.mp3">Verse 2</a></p>

<p><a href="hook.mp3">Hook</a></p>

<p><a href="bridge.mp3">Bridge</a></p>

<p><a href="verse_3.mp3">Verse 3</a></p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
