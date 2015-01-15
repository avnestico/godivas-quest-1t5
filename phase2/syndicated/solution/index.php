<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 12;
$questionTitle = "Syndicated";
ob_start();
?>
This puzzle is a Challenger, often syndicated and printed in newspapers. The goal of the puzzle is to fill every square in the box with a number from 1 to 9 such that each row, column, and diagonal adds up to the corresponding number outside the box.

It becomes quite clear that this puzzle isn't an ordinary Challenger. All the numbers are in hexadecimal, implying that the numbers in the boxes can be filled from 1 to F (decimal 15). Converting all the hex numbers to decimal:

                    #====#
                    # 19 #
|----|----|----|----#====#
|  3 |    |    |    # 32 #
|----|----|----|----#====#
|    |    |  2 |    # 37 #
|----|----|----|----#====#
|  3 |    |    |  4 # 22 #
|----|----|----|----#====#
|    | 14 |    |    # 21 #
#====#====#====#====#====#
# 23 # 30 # 31 # 38 # 35 #
#====#====#====#====#====#

There is only one solution to this Challenger in which every number is between 1 and 15. With patience, it can be found without needing to make any guesses. The solution is:

                    #====#
                    # 19 #
|----|----|----|----#====#
|  3 |  1 | 14 | 14 # 32 #
|----|----|----|----#====#
| 15 | 14 |  2 |  6 # 37 #
|----|----|----|----#====#
|  3 |  1 | 14 |  4 # 22 #
|----|----|----|----#====#
|  2 | 14 |  1 |  4 # 21 #
#====#====#====#====#====#
# 23 # 30 # 31 # 38 # 35 #
#====#====#====#====#====#

Reading the box from left to right, top to bottom, you get the hex string 31EEFE2631E42E14.

Submitting the string as an answer prompts the response "What does that spell?". This, plus the substring '263' (an often-seen conversion of 'BFC') should hint to you that you should convert the string from (hexadecimal) numbers to letters.

This conversion gets you CANNON BFC AND BNAD, three engineering student groups at U of T collectively referred to as the <a href="'http://skulepedia.ca/wiki/Category:Skule_Trinity">Skule Trinity</a>.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "TRINITY");
