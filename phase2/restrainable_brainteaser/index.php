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

            </div>
        </div>

        <div id="content_container">
            <div id="modification">
                <p>Modification (Jan 4, 10:30 p.m. EST): The order of this puzzle's clues has been changed, and some
                intermediate clues have been added. Please submit your intermediate answers again.<p>
<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
