<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 15;
$questionTitle = "No Turning Back";
ob_start();
?>

<p>Brave hero,<br/>
The prince of darkness has taken everything from you, including your princess. Starting from nothing, go find these 8 items in the correct order to save your princess. Do not deviate from this goal.</p>
<ul>
    <li>Boo's Mansion</li>
    <li>A comet piece</li>
    <li>Geno</li>
    <li>The Graveyard</li>
    <li>The key to unlock Jon's stocks (found in a different graveyard)</li>
    <li>The Royal Crypt</li>
    <li>Sacred Forest Meadow</li>
    <li>Tarm Ruins</li>
</ul>

<p>It's dangerous to go alone. Take this in your left hand.</p>
<br/>

<img src="no_turning_back.png" alt="No Turning Back">

<p>P.S. If there are multiple entrances, assume that you entered from the East.</p>

            </div>
        </div>

        <div id="content_container">
            <div id="modification">
                <p>Modification (Jan 6, 11:30 a.m. EST): There was an error in the fifth clue. It has been fixed.</p>
                <p>Modification (Jan 7, 11:30 p.m. EST): The picture was changed to fix errors that made the puzzle
                    unsolvable. Letter order and one number has changed. Please refresh the page and bypass your cache
                    if you worked on the puzzle before this time.</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
