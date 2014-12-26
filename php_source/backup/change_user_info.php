<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");
require_once(__DIR__ . "/../quest_db.php");

// If the number of arguments is incorrect, cancel change.
if ($argc != 5) {
    die("Usage: php -f change_user_info.php <SQL table> { alias | email | first_name | last_name } <old value> <new value>\n");
}

$table = $argv[1];
$column = $argv[2];
$old_value = $argv[3];
$new_value = $argv[4];

$query = check_for_existence($table, $column, $old_value);

if ($query->rowCount()) {
    change_instances($table, $column, $old_value, $new_value);
    echo "Change made successfully.\n";
} else {
    echo "No instances found.\n";
}
