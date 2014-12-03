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
 * get_info_from_row
 *
 * Takes in a user row from a query and returns the user's id, name, alias, and email.
 *
 * @param $row
 * @param bool $print_row
 * @return array
 */
function get_info_from_row($row, $print_row = false) {
    $id = $row['id'];
    $full_name = strip_tags($row['first_name'] . " " . $row['last_name']);
    $alias = $row['alias'];
    $email = $row['email'];

    if ($print_row) {
        echo "id: " . $id . "\nname: " . $full_name . "\nalias: " . $alias . "\nemail: " . $email . "\n";
    }

    return [$id, $full_name, $alias, $email];
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
