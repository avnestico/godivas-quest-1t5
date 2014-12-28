<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 2;
$questionTitle = "Startups";
ob_start();
?>

<p>
    We're leveraging the monetization of our minimum viable product in order to pivot at a 45 degree angle.
    No, the words don't mean a thing, why do you ask?
</p>
<br/>

<ul>
    <li>
        When health concerns started to pose a threat to the tobacco industry, this patriotic company's
        management chose to evolve. Insurance, golf, home furnishings, and alcohol were their most
        successful forays. Less than 10 years ago, they changed their name to this.
    </li>
    <li>
        Though it filed for bankruptcy over 20 years ago, this company successfully pivoted into toys after
        leaving its original market, leather. Though it switched markets, it kept its original name.
    </li>
    <li>
        One of the companies founded by members of the PayPal Mafia, this video sharing site was originally
        a video-powered online dating service.
    </li>
    <li>
        Upon finding that his clients were more interested in the free perfume samples he offered than the
        books he was selling, a salesman pivoted into the cosmetics market. Over 40 years later, his
        business changed its name to this one, the one it's known by today.
    </li>
    <li>
        This blacksmith, unhappy with ploughs that couldn't cut through his area's tough clay, had the
        bright idea of building ploughs out of cast steel. His products are found on farms and lawns across
        the world today.
    </li>
    <li>
        A door-to-door salesman started off selling cleaning products, offering what's now his company's
        core product as a freebie. Eventually, his customers stopped caring about soap, but they kept buying
        gum.
    </li>
    <li>
        Originally in the playing card business, this company pivoted into the video game market more than
        70 years after it was first incorporated.
    </li>
</ul>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
