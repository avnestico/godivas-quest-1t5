<script src="../../../php_source/js/toggle_visibility.js" type="text/javascript"></script>
<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");
require_once(__DIR__ . "/../../../php_source/global_functions.php");

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
# 23 # 30 # 31 # 28 # 35 #
#====#====#====#====#====#

There is only one solution to this Challenger in which every number is between 1 and 15. With patience, it can be found without needing to make any guesses.

<?php print_spoiler("spoiler", "Click here to expand puzzle solution", true) ?>
The solution is as follows:

#====#====#====#====#====#====#
# (\)# (A)# (B)# (C)# (D)# 19 #
#====#====#====#====#====#====#
# (1)#  3 |    |    |    # 32 #
#====#----|----|----|----#====#
# (2)#    |    |  2 |    # 37 #
#====#----|----|----|----#====#
# (3)#  3 |    |    |  4 # 22 #
#====#----|----|----|----#====#
# (4)#    | 14 |    |    # 21 #
#====#====#====#====#====#====#
# (/)# 23 # 30 # 31 # 28 # 35 #
#====#====#====#====#====#====#

(4): (4A) + (4C) + (4D) = 7     The smallest a cell can be is 1
                                Thus, each cell can be no larger than 5

(A): (2A) + (4A) = 17           The largest a cell can be is 15
                                Thus, 2 &lt;= (4A) &lt;= 5
                           (4): Thus, (4C) and (4D) are each &lt;= 4

(\): (2B) + (3C) + (4D) = 32    The largest a cell can be is 15
                                Thus, 2 &lt;= (4D) &lt;= 4
                                Thus, (2B) and (3C) are each &gt;= 13
                           (4): Thus, 2 &lt;= (4A) &lt;= 4 and 1 &lt;= (4C) &lt; 3

(B): (1B) + (2B) + (3B) = 16    The smallest a cell can be is 1
                                Thus, 13 &lt;= (2B) &lt;= 14

(3): (3B) + (3C) = 15           The smallest a cell can be is 1
                                Thus, 13 &lt;= (3C) &lt;= 14

(\): (2B) + (3C) + (4D) = 32    Note (2B) &lt;= 14; (3C) &lt;= 14; (4D) &lt;= 4
                                Thus (2B) = (3C) = 14 and (4D) = 4

#====#====#====#====#====#====#
# (\)# (A)# (B)# (C)# (D)# 19 #
#====#====#====#====#====#====#
# (1)#  3 |    |    |    # 32 #
#====#----|----|----|----#====#
# (2)#    | 14 |  2 |    # 37 #
#====#----|----|----|----#====#
# (3)#  3 |    | 14 |  4 # 22 #
#====#----|----|----|----#====#
# (4)#    | 14 |    |  4 # 21 #
#====#====#====#====#====#====#
# (/)# 23 # 30 # 31 # 28 # 35 #
#====#====#====#====#====#====#

The rest of the puzzle can be trivially solved because we know (4A) &gt;= 2 and (4A) + (4B) = 3

(4): (4A) = 2, (4B) = 1
(B): (1B) = 1, (3B) = 1
(A): (2A) = 15
(C): (1C) = 14
(/): (1D) = 14
(D): (2D) = 6
<?php print_spoiler_end() ?>
The solution looks like this:

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
# 23 # 30 # 31 # 28 # 35 #
#====#====#====#====#====#

Reading the box from left to right, top to bottom, you get the hex string 31EEFE2631E42E14.

Submitting the string as an answer prompts the response "What does that spell?". This, plus the substring '263' (an often-seen conversion of 'BFC') should hint to you that you should convert the string from (hexadecimal) numbers to letters.

This conversion gets you CANNON BFC AND BNAD, three engineering student groups at U of T collectively referred to as the <a href="'http://skulepedia.ca/wiki/Category:Skule_Trinity">Skule Trinity</a>.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "TRINITY");
