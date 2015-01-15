<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 10;
$questionTitle = "Hellhole";
ob_start();
?>
<b>Special thanks to Abhinav Ramakrishnan.</b>

The picture refers to <a href="http://en.wikipedia.org/wiki/Belphegor">Belphegor</a>, one of the seven princes of Hell. Belphegor is associated with Belphegor's Prime, the 31-digit palindromic prime number 1000000000000066600000000000001. The "31 floors" in the puzzle text hints that this number will be useful.

At this point, there doesn't appear to be enough information in the puzzle to solve it. In cases like this, you must think outside the box - the correct course of action is to download the image and open it in Notepad or another text editor. If you scroll all the way down to the end of the file, you'll find a human-readable line right at the bottom:

"{4.366006999999709*^-29, -7.93950899999947*^-29}"

This is a pair of coordinates. Multiplying each number by Belphegor's Prime gives you

(43.66007, -79.39509)

Which are the GPS coordinates of the Sandford Fleming Building.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "SANDFORD FLEMING");
