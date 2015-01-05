<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 17;
$questionTitle = "True Love";
ob_start();
?>

<p>
    Last week, thirteen bros out in the country decided to throw a tailgate party before the Florida Georgia Line
    concert. All thirteen of the bros brought their closest companions along for the ride - six of them brought their
    girls, while the other seven went with their cars. Of course, the guys who took their girls needed to get there
    somehow, so they each carpooled with one of the drivers. The bros' carpool strategy adhered to all of the following
    constraints:
</p>
<ol>
    <li>Adam only owns American non-electric cars, and brought one of them.</li>
    <li>Andy and the owner of the Ford were riding together.</li>
    <li>Blake arrived first in the BMW.</li>
    <li>Carol was in the only electric car.</li>
    <li>Darius, Alex, and Frankie arrived in that order.</li>
    <li>David brought his girl.</li>
    <li>Each car left between 1 pm and 6 pm, including at least one at both of those times.</li>
    <li>Every car except the Volkswagen had exactly two passengers.</li>
    <li>Exactly one of the couples shares the first letter of their names.</li>
    <li>Francine was riding in Jake's car.</li>
    <li>Jason and Matthew are both dating girls whose names start with S.</li>
    <li>Linda and Carol left 1 hour apart and and arrived one after the other.</li>
    <li>Mack and Jason were in separate cars, but they both left at 3 pm and arrived one after the other.</li>
    <li>Matthew carpooled with the owner of the Porsche.</li>
    <li>Neither Brenda nor Susan are dating Alex.</li>
    <li>Oliver arrived immediately before David.</li>
    <li>Shirley left the latest of anyone.</li>
    <li>The Audi and the Chevy did not arrive one after the other.</li>
    <li>The car that left last arrived sixth.</li>
    <li>The Tesla left earliest and arrived fifth.</li>
    <li>The three bros whose names start with A were each in a different one of the first three cars to leave.</li>
    <li>The Volkswagen left at 5 pm.</li>
    <li>Tomas didn't have any passengers and arrived last.</li>
    <li>Two American cars left at 2 pm.</li>
</ol>
<p>
    The boys parked their cars left to right in the order that they arrived, got out of their cars, and said a toast
    that had been on their minds since they left. What was that toast?
</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
