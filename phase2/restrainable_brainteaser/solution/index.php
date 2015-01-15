<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 13;
$questionTitle = "Restrainable Brainteaser";
ob_start();
?>
As hinted by the title and puzzle text, each unscrambled word decomposes to a phrase involving a body part, with one letter left over.

For example:

RESTRAINABLE -> BRAINTEASER + L
WAGELESS     -> SEA LEGS    + W

The words in the order they appear in the puzzle:

Scramble      Unscrambled   Decomposed
------------  ------------  ----------------
AAELLSRT      LATERALS      ALL EARS     + T
CEHINPU       PENUCHI       CHIN UP      + E
CDEEFLORT     DEFLECTOR     COLD FEET    + R
AEFGHSTTU     FUGHETTAS     HATE GUTS    + F
AEEGHINRRSTT  STRAIGHTENER  HEARTSTRING  + E
AAEGLLTSS     STALLAGES     LAST LEGS    + A
GILNNORSU     NOURSLING     IRON LUNG    + S
ADEELNOR      OLEANDER      LEND EAR     + O
ADDHHLNO      HANDHOLD      OLD HAND     + H
ADDDEEHNRU    DUNDERHEAD    RED HANDED   + U
EEEEHLNRSSTV  NEVERTHELESS  STEEL NERVES + H

The leftover letters, AEEFHHORSTU, unscramble to the word HOUSEFATHER. Performing one last decomposition gives HEART HOUSE, the solution to the puzzle. This refers to Hart House, one of the buildings on the U of T campus.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "HEART HOUSE");
