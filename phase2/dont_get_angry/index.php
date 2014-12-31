<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 8;
$questionTitle = "Don't Get Angry";
ob_start();
?>

<p>
    The year is 2036, and it's time for the annual Smith family potluck. We all get together at our alma mater,
    celebrate the good times, and have a meal as a family. This is no ordinary potluck, however; there's a very specific
    item that each of us are expected to bring. Us young'uns have decided that it's easier to just comply with what
    we're asked to do than to question it and risk disrupting the delicate family balance. The list is:
</p>

<ul>
    <li>
        My 28-year old cousin, Adam, brings five party favours
    </li>
    <li>
        Adam's twin, Erica, brings her parents' two American credit cards
    </li>
    <li>
        My 35-year old sister, Becca, brings four citrus cupcakes
    </li>
    <li>
        I, two years my sister's senior, bring seven flower bouquets and sign them with my name, David
    </li>
    <li>
        My brother Chris, born a year before me, brings three memorials for revolutionary wars
    </li>
    <li>
        My aunt Francis, age 58, brings a soft, fluffy shrub
    </li>
    <li>
        And my grandfather (affectionately known as grandpa) whose family was already running Smith family potlucks when
        he was born 85 years ago, brings 8 ounces of sweet, soluble carbs
    </li>
</ul>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
