<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 4;
$questionTitle = "Bottoms Up";
ob_start();
?>

<p>An old widower handed me this note. I'm having a little trouble digesting it, do you think you could
    help?</p>
<br/>

<img src="bottoms_up.jpg" alt="Bottoms Up"
     title="When in doubt, use what Wikipedia would consider the alternate spelling."/>

<p>That's strange. It looks to me like the ordering is messed up. Don't ask me why.</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
