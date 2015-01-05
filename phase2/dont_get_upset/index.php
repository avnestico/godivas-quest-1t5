<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 8;
$questionTitle = "Don't Get Upset";
ob_start();
?>

<p>
    The year is 2036, and my friends and I are going back to our alma mater this weekend. We're there to watch the
    college football postseason, and each of us is expected to bring a specific item:
</p>

<ul>
    <li>
        My 28-year-old buddy, Adam, brings supplies for five fiestas
    </li>
    <li>
        Adam's twin, Erica, brings two Capital One credit cards
    </li>
    <li>
        My 35-year-old wife, Becca, brings four orange cupcakes
    </li>
    <li>
        I, two years my wife's senior, bring seven rose bouquets and sign them with my name, David
    </li>
    <li>
        My friend Chris, born a year before me, brings three Alamo memorials
    </li>
    <li>
        My old professor Francis, age 58, brings a cotton shrub
    </li>
    <li>
        And my grandfather (affectionately known as grandpa), born 85 years ago, brings 8 ounces of sugar
    </li>
</ul>

<p>Nobody else even comes to this stupid thing any more. Why do we still bother?</p>

            </div>
        </div>

        <div id="content_container">
            <div id="modification">
                Modification (Dec 31, 12:00 a.m. EST): A line has been added to the end of this puzzle.<br/>
                Modification (Jan 4, 10:00 p.m. EST): This puzzle's name has been changed from "Don't Get Angry" and
                its structure has been simplified.
<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
