<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 3;
$questionTitle = "Putney";
ob_start();
?>
<b>Special thanks to Abhinav Ramakrishnan.</b>

The puzzle is a simple substitution cipher, which decodes to:

I ONCE THOUGHT THIS NUMBER WAS RATHER DULL
BUT NOW I FIND IT VERY INTERESTING
BECAUSE A FRIEND OF MINE INFORMED ME THAT IT IS THE SMALLEST NUMBER
EXPRESSIBLE AS THE SUM OF TWO CUBES IN TWO DIFFERENT WAYS

(key=JECVMSRXKADILBUTPOQHWNYFZG)

This is a description of the <a href="http://en.wikipedia.org/wiki/Taxicab_number">taxicab number</a>, 1729.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), true, "1729");
