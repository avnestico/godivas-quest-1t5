<?php
/**
 * refresh_with_message
 *
 * Return to the same page and report a message. If $to_index is set to true, return to the homepage instead.
 *
 * @param $message
 * @param bool $to_index: If set to true, return to the homepage of the Quest.
 */
function refresh_with_message($message, $to_index=false) {
    $url = $_REQUEST['questionUrl'];

    if ($to_index) {
        $url = "/1T5/";
    }

    header("Location: " . $url . "?message=$message");
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
 * @param $field_count
 * @param $row
 * @param bool $print
 * @return int
 */
function count_num_solved($field_count, $row, $print = false) {
    $num_solved = 0;
    for ($i = 1; $i < $field_count - 5; $i++) {
        $field_name = $row["Q" . $i];
        if ($print) {
            echo "<td><div id='small_cell'>$field_name</div></td>";
        }
        if ($field_name == 'Y') {
            $num_solved++;
        }
    }
    return $num_solved;
}

/**
 * unknown_error
 *
 * Inform the user that something has gone very very wrong. Hopefully, nobody ever has to see this.
 *
 * Also outputs a stack trace to a safe location so the Questmaster has some data to work with.
 */
function unknown_error() {
    ob_start();
    var_dump(debug_backtrace());
    $stack_trace = ob_get_clean();

    $file_count = count(glob(__DIR__ . "/unknown_errors/log*.txt"));
    $new_log = __DIR__ . "/unknown_errors/log" . $file_count . ".txt";
    file_put_contents($new_log, $stack_trace);

    $message = "You're not supposed to get to this error. If you weren't doing anything nefarious, contact the Questmaster. On the other hand, if you were doing something nefarious, don't do it again.";
    header("Location: /1T5/?message=$message");
    die();
}
