<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 16;
$questionTitle = "Fr&lt;a&gt;gment&lt;/a&gt;tion";
ob_start();
?>
While this page looks to be totally jumbled at first, the title is a hint that you should be checking the source code of the page. The HTML &lt;a&gt; tag defines a hyperlink; without an "href" element, the link doesn't actually lead anywhere.

Taking only the letters of the title and ignoring all markup, you'll see that it reads "Fragmentation". Do the same for the HTML in the source code, and you see:

42 Divide eighty-four by two
65 Lake County Airport (in Roman numerals, LXV = 65)
63 Europium on Periodic Table
6F Sixth number, sixth letter
6D Twice as good as threedee
69 Lol sixty-nine lol
6E Fourth pair minus one
27 The second prime's cube
20 One score and zero years
55 Vietnam war begins
6E Insert two pairs before previous three, reversed
69 
74 Second most famous AK
65 Repeat second pair
64 Two to the seventh power computable, divided by two (so, 2^6)

This gives you an ascii string:

42 65 63 6F 6D 69 6E 27 20 55 6E 69 74 65 64

which is converted to "Becomin' United". The apostrophe is a hint that you want to drop the last letter of the solution in your answer. If you try to submit CONFEDERATIN, you get a hint to "Be less negative." Removing the "con" from "confederating" gives you a synonym, "federating".

Also, even though the HTML used on the puzzle page would never pass validation, note that every tag is nested and closed properly.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "FEDERATIN");
?>
