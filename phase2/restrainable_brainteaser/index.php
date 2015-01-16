<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 13;
$questionTitle = "Restrainable Brainteaser";
ob_start();
?>
<p>Don't get sea legs on this one, or you might end up wageless.</p>
<br/>
<p>AAELLSRT</p>
<p>CEHINPU</p>
<p>CDEEFLORT</p>
<p>AEFGHSTTU</p>
<p>AEEGHINRRSTT</p>
<p>AAEGLLTSS</p>
<p>GILNNORSU</p>
<p>ADEELNOR</p>
<p>ADDHHLNO</p>
<p>ADDDEEHNRU</p>
<p>EEEEHLNRSSTV</p>

<?php print_modification() ?>

<p>Modification (Jan 4, 10:30 p.m. EST): The order of this puzzle's clues has been changed, and some
intermediate clues have been added. Please submit your intermediate answers again.<p>
<p>Modification (Jan 6, 1:30 a.m. EST): Due to an ambiguity, the fourth clue in the puzzle has been
removed and replaced with what is now the fifth clue. The rest of the puzzle, including the solution,
is unchanged.</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
