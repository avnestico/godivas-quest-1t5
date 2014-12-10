<?php
/**
 * validate_register.php
 *
 * Tools to validate user registration data
 */

/**
 * info_validation_message
 *
 * Returns a message to the user on invalid registration, and an empty string if the registration passes validation.
 *
 * @return string
 */
function info_validation_message($firstname, $lastname, $email) {
    $message = "";

    if (($firstname == "" || $lastname == "" || $email == "")) {
        $message = "Registration failed! One or more fields were left blank. Please make sure all fields are filled out.";
    } else if (!ctype_alpha($firstname) || !ctype_alpha($lastname)) {
        $message = "Registration failed! Your name must contain only alphabetical characters. Please fill out the form again.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Registration failed! That doesn't appear to be a valid email address. Please fill out the form again.";
    } else if (strlen($firstname) > 30) {
        $message = "Registration failed! Your first name can't be longer than 30 characters. Please fill out the form again.";
    } else if (strlen($lastname) > 30) {
        $message = "Registration failed! Your last name can't be longer than 30 characters. Please fill out the form again.";
    }

    return $message;
}