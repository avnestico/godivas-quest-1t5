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
        case "bowlgames":
        case "bowls":
        case "collegebowl":
        case "collegebowls":
        case "collegefootball":
        case "football":
        case "ncaafootball":
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
        case "belphegor":
        case "1000000000000066600000000000001":
            return "Keep going.";
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
        case "laterals":
        case "nevertheless":
        case "noursling":
        case "oleander":
        case "penuchi":
        case "stallages":
        case "straightener":
            return "That's one of the clues. Keep going.";
        case "coldfeet":
        case "redhanded":
        case "hateguts":
        case "swollenhead":
        case "oldhand":
        case "allears":
        case "steelnerves":
        case "ironlung":
        case "lendear":
        case "chinup":
        case "lastlegs":
        case "heartstring":
            return "Keep going";
        case "housefather":
            return "Almost there.";
    }
}

function puzzle_messages_14($answer) {
    switch ($answer) {
        case "universitycollege":
            return "Correct! Congratulations on solving phase 2!";
        case "collegeanduniversity":
        case "collegeuniversity":
        case "universityandcollege":
            return "All the answers in this phase, including this one, have something in common.";
    }
}

function puzzle_messages_15($answer) {
    switch ($answer) {
        case "dijkstra":
            return "Correct!";
        case "exjrmntf":
        case "zyunvrtg":
        case "qulpctno":
            return "That doesn't make sense. You must have decoded something incorrectly.";
        case "zelda":
        case "legendofzelda":
        case "thelegendofzelda":
        case "supermariorpg":
        case "bravefencermusashi":
        case "ocarinaoftime":
        case "legendofzeldaocarinaoftime":
        case "papermario":
        case "legendofzeldaoracleofseasons":
        case "oracleofseasons":
        case "legendofzeldaminishcap":
        case "minishcap":
        case "papermariostickerstar":
        case "stickerstar":
            return "You're on the right path. Keep going.";
    }
}

function puzzle_messages_16($answer) {
    switch ($answer) {
        case "federatin":
            return "Correct!";
        case "confederatin":
            return "Be less negative!";
        case "becominunited":
            return "You're very close. Think on a country-sized scale.";
        case "4265636f6d696e2720556e69746564":
            return "Keep going";
    }
}

function puzzle_messages_17($answer) {
    switch($answer) {
        case "marries":
            return "Correct!";
        case "carsandladies":
            return "Unbeknownst to the boys, the cars and ladies had a toast too!";
        case "wedsorhitches":
            return "Go on...";
        case "couples":
        case "joins":
        case "unites":
            return "Pick a different synonym.";
    }
}

function puzzle_messages_18($answer) {
    switch ($answer) {
        case "natale":
            return "Correct! P.S. submit 'bad joke eel' as an answer to this puzzle if you want to take a break from puzzle solving.";
        case "italianchristmas":
            return "Well?";
        case "thisisredherring":
        case "redherring":
        case "herring":
            return "Sorry.";
        // Fish
        case "trout":
        case "haddock":
        case "icefish":
        case "sawfish":
        case "ide":
        case "salmon":
        case "ray":
        case "eel":
        case "damselfish":
        case "halibut":
        case "escolar":
        case "rainbowfish":
        case "rockfish":
        case "inanga":
        case "needlefish":
        case "grouper":
        // Athletes on the Marlins or Dolphins
        case "incognito":
        case "treanor":
        case "alvarez":
        case "little":
        case "infante":
        case "alou":
        case "nen":
        case "csonka":
        case "harvey":
        case "ramirez":
        case "izzo":
        case "stephenson":
        case "tannehill":
        case "marino":
        case "aquino":
        case "sheffield":
            return "That's one of the fish. Keep going.";
        // Bad jokes. Also cover for likely typo.
        case "badjokeeel":
        case "badjokeel":
            $jokes = [
                // Copy red herring joke multiple times so people get it more often.
                "What's green, hangs on a wall, and whistles? ... A red herring! (The joke is longer, but the rest of it would be too distracting)",
                "What's green, hangs on a wall, and whistles? ... A red herring! (The joke is longer, but the rest of it would be too distracting)",
                "What's green, hangs on a wall, and whistles? ... A red herring! (The joke is longer, but the rest of it would be too distracting)",
                "What's green, hangs on a wall, and whistles? ... A red herring! (The joke is longer, but the rest of it would be too distracting)",
                "What do you call a fish with no eyes? ... A fsh!",
                "Why do seagulls fly over the sea? ... Because if they flew over the bay, they'd be bagels!",
                "How much did the pirate pay for his piercing? ... A buck-an-ear!",
                "What do you call a fish with a tie? ... Sofishticated!",
                "Where do fish go to get risky credit? ... A loan shark!",
                "Why do fish always know what they weigh? ... They have their own scales!",
                "What did the salmon say when he crashed into the wall? ... Dam!",
                "Did you hear about the goldfish who went bankrupt? ... He's a bronze fish now.",
                "Why are fish such intelligent creatures? ... Because they always swim in schools!",
                "Why did the whale cross the road? ... To get to the other tide!",
                "What do you get when you cross an abbot and a trout? ... A monkfish!",
                "What do you call a big fish who makes you an offer you can't refuse? .. The Codfather!",
                "What's the best way to communicate with a fish? ... Drop it a line!",
                "Two fish are swimming in a tank. One turns to the other and asks, 'how the hell do you drive this thing?!'"
            ];
            return $jokes[array_rand($jokes)];
    }
}

function puzzle_messages_19($answer) {
    switch ($answer) {
        case "notchile":
            return "Correct!";
        case "chile":
            return "I don't think that's correct";
        case "answerisnotchile":
            return "So what's the answer, then?";
        case "boggle":
            return "Keep going.";
    }
}

function puzzle_messages_20($answer) {
    switch ($answer) {
        case "warrior":
            return "Correct!";
        case "waterloowarrior":
            return "I just want the team name, not the university.";
        case "warriors":
        case "waterloowarriors":
            return "Note that there's no Pidgey at the end of the last team.";
        case "periodictable":
            return "You're on the right track. Keep going";
        case "shiny":
        case "shinygastly":
        case "shinyrhyhorn":
        case "shinyoddish":
            return "Why are those pokemon shiny?";
    }
}

function puzzle_messages_21($answer) {
    switch ($answer) {
        case "serena":
            return "Correct! Congratulations on solving phase 3, but you're not done yet! You need to do one more thing before you've finished the Quest. You may have already found out what that is, but if you haven't, you'll need to backtrack and figure out what you missed.";
        case "aneres":
            return "I don't think it's possible to get any closer to the answer without actually getting it.";
        case "associationoftennisprofessionals":
        case "atpworldtour":
        case "tennis":
            return "Keep going.";
    }
}
