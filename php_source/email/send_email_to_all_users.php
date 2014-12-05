<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");
require_once(__DIR__ . "/../quest_db.php");

function send_email_to_all_users($subject, $body, $headers)
{
    $query = select_all_aliases();

    while ($row = $query->fetch()) {
        list(, , , $email) = get_info_from_row($row, true);
        mail($email, $subject, $body, $headers);
    }
}
