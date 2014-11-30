<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");

require_once(__DIR__ . "/../quest_db.php");
$query = select_all_aliases();

while ($row = $query->fetch()) {
    list($id, $full_name, $alias, $email) = get_info_from_row($row, true);

    $subject = "[Quest] 1T5 Test";
    $body = "Test.";

    mail($email, $subject, $body, $GLOBALS['headers']);
}
