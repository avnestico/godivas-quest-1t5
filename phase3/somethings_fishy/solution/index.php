<script src="../../../php_source/js/toggle_visibility.js" type="text/javascript"></script>
<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");
require_once(__DIR__ . "/../../../php_source/global_functions.php");

$questionNumber = 18;
$questionTitle = "Something's Fishy";
ob_start();
?>
The fact that visible order of the fish changes on every page reload should hint that their placement on the page isn't what's important; it's their file names that matter. You can hover over each picture to see the file name, and google image search the pictures to determine their common names (as requested by the puzzle text). The 16 fish, in file name order, are:

 1. Trout
 2. Haddock
 3. Icefish
 4. Sawfish
 5. Ide
 6. Salmon
 7. Ray
 8. Eel
 9. Damselfish
10. Halibut
11. Escolar
12. Rainbowfish
13. Rockfish
14. Inanga
15. Needlefish
16. Grouper

Reading the first letter of each names spells THIS IS RED HERRING. A red herring is a plot device meant to mislead or distract from the important issue - all this work was just a diversion. What you really have to do is click on each picture; each fish photolinks to a similarly numbered photograph of a professional football or baseball player. These players are all pictured on the Miami Dolphins or Florida Marlins, two teams each nicknamed "The Fish" in their respective sports leagues. Performing the same searching as before, you get:

 1. Incognito, Jr., Richie
 2. Treanor, Matt
 3. Alvarez, Henderson
 4. Little, Larry
 5. Infante, Omar
 6. Alou, Moises
 7. Nen, Robb
 8. Csonka, Larry
 9. Harvey, Bryan
10. Ramirez, Hanley
11. Izzo, Larry
12. Stephenson, Dwight
13. Tannehill, Ryan
14. Marino, Dan
15. Aquino, Luis
16. Sheffield, Gary

The first letters of these players' names, in file name order, spells ITALIAN CHRISTMAS, which is Natale.

Bonus: If you had recognized the eel photgraph as the one used in the <a href="http://knowyourmeme.com/memes/bad-joke-eel">Bad Joke Eel</a> image macro, and had submitted BAD JOKE EEL as a solution, you would have been rewarded with one of the following terrible nautical-themed jokes:

<?php print_spoiler("bad_joke_eel", "Click to expand Bad Joke Eel jokes", true) ?><ul><li>What's green, hangs on a wall, and whistles? ... A red herring! (The joke is longer, but the rest of it would be too distracting)</li><li>What do you call a fish with no eyes? ... A fsh!</li><li>Why do seagulls fly over the sea? ... Because if they flew over the bay, they'd be bagels!</li><li>How much did the pirate pay for his piercing? ... A buck-an-ear!</li><li>What do you call a fish with a tie? ... Sofishticated!</li><li>Where do fish go to get risky credit? ... A loan shark!</li><li>Why do fish always know what they weigh? ... They have their own scales!</li><li>What did the salmon say when he crashed into the wall? ... Dam!</li><li>Did you hear about the goldfish who went bankrupt? ... He's a bronze fish now.</li><li>Why are fish such intelligent creatures? ... Because they always swim in schools!</li><li>Why did the whale cross the road? ... To get to the other tide!</li><li>What do you get when you cross an abbot and a trout? ... A monkfish!</li><li>What do you call a big fish who makes you an offer you can't refuse? .. The Codfather!</li><li>What's the best way to communicate with a fish? ... Drop it a line!</li><li>Two fish are swimming in a tank. One turns to the other and asks, 'how the hell do you drive this thing?!'</li></ul><?php print_spoiler_end() ?>
Also, the url for the fish is /somethings_fishy/, while the url for the athletes is /something_fishy/. Most people didn't catch the subtle difference, and even if they had, going to the latter page redirects you back to the former.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "NATALE");
