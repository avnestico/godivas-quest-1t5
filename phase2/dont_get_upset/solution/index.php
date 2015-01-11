<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 8;
$questionTitle = "Don't Get Upset";
ob_start();
?>
Each line of the puzzle encodes a year (current year minus age), name, item, and number. Considering one name each from A to G is represented, it seems like ordering alphabetically by name is a good bet:

Name     Year  Item         Number
-------  ----  -----------  ------
Adam     2008  Fiesta       5
Becca    2001  Orange       4
Chris    1998  Alamo        3
David    1999  Rose         7
Erica    2008  Capital One  2
Francis  1978  Cotton       1
Grandpa  1951  Sugar        8

As hinted by the puzzle text, each item is the name of a college football Pro Bowl; more importantly, each year corresponds to a game held at the corresponding Pro Bowl where a massive underdog defeated their heavily favoured opposition (also known as an upset).

Taking the victors' names and indexing by the item number gives the puzzle's answer:

Winner        Number  Letter
------------  ------  ------
WESTVIRGINIA  5       V
OKLAHOMA      4       A
PURDUE        3       R
WISCONSIN     7       S
MICHIGAN      2       I
TEXAS         1       T
KENTUCKY      8       Y

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "VARSITY");
