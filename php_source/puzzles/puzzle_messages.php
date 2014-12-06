<?php

/**
 * get_answer_status: takes in a question and user-submitted answer.
 *
 * @param $puzzleNum
 * @param $answer
 * @return array
 */
function get_answer_status($puzzleNum, $answer) {
    $wrongDefault = [false, "Incorrect."];

    $func = "puzzle_messages_" . $puzzleNum;
    try {
       $puzzleMessage = $func($answer);
    }
    catch (exception $e) {
        return [false, "Unknown question number!"];
    }
    if (is_null($puzzleMessage)) {
       $puzzleMessage = $wrongDefault;
    }

    return $puzzleMessage;
}

function puzzle_messages_1($answer) {
    switch ($answer) {
        case "amused":
            return [true, "Correct"];
        case "binary":
            return [false, "You are on the right track, binary does have something to do with the answer. Keep thinking, and consider that the Quest started on 12/20/13."];
    }
}

function puzzle_messages_2($answer) {
    switch ($answer) {
        case "vaticancity":
            return [true, "Correct"];
        case "vatican":
            return [false, "Sacred CITY.  This answer is two words."];
        case "european":
        case "sacred":
        case "city":
            return [false, "That's one of the words. Now what are the others?"];
        case "europeansacred":
        case "europeancity":
        case "sacredcity":
            return [false, "What's that last word?"];
        case "campus":
        case "oncampus":
        case "skule":
        case "uoft":
            return [false, "Yes, this was taken on campus, but that's not the solution.  How can you figure out exactly where it was taken?"];
        case "europeansacredcity":
            return [false, "Now what city could I be talking about?"];
    }
}

function puzzle_messages_3($answer) {
    switch ($answer) {
        case "1729":
            return [true, "Correct"];
    }
}
