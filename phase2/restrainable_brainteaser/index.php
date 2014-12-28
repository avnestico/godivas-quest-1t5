<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 13;
$questionTitle = "Restrainable Brainteaser";
ob_start();
?>

<p>Don't get sea legs on this one, or you might end up wageless.</p>
<br/>
<p>CDEEFLORT</p>
<p>ADDDEEHNRU</p>
<p>AEFGHSTTU</p>
<p>ADEEHLLNOSSW</p>
<p>ADDHHLNO</p>
<p>ADEEIKNPS</p>
<p>AAELLSRT</p>
<p>EEEEHLNRSSTV</p>
<p>GILNNORSU</p>
<p>ADEELNOR</p>
<p>CEHINPU</p>
<p>AEEGHINRRSTT</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
