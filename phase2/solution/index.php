<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 14;
$questionTitle = "Crossroads";
ob_start();
?>
The solutions to this phase's puzzles are, in order:

VARSITY
ELMSLEY
SANDFORD FLEMING
LASH MILLER
TRINITY
H(E)ART HOUSE

Each of these is a building on the U of T campus. Plotting these buildings, you might see that they form two intersecting lines across campus:

<img src="crossroads.jpg" />

The lines intersect at University College, the solution to this puzzle.

Bonus: Peter King was given his name because Peter St. and King St. W intersect in the same way that University Ave. and College St. do.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "UNIVERSITY COLLEGE");