<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 4;
$questionTitle = "Bottoms Up";
ob_start();
?>
The clues to the puzzle, in their proper order (i.e., with the fifth clue placed in the third spot as per the notice at the bottom):

Herm
Hoot art
Hrow
Ides
Recoups
Subadar (note the picture's title text)
Theta
Thog

To aid in identifying the clues, they are positioned in alphabetical order by answer.

The rhyme of the riddle should point the user towards the children's song, <a href="http://en.wikipedia.org/wiki/There_Was_an_Old_Lady_Who_Swallowed_a_Fly">There Was an Old Lady Who Swallowed a Fly</a>. Comparing the clues to the text of the song shows that some clues sounds similar to the final word in an animal's description. A close comparison shows that each clue is an anagram of a final word with one letter added.

In song order:

Word    Clue      Letter
------  --------  ------
Die     Ides      S
Her     Herm      M
Absurd  Subadar   A
That    Theta     E
Hog     Thog      T
Throat  Hoot art  O
How     Hrow      R
Course  Recoups   P

Reading the removed letters from the bottom up (as hinted by the title) gives the answer.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "PRO TEAMS");
