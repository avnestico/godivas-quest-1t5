<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");

/**
 * Send an email from 'Nobody', an anonymous aide.
 *
 * @param mixed $row
 * @param $question
 */
function email_from_nobody($row, $question) {
    // If this is the user's first solve, send them the first_solve email.
    $num_solved = count_num_solved(sizeof($row), $row);
    if ($num_solved == 0) {
        email_nobody_first_solve($row['email']);
    }

    // Check if the user has solved a meta puzzle for the first time. If so, send them the corresponding meta email.
    email_nobody_meta_solve($question, $row['email']);
}

function email_nobody_first_solve($email) {
    $subject = "[Quest] I hope this gets to its intended recipient";
    $body = "I need you to read this. It's urgent!\r\n\r\n" .
            "Look, I don't know who you are, and you don't need to know who I am. All that's important is that we " .
            "have a mutual enemy: these Godiva Industries people. I have no idea where they came from, what they do, " .
            "or why they're here, but at this point, it doesn't matter. They've already taken over Godiva's Quest, and " .
            "it looks to me like their end goal is to do the same for the entirety of Godiva Week. They need to be " .
            "stopped, and I can't do it on my own. I need your help.\r\n" .
            "I've done some poking around the site. It looks reasonably secure, but there's always a weak point. " .
            "Take a look around, into places you wouldn't normally think to go. I bet there are hidden pages somewhere. " .
            "There might be clues in the puzzles, too. This Lark girl, who wrote the first phase, is a U of T student. " .
            "Probably not in engineering. Maybe she's less secure with her passwords than she should be...\r\n\r\n" .
            "Until next time,\r\n" .
            "Nobody";
    $headers = $GLOBALS['nobody'];

    mail($email, $subject, $body, $headers);
}

function email_nobody_meta_solve($num, $email) {
    switch ($num) {
        case 7:
            $subject = "[Quest] Nicely Done";
            $body = "Betcha didn't think you'd be hearing from me again.\r\n\r\n" .
                    "I've been following your progress, and I was right to trust you. You've gotten this far quite quickly.\r\n" .
                    "That meta answer looks oddly thematic. I bet Lark chose it for multiple reasons, and I bet that one of " .
                    "those reasons will give us some information we can use. Have you found anywhere it would be useful?\r\n\r\n" .
                    "Mischievously yours,\r\n" .
                    "Nobody";
            break;
        case 14:
            $subject = "[Quest] This is Troubling";
            $body = "Have you gotten into Johnson's email yet? You really should go take a look.\r\n\r\n" .
                    "This is worse than I thought. Godiva Industries isn't stopping at Godiva Week. They're looking to  " .
                    "subsume and monetize practically all of engineering culture at U of T. They're plotting to buy the Skule " .
                    "trademark, for crying out loud. They're in talks with the university to raise tuition to help them afford " .
                    "all this! If nothing else, that should get you mad. Mad enough to solve those last puzzles and expose them " .
                    "for the frauds they are.\r\n\r\n" .
                    "Keep fighting,".
                    "Nobody";
            break;
        case 21:
            $subject = "[Quest] FWD: See You In Court";
            $body = "If I were you, I’d make sure your cells are energized.\r\n\r\n" .
                    "Our mutual friend Bold isn’t very happy with people snooping around her site, and she’s letting people know " .
                    "it. She’s always been a fan of reversing things for her own benefit, so I think you need to end this " .
                    "quickly, before she can turn the tables.\r\n\r\n" .
                    "The end is close,\r\n" .
                    "Nobody";
            break;
        case 22:
            $subject = "[Quest] Go Go Go!";
            $body = "You know what to do.\r\n\r\n" .
                    "That's it! Godiva Industries ends today. This 'Bold' character is going down, once and for all. " .
                    "Get to her first, and you'll have won the Quest.\r\n\r\n" .
                    "Congratulations,\r\n" .
                    "Nobody";
            break;
        default:
            return;
    }
    $headers = $GLOBALS['nobody'];

    mail($email, $subject, $body, $headers);
}