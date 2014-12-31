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

            </div>
        </div>

        <div id="content_container">
            <div id="modification">
                Modification (Dec 31, 12:00 a.m. EST): The opening lines of this puzzle have been changed.
<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
