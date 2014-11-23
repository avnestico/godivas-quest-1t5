<?php
/**
 * refresh_with_message
 *
 * Return to the same page and report a message.
 *
 * @param $message
 */
function refresh_with_message($message) {
    header("Location: " . $_REQUEST['questionUrl'] ."?message=$message");
    die();
}

/**
 * unknown_error
 *
 * Inform the user that something has gone very very wrong. Hopefully, nobody ever has to see this.
 */
function unknown_error() {
    $message = "You're not supposed to get to this error. If you weren't doing anything nefarious, contact the Questmaster. On the other hand, if you were doing something nefarious, don't do it again.";
    header("Location: /1T5/index.php?message=$message");
    die();
}