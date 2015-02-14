<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 15;
$questionTitle = "No Turning Back";
ob_start();
?>
Step one of this puzzle is to determine the nature of the list of items. Each item is found in a different video game, and more importantly, each item is found at the end of a <a href="http://www.edge-online.com/features/how-zeldas-lost-woods-inspired-a-forest-of-puzzling-mazes/">heterogeneous forest maze</a>. A heterogeneous maze is a video game puzzle with multiple seemingly identical paths and only one correct route - every wrong turn will bring you back to the start of the maze.

Each item is from a different game; the "correct order" that the items need to be found in is chronological by game release date.

Release  Game                       Item
-------  -------------------------  ------------------------------
1986     Legend of Zelda (LoZ) NES  The Graveyard
1996     Super Mario RPG            Geno
1998-07  Brave Fencer Musashi       The key to unlock Jon's stocks
1988-11  LoZ: Ocarina of Time       Sacred Forest Meadow
2000     Paper Mario                Boo's Mansion
2001     LoZ: Oracle of Seasons     Tarm Ruins
2004     LoZ: Minish Cap            Royal Crypt
2012     Paper Mario Sticker Star   A comet piece

You must determine the path through each forest maze to get to each item, and, using the image's system (left = -1; straight = 8; right = 2), assign a numerical value to each route. Then, you must follow those numerical values around the letter circle to spell the puzzle's solution.

Other clues are hidden in the puzzle text. You must:<ul><li>begin from (but not use) the letter O ("starting from nothing")</li><li>ignore other items found in the maze that would slow you down ("no turning back", "do not deviate from this goal")</li><li>go counterclockwise around the letter circle ("take this in your left hand" - left hand rule)</li><li>assume that you entered from the East (this is an exact quote), because some mazes have multiple entry points and using the wrong one would change the solution</li></ul>Once you have each value, progress around the letter wheel by that many letters, continuing from the most recent letter found. This gives you the solution (L = left, R = right, S = straight):

Item                            Directions  Value  Letter
------------------------------  ----------  -----  ------
<a href="http://zelda.wikia.com/wiki/Lost_Woods#The_Legend_of_Zelda">The Graveyard</a>                   RLLR        2      D
<a href="http://faqs.neoseeker.com/Games/SNES/super_mario_rpg_forest_maze.gif">Geno</a>                            RLSRLL      9      J
<a href="http://www.gamefaqs.com/ps/196813-brave-fencer-musashi/faqs/47394">The key to unlock Jon's stocks</a>  RLSRLS      18     I
<a href="http://faqs.neoseeker.com/Games/N64/zelda_64_lost_woods_pooonshu.jpg">Sacred Forest Meadow</a>            RLRLSLR     11     K
<a href="http://faqs.neoseeker.com/Games/N64/paper_mario_forever_forest.gif">Boo's Mansion</a>                   SLLRLRR     11     S
<a href="http://zelda.wikia.com/wiki/Lost_Woods#The_Legend_of_Zelda:_Oracle_of_Seasons">Tarm Ruins</a>                      SLLL        5      T
<a href="http://faqs.neoseeker.com/Games/GBA/zelda_minish_cap_royal.gif">Royal Crypt</a>                     SLSRRL      18     R
<a href="http://www.gamefaqs.com/3ds/997828-paper-mario-sticker-star/faqs/65245">A comet piece</a>                   RLRSLR      12     A

Some solution pages have absolute directions (west, north, east). You must convert these to relative directions; this is why making sure that you start from the East is important. Also, for Brave Fencer Musashi, search the linked page for '---MEANDERING FOREST---'.

Bonus: in a reference to how you're attempting to find the shortest path through these mazes, Dijkstra's algorithm is used to solve shortest path problems.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "DIJKSTRA");

