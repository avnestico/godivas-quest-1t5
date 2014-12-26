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
    } else if (!ctype_alpha($firstname[0])) {
        $message = "Registration failed! Your name must begin with an alphabetical character. Please fill out the form again.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Registration failed! That doesn't appear to be a valid email address. Please fill out the form again.";
    } else if (!ends_with($email, "utoronto.ca")) {
        $message = "Registration failed! Your email address must be a valid University of Toronto email address. Please fill out the form again, or contact me if your email address is incorrectly being considered invalid.";
    } else if (strlen($firstname) > 30) {
        $message = "Registration failed! Your first name can't be longer than 30 characters. Please fill out the form again.";
    } else if (strlen($lastname) > 30) {
        $message = "Registration failed! Your last name can't be longer than 30 characters. Please fill out the form again.";
    }

    return $message;
}

function ends_with($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return substr_compare($haystack, $needle, -strlen($needle), strlen($needle)) === 0;
}