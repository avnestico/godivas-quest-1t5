<?php
/**
 * Copy this file with the name 'credentials.php' and fill in your server and email information.
 * Ideally, this file would be contained outside the public_html folder. However, to keep all of the quest
 * self-contained in its own subfolder, hiding it in the php_source folder in this way is the next best bet.
 */

function get_credentials_db() {
    $db = [
        "type" => "type",
        "server" => "localhost",
        "name" => "name_name",
        "user" => "user_user",
        "pass" => "pass"
    ];
    return $db;
}

function get_credentials_email() {
    $email = [
        "user" => "name",
        "domain" => "example.com",
    ];
    return $email;
}
