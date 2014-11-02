<?php
/**
 * answercheck.php
 *
 * Takes in user-submitted ID and solution, as well as hidden question variable.
 * If solution matches question, updates the leaderboard database and informs
 * the user that they have solved the question. Can also provide hints on
 * incorrect answers and additional information on correct answers.
 */

define('SOLVED', 0);
define('INVALID_LOGIN', 1);
define('MYSQL_ERROR', 2);
define('NO_QUESTION', 3);
define('WRONG', 4);

$headers = 'From: ' . "gquest1t4@gmail.com" . "\r\n";
$headers .= 'Cc: gquest1t4@gmail.com' . "\r\n";


$subject;
$subject[SOLVED] = "[Quest] Puzzle Solved";
$subject[INVALID_LOGIN] = "[Quest] Invalid login!!";
$subject[MYSQL_ERROR] = "[Quest] MYSQL ERROR!!";
$subject[NO_QUESTION] = "[Quest] No Question in Answercheck";
$subject[WRONG] = "[Quest] Wrong";
$body;
$body[1] = "Congratulations! You have successfully solved puzzle 1: This Day in History!";
$body[2] = "Congratulations! You have successfully solved puzzle 2: A Picture's Worth!";
$body[3] = "Congratulations! You have successfully solved puzzle 3: Bruno!";
$body[4] = "Congratulations! You have successfully solved puzzle 4: Jumbled!";
$body[5] = "Congratulations! You have successfully solved puzzle 5: Music Through the Ages!";
$body[6] = "Congratulations! You have successfully solved puzzle 6: Familiar Destinations!";
$body[7] = "Congratulations! You have successfully solved puzzle 7: Patterns and Sequences!";
$body[8] = "Congratulations! You have successfully solved puzzle 8: Off-Suit!";
$body[9] = "Congratulations! You have successfully solved puzzle 9: Sound it Out!";
$body[10] = "Congratulations! You have successfully solved puzzle 10: Noted!";
$body[11] = "Congratulations! You have successfully solved puzzle 11: War Stories!";
$body[12] = "Congratulations! You have successfully solved puzzle 12: Happy Birthday!";
$body[13] = "Congratulations! You have successfully solved puzzle 13: Lexicoloical!";
$body[14] = "Congratulations! You have successfully solved puzzle 14: Commonality!";
$body[15] = "Congratulations! You have successfully solved puzzle 15: A Story Continued!";
$body[16] = "Congratulations! You have successfully solved puzzle 16: Chasing a Story!";
$body[17] = "Congratulations! You have successfully solved puzzle 17: Dial!";
$body[18] = "Congratulations! You have successfully solved puzzle 18: 26 Points!";
$body[19] = "Congratulations! You have successfully solved puzzle 19: Familiarity!";
$body[20] = "Congratulations! You have successfully solved puzzle 20: Symbols and Characters!";
$body[21] = "Congratulations! You have successfully solved puzzle 21: Conversion!";
$body[22] = "Congratulations! You've solved all of the Phase 3 puzzles! Now go win that Quest!";

$solveflag = FALSE;

$question = $_REQUEST['question'];

if (!isset($_REQUEST['question'])) {
    mail('gquest1t4@gmail.com', $subject[NO_QUESTION], $HTTP_SERVER_VARS["REMOTE_ADDR"]);
    $message = "Cheating and hacking are not permitted.  Your IP has been logged.  Keep it up and someone is going to get hurt real bad.";
    header("Location: ../answerpage.php?message=$message");
    die();
}

if ($_REQUEST['username'] == "") {
    $message = "Please make sure you fill in your login name.";
    header("Location: ../answerpage.php?message=$message");
    die();
}
if ($_REQUEST['answer'] == "") {
    $message = "Please make sure you fill in the answer box.";
    header("Location: ../answerpage.php?message=$message");
    die();
}


require_once '../openDB.php';
$db = new MySQL;
$db->connectDB(); //function from global.php

$username = $_REQUEST['username'];
$answer = $_REQUEST['answer'];

mysql_real_escape_string($username);
$answer = strtolower($answer);
$answer = str_replace(' ', '', $answer);

//Get user info
$query = "SELECT * from alldata where alias = '$username'";
$result = mysql_query($query);
$row = mysql_fetch_array($result);

if (mysql_num_rows($result) == 0) {
    mail('gquest1t4@gmail.com', $subject[INVALID_LOGIN], $username);
    $message = "Login name not found. Please make sure you entered the correct login name.";
    header("Location: ../answerpage.php?message=$message");
    $db->disconnectDB();
    die();
}

$solveflag = FALSE;
$message = "Incorrect";

switch ($question) {

    //
    case 1:
        if ($answer == 'amused') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'binary') {
            $message = "You are on the right track, binary does have something to do with the answer. Keep thinking, and consider that the Quest started on 12/20/13.";
        }
        break;

    //
    case 2:
        if ($answer == 'vaticancity') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'vatican') {
            $message = "Sacred CITY.  This answer is two words.";
        } else if ($answer == 'european' || $answer == 'sacred' || $answer == 'city') {
            $message = "That's one of the words. Now what are the others?";
        } else if ($answer == 'europeansacred' || $answer == 'sacredcity' || $answer == 'europeancity') {
            $message = "What's that last word?";
        } else if ($answer == 'campus' || $answer == 'oncampus' || $answer == 'skule' || $answer == 'uoft') {
            $message = "Yes, this was taken on campus, but that's not the solution.  How can you figure out exactly where it was taken? ";
        } else if ($answer == 'europeansacredcity') {
            $message = "Now what city could I be talking about?";
        }
        break;

    //
    case 3:
        if ($answer == 'olympusmons') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'mars') {
            $message = "A good place to start.";
        } else if ($answer == 'mountolympus') {
            $message = "In the native tongue, please.";
        } else if ($answer == 'olympus') {
            $message = "Olympus WHAT?";
        }
        break;

    //
    case 4:
        if ($answer == 'gold') {
            $solveflag = TRUE;
            $message = "Correct";
        }
        break;

    //
    case 5:
        if ($answer == 'memorial') {
            $solveflag = TRUE;
            $message = "Correct";
        }
        break;

    //
    case 6:
        if ($answer == 'nanaimo') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'summerhill') {
            $message = "You're starting from the right place.";
        } else if ($answer == 'stanmore' || $answer == 'westminster' || $answer == 'newwestminster') {
            $message = "You're journey's not over yet.";
        }
        break;

    //
    case 7:
        if ($answer == 'rectangle') {
            $solveflag = TRUE;
            $message = "Correct";
        }
        break;

    //
    case 8:
        if ($answer == 'blackjack') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'redqueen') {
            $message = "This puzzle's been all about opposites. What's the opposite of a red queen?";
        }
        break;

    //
    case 9:
        if ($answer == 'metre') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'font' || $answer == 'fonts') {
            $message = "Fonts are important in this puzzle, yes.";
        } else if ($answer == 'syllable' || $answer == 'syllables') {
            $message = "Syllables are important in this puzzle, yes.";
        }
        break;

    //
    case 10:
        if ($answer == 'wallberg') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'wb') {
            $message = "WB stands for...?";
        } else if ($answer == 'meetmeinwb') {
            $message = "So I would be meeting my friend where, exactly?";
        }
        break;

    //
    case 11:
        if ($answer == 'medieval') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'keyboard' || $answer == 'hands' || $answer == 'fingers' || $answer == 'hand' || $answer == 'finger') {
            $message = "You're on the right track!";
        }
        break;

    //
    case 12:
        if ($answer == 'josephpotts') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'potts' || $answer == 'joseph' || $answer == 'josephhpotts' || $answer == 'jppotts' || $answer == 'jpotts') {
            $message = "Please format your answer like this: [First Name] [Space] [Last Name]. No initals and no periods.";
        }
        break;

    //
    case 13:
        if ($answer == 'devoured') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'scrabble') {
            $message = "You're on the right track!";
        }
        break;

    //
    case 14:
        if ($answer == 'shakespeare') {
            $solveflag = TRUE;
            $message = "Correct";
        } else if ($answer == 'wisechildren' || $answer == 'thetragedyofarthur' || $answer == 'tragedyofarthur' || $answer == 'bravenewgirl' || $answer == 'thedeadfathersclub' || $answer == 'deadfathersclub' || $answer == 'fool') {
            $message = "You've identified one of the books! Keep going!";
        } else if ($answer == 'williamshakespeare' || $answer == 'william') {
            $message = "Just the last name, please!";
        }
        break;

    //
    case 15:
        if ($answer == 'knights') {
            $solveflag = TRUE;
            $message = "Correct <br>T_____s__________</br>";
        } else if ($answer == 'exif' || $answer == 'meta' || $answer == 'metadata' || $answer == 'exifdata') {
            $message = "You're on the right track. There is more to this picture than meets the eye.";
        }
        break;

    //
    case 16:
        if ($answer == 'lakeontario') {
            $solveflag = TRUE;
            $message = "Correct <br>_h______E_____d__</br>";
        } else if ($answer == '0784710503' || $answer == '0436206420') {
            $message = "That is the correct ISBN indentification. You're on the right track!";
        } else if ($answer == 'canada' || $answer == 'ontario' || $answer == 'newyork' || $answer == 'usa' || $answer == 'america' || $answer == 'lake') {
            $message = "A little more specific, please.";
        } else if ($answer == 'border') {
            $message = "A little less specific, please.";
        }
        break;

    //
    case 17:
        if ($answer == 'surely') {
            $solveflag = TRUE;
            $message = "Correct <br>__3____________a_</br>";
        }
        break;

    //
    case 18:
        if ($answer == 'whizbang') {
            $solveflag = TRUE;
            $message = "Correct <br>___Qu_______t____</br>";
        }
        break;

    //
    case 19:
        if ($answer == 'ireland') {
            $solveflag = TRUE;
            $message = "Correct <br>_____3_t________y</br>";
        } else if ($answer == 'newman' || $answer == 'patterson') {
            $message = "That's one of the steps of your journey! Keep going!";
        } else if ($answer == 'leinster') {
            $message = "What country is the province of Leinster in?";
        }
        break;

    //
    case 20:
        if ($answer == 'cannon') {
            $solveflag = TRUE;
            $message = "Correct <br>_________n___0___</br>";
        } else if ($answer == 'yeoldemightyskule') {
            $message = "You might want to consult Skulepedia if you're not sure what comes next.";
        }
        break;

    //
    case 21:
        if ($answer == 'end') {
            $solveflag = TRUE;
            $message = "Correct <br>__________dS_____</br>";
        } else if ($answer == '6647396') {
            $message = "You've made the first conversion! Keep going!";
        } else if ($answer == '11001010110111001100100') {
            $message = "You've made the second conversion! Keep going (and don't forget to add that zero)!";
        } else if ($answer == '011001010110111001100100') {
            $message = "You've made the second conversion! Keep going!";
        }
        break;

    //
    case 22:
        if ($answer == 'th3qu3stendst0day') {
            $solveflag = TRUE;
            $message = "Your final challenge: quest.skule.ca/th3f1nalch4lleng3";
        }
        break;
    default:
        $message = "Unknown question number!";
        break;

}


if ($solveflag == TRUE) {

    $query = "UPDATE alldata SET Q$question = 'Y' WHERE alias = '$username'";
    if (!mysql_query($query)) {
        mail('gquest1t4@gmail.com', $subject[INVALID_LOGIN], mysql_error());
    }
    mail($row['email'], $subject[SOLVED], "To user $username:" . "\r\n" . $body[$question], $headers . "\r\n" . $HTTP_SERVER_VARS["REMOTE_ADDR"]);
    header("Location: ../answerpage.php?message=$message");
    $db->disconnectDB();
    die();
} else {
    mail("gquest1t4@gmail.com", $subject[WRONG] . ":  $username", $question . " :   " . $answer . "\r\n" . $row['name'] . " " . $row['lastname']);
    header("Location: ../answerpage.php?message=$message");
    $db->disconnectDB();
    die();
}
