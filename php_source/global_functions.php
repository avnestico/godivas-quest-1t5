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

/**
 * print_spoiler
 *
 * Prints a button that reveals or re-hides hidden text when the user clicks it.
 *
 * Requires toggle_visibility.js to be called by html.
 *
 * Usage:
 * print_spoiler("spoiler_1", "Spoiler", true)
 * // First spoiler content
 * print_spoiler("spoiler_2", "Spoiler")
 * // Second spoiler content
 * print_spoiler_end()
 *
 * @param $div_id: A unique identifier for each spoiler segment.
 * @param $display_name: The text of the link clicked to toggle the spoiler's visibility.
 * @param bool $is_first: Set to true if not immediately preceded by another call to print_spoiler().
 */
function print_spoiler($div_id, $display_name, $is_first=false) {
    if (!$is_first) {
        echo('<br/></div>');
    }
    echo('<a onclick="toggle_visibility(\'' . $div_id . '\');">' . $display_name . '</a><br/><br/>');
    echo('<div id="' . $div_id . '" style="display:none;">');
}

/**
 * print_spoiler_end
 *
 * Ends a spoiler or set of spoilers. See above for usage.
 */
function print_spoiler_end() {
    echo('<br/></div>');
}

/**
 * quest_finished_check
 *
 * Prevent scripts from being run once the Quest is over.
 */
function quest_finished_check() {
    if ($GLOBALS['quest_finished']) {
        refresh_with_message("The Quest is over, so you can't submit anything now. Sorry!", true);
    }
}
