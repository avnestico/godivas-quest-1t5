<?php

/**
 * get_answer_status
 *
 * Takes in a question and user-submitted answer.
 * Checks the corresponding puzzle_messages_* function to see if the answer is correct.
 * Returns false and a default message if the user is totally wrong. This does not have to be added to every
 * puzzle_messages_* function.
 * Returns true when it encounters a message that starts with (and can entirely be) "Correct!". It'd be poor UX if
 * different correct answers started with different strings, or if an incorrect answer returned "Correct!", so neither
 * of these scenarios are possible. Of course, if you don't like "Correct!", you can change it.
 * Can return false and a different message, for when the user is on the right track.
 *
 * @param $puzzle_num
 * @param $answer
 * @return array
 */
function get_answer_status($puzzle_num, $answer) {
    $result = false;
    $wrong_default = "Incorrect.";
    $right_default = "Correct!";

    // Take the puzzle number and append it to the prefix "puzzle_messages_".
    $func = "puzzle_messages_" . $puzzle_num;

    // If this corresponds to an existing function name, the function can be run. If it doesn't, abort immediately.
    if (!function_exists($func)) {
        unknown_error("Unknown question number! This is a bug; please let the Questmaster know about it.");
    }
    $puzzle_message = $func($answer);

    // Gives the user an unhelpful message by default.
    if (is_null($puzzle_message)) {
        $puzzle_message = $wrong_default;
    }

    // An answer is treated as correct if and only if the returned message starts with $right_default.
    if (substr($puzzle_message, 0, strlen($right_default)) == $right_default) {
        $result = true;
    }

    return [$result, $puzzle_message];
}

function puzzle_messages_1($answer) {
    switch ($answer) {
        case "capitalcity":
            return "Correct!";
        case "taylorswift":
            return "Are you sure you have all the words you need?";
    }
}

function puzzle_messages_2($answer) {
    switch ($answer) {
        case "founded":
            return "Correct!";
    }
}

function puzzle_messages_3($answer) {
    switch ($answer) {
        case "1729":
            return "Correct!";
        case "taxi":
        case "taxicab":
        case "taxicabnumber":
            return "I want the actual number, not its name.";
    }
}

function puzzle_messages_4($answer) {
    switch ($answer) {
        case "proteams":
            return "Correct!";
        case "proteems":
            return "Did you read the picture's title text?";
    }
}

function puzzle_messages_5($answer) {
    switch ($answer) {
        case "common":
            return "Correct!";
    }
}

function puzzle_messages_6($answer) {
    switch ($answer) {
        case "denominator":
            return "Correct!";
        case "divisor":
            return "Almost. Think...shorter.";
        case "two":
        case "2":
            return "You seem to have mistaken some symbols for numbers.";
    }
}

function puzzle_messages_7($answer) {
    switch ($answer) {
        case "passeriformes":
            return "Correct! Congratulations on solving phase 1!";
        case "bird":
        case "birds":
            return "That's not specific enough, and it's in the wrong language, but it's close.";
    }
}


function puzzle_messages_10($answer) {
    switch ($answer) {
        case "sfpit":
        case "thepit":
            return "Correct!";
    }
}


function puzzle_messages_12($answer) {
    switch ($answer) {
        case "trinity":
            return "Correct!";
        case "31eefe2631e42e14":
            return "What does that spell?";
    }
}


function puzzle_messages_14($answer) {
    switch ($answer) {
        case "universitycollege":
            return "Correct!";
        case "collegeuniversity":
        case "universityandcollege":
            return "All the answers in this phase, including this one, have something in common.";
    }
}
