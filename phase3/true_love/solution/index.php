<script src="../../../php_source/js/toggle_visibility.js" type="text/javascript"></script>
<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");
require_once(__DIR__ . "/../../../php_source/global_functions.php");

/**
 * print_spoiler_step
 *
 * Print a step as a spoiler that can be expanded by clicking.
 *
 * Setting $number = -1 ends the series of steps.
 *
 * @param $number
 * @param bool $is_first
 */
function print_spoiler_step($number, $is_first=false) {
    if ($number !== -1) {
        print_spoiler("step_" . $number, "Step " . $number, $is_first);
    } else {
        print_spoiler_end();
    }
}

$questionNumber = 17;
$questionTitle = "True Love";
ob_start();
?>
This puzzle is an elimination logic puzzle. You must determine the correct arrangement of the cars, drivers, and passengers by eliminating options that violate one or more of the constraints. All of the names are given, so you should list them all before you start.

Bros     Cars        Girls
-------  ----------  --------
Adam     Audi        Brenda
Alex     BMW         Carol
Andy     Chevrolet   Francine
Blake    Ford        Linda
Darius   Porsche     Shirley
David    Tesla       Susan
Frankie  Volkswagen
Jake
Jason
Mack
Matthew
Oliver
Tomas

By the following steps, you can determine who was in which car, the times the cars left at, and the order they arrived.
Considering it's an explicit numbered ordering, it might make sense to order the cars by arrival.

<?php print_spoiler_step(1, true);?>
By 8, 22, and 23:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1
2
3
4
5
6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(2); ?>
By 4 and 20, with help from 7:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1
2
3
4
5                     Tesla   Carol   1
6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(3); ?>
By 17 and 19, with help from 7:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1
2
3
4
5                     Tesla   Carol   1
6                             Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(4); ?>
By 12:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1
2
3
4                             Linda   2
5                     Tesla   Carol   1
6                             Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(5); ?>
By 13, the two cars that left at 3 pm arrived one after the other. By 24, the two cars that left at 2 pm are American. By 3, the first car to arrive is a BMW, which isn't American. Thus:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1                     BMW             3
2                                     3
3                                     2
4                             Linda   2
5                     Tesla   Carol   1
6                             Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(6); ?>
By 21, Adam, Andy, and Alex are each in different cars that left at 1 or 2 pm. By 2 and 1 respectively, Andy is in the Ford and Adam isn't in the Tesla. Thus, Adam is in the Chevy and Alex is in the Tesla. Thus, by 5, Frankie must be in the car that arrived sixth. This means that Blake-Brenda is the only pair of people that can possibly satisfy 9 (the other option was Frankie-Francine, but Shirley is in the sixth car - whether Frankie is driver or passenger, he can't possibly be dating Francine). Thus, we learn Blake is a passenger:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1             Blake   BMW     Brenda  3
2                                     3
3                                     2
4                             Linda   2
5                     Tesla   Carol   1
6                             Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(7); ?>
By 13, Jason was in one of the first two cars to leave, and by 11, he's dating someone. Thus, he can only be in the second car along with Susan. This also locks down Matthew's spot beside Shirley:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1             Blake   BMW     Brenda  3
2             Jason           Susan   3
3                                     2
4                             Linda   2
5                     Tesla   Carol   1
6             Matthew         Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(8); ?>
By process of elimination to add Francine, then by 13 and 10:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1     Mack    Blake   BMW     Brenda  3
2             Jason           Susan   3
3     Jake                    Francin 2
4                             Linda   2
5                     Tesla   Carol   1
6             Matthew         Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(9); ?>
By 1, 2, and 21 again, Adam is driving a car that left at 2 pm. Since Jake is driving the car that arrived third, Adam must be driving the car that arrived fourth. As we already know, this is the Chevy. Thus, Andy is the passenger in Jake's Ford:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1     Mack    Blake   BMW     Brenda  3
2             Jason           Susan   3
3     Jake    Andy    Ford    Francin 2
4     Adam            Chevy   Linda   2
5                     Tesla   Carol   1
6             Matthew         Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(10); ?>
By 5 and 14, we know Frankie is driving the Porsche. With process of elimination to add the final car:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1     Mack    Blake   BMW     Brenda  3
2             Jason   Audi    Susan   3
3     Jake    Andy    Ford    Francin 2
4     Adam            Chevy   Linda   2
5                     Tesla   Carol   1
6     Frankie Matthew Porsche Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(11); ?>
By 6 and 16:

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1     Mack    Blake   BMW     Brenda  3
2             Jason   Audi    Susan   3
3     Jake    Andy    Ford    Francin 2
4     Adam    Oliver  Chevy   Linda   2
5             David   Tesla   Carol   1
6     Frankie Matthew Porsche Shirley 6
7     Tomas   -       Volks   -       5
<?php print_spoiler_step(12); ?>
Lastly, by 5 again (note that 5 says "arrived in that order", not "arrived one after the other"):

Order Driver  Pssnger Car     Girl    Depart
----- ------- ------- ------- ------- ------
1     Mack    Blake   BMW     Brenda  3
2     Darius  Jason   Audi    Susan   3
3     Jake    Andy    Ford    Francin 2
4     Adam    Oliver  Chevy   Linda   2
5     Alex    David   Tesla   Carol   1
6     Frankie Matthew Porsche Shirley 6
7     Tomas   -       Volks   -       5

15 and 18 don't help other than to provide the remaining names.
<?php print_spoiler_step(-1) ?>
Ordering the bros right to left by arrival time (driver, then passenger), and indexing by their departure time (i.e. taking the letter of their name at the position of their departure time), you get the message:

CARSANDLADIES

Doing the same for the cars and ladies, you get:

WEDSORHITCHES

There are a few synonyms for both 'weds' and hitches', but the one that will give you a correct answer is 'marries'. Note that all three words are in the present tense.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "MARRIES");
