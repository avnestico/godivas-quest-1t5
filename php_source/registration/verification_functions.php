<?php
include_once(__DIR__ . "/../global_variables.php");
include_once(__DIR__ . "/../global_functions.php");
require_once(__DIR__ . "/../quest_db.php");
include_once(__DIR__ . "/../email/email_registration.php");

if (PHP_VERSION_ID < 50500) {
    require_once(__DIR__ . "/../registration/password.php");
}

function get_verification_url($alias) {
    $pwoptions = ['cost' => 8,];
    $alias_hash = password_hash($alias, PASSWORD_BCRYPT, $pwoptions);

    // Remove hash information
    $alias_hash_array = explode("$", $alias_hash);
    $alias_hash = end($alias_hash_array);

    //Delete periods from the url; if this is not done, a period at the end of the url could be seen as malformed
    $alias_hash = str_replace('.','',$alias_hash);

    //Delete slashes too, just in case.
    $alias_hash = str_replace('/','',$alias_hash);

    return $alias_hash;
}