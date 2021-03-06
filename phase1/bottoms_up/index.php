<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 4;
$questionTitle = "Bottoms Up";
ob_start();
?>

<p>I met an old man who had written a note,<br/>
He gave it to me, but I can't digest what he wrote.<br/>
Perhaps his wife'll die.</p>
<br/>

<img src="bottoms_up.jpg" alt="Bottoms Up"
     title="When in doubt, use what Wikipedia would consider the alternate spelling."/>

<p>That's strange. It looks to me like the ordering is messed up. Don't ask me why.</p>

<?php print_modification() ?>

<p>Modification (Dec 31, 12:00 a.m. EST): The opening lines of this puzzle have been changed.</p>
<p>Notice (Jan 4, 10:30 p.m. EST): The fifth clue in the picture should have been listed third. This has
no effect on the solution to the puzzle.</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
