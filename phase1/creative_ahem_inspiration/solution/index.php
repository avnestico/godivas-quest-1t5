<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 5; //number
$questionTitle = "Creative, Ahem, Inspiration";  //string
ob_start();
?>
Step one of the puzzle is identifying each of the albums and chemicals. From left to right, top to bottom:

Album                              Artist
---------------------------------  -----------------------
Cold Turkey                        Plastic Ono Band
(What's The Story) Morning Glory?  Oasis
Another Side                       Fingers Inc.
nostalgia, Ultra.                  Frank Ocean
Tarkio                             Brewer & Shipley
The VS. Redux                      Macklemore & Ryan Lewis

Chemical
---------
Cocaine
Codeine
Heroin
Marijuana
MDMA
Novocaine

Each chemical is a recreational drug, and each album has a famous or popular song whose primary subject matter is one of the drugs. Sorting by release date of the albums:

Date  Song                    Artist            Drug
----  ----------------------  ----------------  ---------
1969  Cold Turkey             Plastic Ono Band  Heroin
1970  One Toke Over The Line  Brewer & Shipley  Marijuana
1986  Mystery of Love         Fingers Inc.      MDMA
1995  Morning Glory           Oasis             Cocaine
2010  Otherside               Macklemore        Codeine
2012  Novacane                Frank Ocean       Novocaine

Reading down the first letter of each song in this order spells the answer.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "COMMON");
