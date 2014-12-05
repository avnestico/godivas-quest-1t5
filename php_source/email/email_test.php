<?php
include_once(__DIR__ . "/../global_variables.php");
require_once(__DIR__ . "/send_email_to_all_users.php");

$subject = "[Quest] Test Subject";
$body = "Test Body.";
$headers = $GLOBALS['nobody'];

send_email_to_all_users($subject, $body, $headers);
