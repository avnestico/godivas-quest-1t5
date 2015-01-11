<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 1;
$questionTitle = "Bring The Beat Back";
ob_start();
?>
The first thing to do is identify each whistled song. In listed order:

Song               Artist
-----------------  -------------------------------------
Cupid's Chokehold  Gym Class Heroes
Call Me Maybe      Carly Rae Jepsen
Coldplay           Speed of Sound
The Beatles        Sgt. Pepper's Lonely Hearts Club Band
B.O.B              So Good

* Note: The first song sounds similar to Breakfast In America by Supertramp, because Cupid's Chokehold sampled that song. Upon submitting Breakfast In America as an answer, you would have been informed that the song you're looking for is one that sampled the one you submitted. *

As hinted by "I just can't wait for these clips to end", you must identify the last word whistled in each song. To help out, the particular segment of each song that you're looking for is given as the title of the mp3 file.

The keywords are, in listed order:

SAFE
AND
SOUND
BAND
SINGULAR

Taylor Swift has a song called Safe and Sound, but she's not a band. Capital Cities is a band with a song by the same name. Conveniently, their name can be made singular.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "CAPITAL CITY");
