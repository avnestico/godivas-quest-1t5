<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 21;
$questionTitle = "Game, Set, Match";
ob_start();
?>
The solutions to this phase's puzzles are, in order:

DJIKSTRA
FEDERATIN
MARRIES
NATALE
NOTCHILE
WARRIOR

Upon solving one puzzle from this phase, you would have received the following in an email:
    <blockquote>FWD: See You In Court

If I were you, I'd make sure your cells are energized.

Our mutual friend Bold isn't very happy with people snooping around her site, and she's letting people know it. She's always been a fan of reversing things for her own benefit, so I think you need to end this quickly, before she can turn the tables.</blockquote>
"Energized cells" should have you thinking about adenosine triphosphate, or ATP, the 'molecular unit of currency'. ATP is also the acronym for the Association of Tennis Professionals, the organization that promotes the interests of men's tennis players around the world. Combined with the multitude of tennis references in the email, puzzle title, and puzzle text, this should hint to you that you're going in the right direction.

Some of the puzzle solutions in this round sound similar to names of players on the ATP World Rankings. In fact, each name can be mapped to one of the top 6 players as of the <a href="http://en.wikipedia.org/wiki/2014_ATP_World_Tour#Singles">ATP Singles Rankings as of the end of 2014</a>:

Player        Answer
---------  ---------
DJOKOVIC    DJIKSTRA
FEDERER    FEDERATIN
NADAL         NATALE
WAWRINKA     WARRIOR
NISHIKORI   NOTCHILE
MURRAY       MARRIES

Once you've ordered the puzzle answers this way, look at the last letter of each answer ("Ms. Bold has always been a fan of reversing things"). From bottom to top, these letters spell SERENA, which is Ms. Bold's first name and the solution to this puzzle.

As an additional check step, Serena Williams was the number one ranked women's tennis player during Godiva's Quest 1T5. Most of the people who solved this puzzle actually skipped the above process and submitted the names of famous tennis players as guesses, only to be surprised to see that 'Serena' was correct.

Questers needed to go back to <a href="../../godivanet/">GodivaNet</a> one last time after solving this puzzle in order to complete the Quest.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "SERENA");
