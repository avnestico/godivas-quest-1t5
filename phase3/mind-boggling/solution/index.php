<script src="../../../php_source/js/toggle_visibility.js" type="text/javascript"></script>
<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");
require_once(__DIR__ . "/../../../php_source/global_functions.php");

$questionNumber = 19;
$questionTitle = "Mind-Boggling";
ob_start();
?>
This puzzle was inspired by <a href="http://web.mit.edu/puzzle/www/2006/puzzles/boston/sixteen_blocks/">this puzzle from the MIT Mystery Hunt</a>. As an aside, the Mystery Hunt is a fantastic resource for puzzle and solution inspiration, and I looked to it many times for ideas.

As hinted by the title, you should look up the rules of Boggle before you start to solve this puzzle. The picture is of a two-player game of Boggle; words crossed out were found by both players, while words found by only one player are assigned a point score based on word length.

Click on the following links to expand the puzzle's solution.

<?php print_spoiler("count", "Letters on the board", true) ?>
Using a few of the words given, you can find all 16 letters on the Boggle board:

incent    C E     I     N N         T
relent      E E       L N     R     T
sirihs          H I I         R S S

china   A C     H I     N
wile        E     I   L               W
tone        E           N   O       T

        A C E E H I I L N N O R S S T W

It's possible to guess the whole board using trial and error, but it's also possible to find the whole thing without much guessing.
<?php print_spoiler("placement", "Letter positioning") ?>
If you look at a Boggle board, you can see that each position can be described in one of three ways: corners (C), edges (E), and middles (M).

+---+---+---+---+
| C |   |   |   |
+---+---+---+---+
|   |   |   | E |
+---+---+---+---+
|   | M |   |   |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+

A corner has 3 adjacent tiles, while an edge has 5 and a middle has 8.

Focusing on the eight letters found only once on the board, we can determine whether they're corners, edges, or middles based on the number of unique letters found beside them in words:

*  Adjacent  Description  Double Letters
-  --------  -----------  ---------------
A  CHN       corner
C  AENHT     edge
H  ACEILNST  middle
L  EEHIIRS   middle       select, chili
O  ENT       corner
R  EIILS     edge         iris
T  CEHNO     edge
W  EIS       corner

Considering how well the number of adjacent letters matches with the positions, it's safe to assume that, for example, A doesn't have any more adjacent letters (which would make it an edge or a middle, not a corner).
<?php print_spoiler("solving1", "Solving the first half of the board") ?>
Consider the letters A, C, and T. We see that C is adjacent to both A and T, but A and T are not adjacent to each other. If A is a corner and C and T are both edges, as we have posited, there is only one way to place them:

+---+---+---+---+
| A | C | T |   |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+

H is adjacent to all three of these letters and O is the corner adjacent to T:

+---+---+---+---+
| A | C | T | O |
+---+---+---+---+
|   | H |   |   |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+

One N is adjacent to A; the remaining letter adjacent to C is an E; and now the remaining letter adajcent to O is the other N:

+---+---+---+---+
| A | C | T | O |
+---+---+---+---+
| N | H | E | N |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+
|   |   |   |   |
+---+---+---+---+
<?php print_spoiler("solving2", "Solving the second half of the board") ?>
We know the remaining letters are E, I, I, L, R, S, S, and W.

L is in one of the two middle squares, which means it must be adjacent to an N. This is the eighth letter that L is adacent to, filling in the only undetermined letter in our chart above. R is not adjacent to an N, which means it must be along the bottom edge of the board. W is adjacent to neither L nor R, so it must be on the other side of the board from L and R, which must be vertically adjacent. This gives us two options:

1) +---+---+---+---+   2) +---+---+---+---+
   | A | C | T | O |      | A | C | T | O |
   +---+---+---+---+      +---+---+---+---+
   | N | H | E | N |      | N | H | E | N |
   +---+---+---+---+      +---+---+---+---+
   |   | L |   |   |      |   |   | L |   |
   +---+---+---+---+      +---+---+---+---+
   |   | R |   | W |      | W |   | R |   |
   +---+---+---+---+      +---+---+---+---+

Now look at the word WINCHES in the answer list. The only C on the board is ajacent to the N on the left side of the board; if the W is in the bottom-right corner, that word can't be made. Thus, solution 2 is the correct one.

Next, look at the word REWINS. For it to fit, both I and S must be adjacent to the N on the left edge of the board. Thus, there must be an E at the bottom edge of the board:

+---+---+---+---+
| A | C | T | O |
+---+---+---+---+
| N | H | E | N |
+---+---+---+---+
|   |   | L |   |
+---+---+---+---+
| W | E | R |   |
+---+---+---+---+

Now, all that's left are two I's and two S's. We just determined that there has to be one of each on the left side of the board, so there has to be one of each on the right as well.

Look at the word SWIRL. There is only one position remaining that's adjacent to both W and R, and that's where the I needs to go. This also places the first S:

+---+---+---+---+
| A | C | T | O |
+---+---+---+---+
| N | H | E | N |
+---+---+---+---+
| S | I | L |   |
+---+---+---+---+
| W | E | R |   |
+---+---+---+---+

Finally, look at the word WISHES. The only way it fits is if the remaining S is adjacent to the center E. This puts the last letter, I, in the bottom right corner.
<?php print_spoiler_end() ?>
The full solution to the board is:

+---+---+---+---+
| A | C | T | O |
+---+---+---+---+
| N | H | E | N |
+---+---+---+---+
| S | I | L | S |
+---+---+---+---+
| W | E | R | I |
+---+---+---+---+

As hinted by the puzzle text, you should read the board in a spiral. This makes the orientation of the board irrelevant when determining relative letter placement. Starting from the A and going down, you get:

ANSWER IS NOT CHILE

This is not a hint; the answer is actually the phrase "NOT CHILE".

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "NOTCHILE");
