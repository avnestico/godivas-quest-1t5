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
<p>GILNNORSU</p>
<p>ADEELNOR</p>
<p>ADDHHLNO</p>
<p>ADDDEEHNRU</p>
<p>ADEEIKNPS</p>
<p>EEEEHLNRSSTV</p>
<p>ADEEHLLNOSSW</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
