<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");
require_once(__DIR__ . "/../quest_db.php");

/**
 * transfer answers
 *
 * Transfer a user's answers from the backup table to alldata
 *
 * @param $email
 * @param $alias
 */
function transfer_answers($email, $alias) {
    $query = check_for_existence("backup", "alias", $alias);

    if ($query->rowCount()) {
        $field_count = $query->columnCount();
        $row = $query->fetch();
        if (strcmp($email, $row['email'] === 0)) {
            for ($i = 1; $i < $field_count - 5; $i++) {
                if (!is_null($row["Q" . $i])) {
                    alias_answer_correct($i, $alias);
                }
            }
        }
    }
}

if ($argc == 3) {
    $email = $argv[1];
    $alias = $argv[2];
    transfer_answers($email, $alias);
}
