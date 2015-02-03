<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 20;
$questionTitle = "Elementary";
ob_start();
?>
As hinted by the puzzle title and "the original 118" (a reference to the original 151 Pokemon), you should be thinking about the Periodic Table. Taking the Pokedex number of each Pokemon shown (helpfully, this is found in the file name of each picture) and converting to the corresponding element's symbol:

 57 111  68
 La  Rg  Er

 19  53  43   2   7  68
  K   I  Tc  He   N  Er

 92  28  16
  U  Ni   S

 32   7  68  53   6
 Ge   N  Er   I   C

 52   7  28  16
 Te   N  Ni   S

 15  92   6  19
  P   U   C   K

  8  45   8   8  15  16
  O  Rh   O   O   P   S

 15  57  39  68
  P  La   Y  Er

"The penunltimate battle is the only double battle" means that you should take the second-last phrase as two words. Every other set of Pokemon is a single word. This gives you:

Larger Kitchener uni's generic tennis, puck, or hoops player

This is referring to the University of Waterloo's varsity team name, the Warriors. If you submit WARRIORS, you'll get the error message "Note that there's no Pidgey at the end of the last team." Pidgey is #16 in the Pokedex, which refers to Sulfur (S). Thus, the correct answer to the puzzle is the singular form, WARRIOR.

Bonus: Three pokemon, Gastly, Oddish, and Rhyhorn, are shown with their nonstandard, "shiny" sprite. This is because these three Pokemon correspond to three radioactive elements (Technetium, Uranium, and Roentgenium, respectively).

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "WARRIOR");
?>
