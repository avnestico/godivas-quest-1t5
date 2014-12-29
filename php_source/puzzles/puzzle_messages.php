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
        case "capitalcities":
        case "taylorswift":
            return "Are you sure you have all the words you need?";
        case "cupidschokehold":
        case "callmemaybe":
        case "speedofsound":
        case "sgtpepper":
        case "sgtpepperslonelyheartsclubband":
        case "sogood":
            return "That's one of the songs. Keep going.";
        case "safeandsoundbandsingular":
            return "Go on...";
        case "breakfastinamerica":
            return "Good ear. One of the songs sampled Breakfast In America.";
    }
}

function puzzle_messages_2($answer) {
    switch ($answer) {
        case "founded":
            return "Correct!";
        case "fortune":
        case "coleco":
        case "youtube":
        case "avon":
        case "avonproducts":
        case "johndeere":
        case "wrigley":
        case "nintendo":
            return "That's one of the companies. Keep going.";
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
        case "subedar":
            return "Did you read the picture's title text?";
        case "herm":
        case "hootart":
        case "ides":
        case "recoups":
        case "hrow":
        case "subadar":
        case "theta":
        case "thog":
            return "That's one of the clues. Keep going.";
        case "therewasanoldladywhoswallowedafly":
            return "Hmmm....";
    }
}

function puzzle_messages_5($answer) {
    switch ($answer) {
        case "common":
            return "Correct!";
        case "coldturkey":
        case "onetokeovertheline":
        case "mysteryoflove":
        case "morningglory":
        case "otherside":
        case "novacane":
            return "That's one of the songs. Keep going.";
        case "heroin":
        case "marijuana":
        case "mdma":
        case "cocaine":
        case "codeine":
        case "novocaine":
            return "That's one of the drugs. Keep going.";
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
        case "y2":
            return "You seem to have mistaken some symbols for numbers.";
        case "yz":
        case "yoverz":
            return "I don't want what X is equal to. I want what X is.";
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

function puzzle_messages_8($answer) {
    switch ($answer) {
        case "varsity":
            return "Correct!";
        case "upset":
        case "upsets":
            return "You're on the right track. Keep going.";
        case "westvirginiaoklahoma":
        case "oklahomaflorida":
        case "purduekansas":
        case "wisconsinucla":
        case "michiganflorida":
        case "texasnotredame":
        case "kentuckyoklahoma":
            return "That's one of the games. Keep going.";
    }
}

function puzzle_messages_9($answer) {
    switch ($answer) {
        case "elmsley":
        case "elmsleyhall":
        case "EH":
            return "Correct!";
        case "offbyone":
        case "offby1":
        case "offbyoneerrors":
        case "offby1errors":
            return "Off-by-one errors are a pain, aren't they?";
        case "morrison":
        case "morrisonhall":
        case "MO":
            return "I don't think you've read the whole clue.";
        case "thethirdhardthingincomputerscience":
        case "eastuoftresidencewithfiveseparatehouses":
            return "Well, you've decoded the string. Now what?";
    }
}

function puzzle_messages_10($answer) {
    switch ($answer) {
        case "sandfordfleming":
        case "sf":
        case "thepit":
            return "Correct!";
        case "sanfordfleming":
            return "Correct! It's ok, everyone misses the first 'd' in Sandford.";
    }
}

function puzzle_messages_11($answer) {
    switch ($answer) {
        case "lashmiller":
        case "lashmillerchemicallaboratories":
            return "Correct!";
        case "lm":
            return "Almost. There's one more thing you have to do.";
        case "ml":
        case "queensparkcrsce39a":
        case "queensparkcrescent39a":
            return "You didn't read the question carefully enough, did you?";
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

function puzzle_messages_13($answer) {
    switch ($answer) {
        case "hearthouse":
            return "Correct! This misspelling is deliberate in the spirit of the puzzle, but rest assured that I really want Hart House.";
        case "lw":
        case "wl":
            return "You're on the right track. These two letters aren't important for the final solution, though.";
        case "deflector":
        case "dunderhead":
        case "fughettas":
        case "hallowedness":
        case "handhold":
        case "kidnapees":
        case "laterals":
        case "nevertheless":
        case "noursling":
        case "oleander":
        case "penuchi":
        case "straightener":
            return "That's one of the clues. Keep going.";
    }
}

function puzzle_messages_14($answer) {
    switch ($answer) {
        case "universitycollege":
            return "Correct! Congratulations on solving phase 2!";
        case "collegeuniversity":
        case "universityandcollege":
            return "All the answers in this phase, including this one, have something in common.";
    }
}
