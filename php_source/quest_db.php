<?php
/**
 * quest_db.php
 *
 * Constructs an extension of PDO to automate database connection.
 * Also contains helpful functions for interfacing with the database.
 */
include_once(__DIR__ . "/global_variables.php");
include_once(__DIR__ . "/global_functions.php");
include_once(__DIR__ . "/credentials.php");

/**
 * Extend the PDO class with a Connection() object that is instantiated with the attributes we want.
 */
class Connection extends PDO {
    public function __construct(/* $dbserver, $dbname, $dbuser, $dbpass, $dbtype */) {
        try {
            // Pull credentials from credentials.php, which must not be committed to the repository for security purposes
            $db_cred = get_credentials_db();

            parent::__construct($db_cred["type"] . ":host=" . $db_cred["server"] . ";dbname=" . $db_cred["name"], $db_cred["user"], $db_cred["pass"]);

            //Ensures that PDO will throw PDOException objects on errors, simplifies debugging.
            parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Disables emulated prepared statements by PHP, and switches to *true* prepared statements in MySQL.
            parent::setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            //Specifies that the fetch method will return each row as an array indexed by column name.
            parent::setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            mail_PDO_error("Could not connect: " . $e->getMessage());
        }
    }
}

/**
 * mail_PDO_error
 *
 * In the occasion of a PDO error, send as much info as possible to the Questmaster's email address.
 * Then display the unknown_error fail message to the user.
 *
 * @param $error_message
 */
function mail_PDO_error($error_message) {
    // Capture the stack trace to a variable
    ob_start();
    var_dump(debug_backtrace());
    $stack_trace = ob_get_clean();

    // Craft and send the email
    $body = $error_message . "\r\n\r\n" . $stack_trace;
    if (array_key_exists('questionUrl', $_REQUEST)) {
        $body = "Url: " . $_REQUEST['questionUrl'] . "\r\n" . $body;
    }

    mail($GLOBALS["qm_email"],
            "[Quest] Database Error!",
            $body,
            $GLOBALS["headers"]);

    // Send the user back to the main page with a message that asks him to contact the Questmaster
    unknown_error();
}

/**
 * register_user: Inserts alias into alldata table of database
 *
 * @param $first_name
 * @param $last_name
 * @param $alias
 * @param $alias_hash
 * @param $email
 *
 * @internal param $alias
 * @return PDOStatement
 */
function register_user($first_name, $last_name, $alias, $alias_hash, $email) {
    try {
        $db = new Connection();

        $query = $db->prepare("INSERT INTO need_verification (first_name,last_name,alias,alias_hash,email) VALUES (:first_name,:last_name,:alias,:alias_hash,:email)");

        $query->bindParam(":first_name", $first_name);
        $query->bindParam(":last_name", $last_name);
        $query->bindParam(":alias", $alias);
        $query->bindParam(":alias_hash", $alias_hash);
        $query->bindParam(":email", $email);

        $query->execute();

        $db = null;

        return $query;
    } catch (PDOException $e) {
        mail_PDO_error("Could not perform insert: " . $e->getMessage());
    }
}

function validate_user($first_name, $last_name, $alias, $email) {
    try {
        $db = new Connection();

        $query = $db->prepare("INSERT INTO alldata (first_name,last_name,alias,email) VALUES (:first_name,:last_name,:alias,:email)");

        $query->bindParam(":first_name", $first_name);
        $query->bindParam(":last_name", $last_name);
        $query->bindParam(":alias", $alias);
        $query->bindParam(":email", $email);

        $query->execute();

        $db = null;

        return $query;
    } catch (PDOException $e) {
        mail_PDO_error("Could not perform verification: " . $e->getMessage());
    }
}

/**
 * check_for_existence
 *
 * Checks field of a given table for existence of an arbitrary item.
 *
 * @param $database
 * @param $field
 * @param $item
 *
 * @return PDOStatement
 */
function check_for_existence($database, $field, $item) {
    try {
        $db = new Connection();

        $query = $db->prepare("SELECT * FROM $database WHERE ($field) = (:item)");

        $query->bindParam(":item", $item);

        $query->execute();

        $db = null;

        return $query;
    } catch (PDOException $e) {
        mail_PDO_error("Could not perform select: " . $e->getMessage());
    }
}

/**
 * select_all_aliases
 *
 * Returns all aliases in table. By default, selects from alldata.
 *
 * @param string $table
 * @return PDOStatement
 */
function select_all_aliases($table="alldata") {
    $db = new Connection();

    try {
        $query = $db->query("SELECT * FROM $table WHERE alias != 'XXXX'");

        $db = null;

        return $query;
    } catch (PDOException $e) {
        mail_PDO_error("Unable to connect to database: " . $e->getMessage());
    }
}

/**
 * insert_user_and_hash
 *
 * Inserts user-pass pair into database.
 * Currently not used for validating Questers.
 *
 * @param $table
 * @param $user
 * @param $pass_hash
 *
 * @return PDOStatement
 */
function insert_user_and_hash($table, $user, $pass_hash) {
    $db = new Connection();

    try {
        $query = $db->prepare("INSERT INTO $table (username, password) VALUES (:username, :password)");

        $query->bindParam(":username", $user);
        $query->bindParam(":password", $pass_hash);

        $query->execute();

        $db = null;

        return $query;
    } catch (PDOException $e) {
        mail_PDO_error("Unable to insert user: " . $e->getMessage());
    }
}

/**
 * alias_answer_correct
 *
 * Updates database with correct answer for given alias and puzzle.
 *
 * @param $question : a validated integer corresponding to a puzzle number
 * @param $alias
 *
 * @return PDOStatement
 */
function alias_answer_correct($question, $alias) {
    $db = new Connection();

    // Insert '!' instead of 'Y' for designated puzzles.
    // Usually only used for the puzzle that ends the Quest.
    if (in_array($question, $GLOBALS["meta"])) {
        $symbol = '!';
    } else {
        $symbol = 'Y';
    }

    try {
        $query = $db->prepare("UPDATE alldata SET Q$question = '$symbol' WHERE (alias) = :alias");

        $query->bindParam(":alias", $alias);

        $query->execute();

        $db = null;

        return $query;
    } catch (PDOException $e) {
        mail_PDO_error("Unable to update cell: " . $e->getMessage());
    }
}

/**
 * change_instances
 *
 * Change all instances of a cell in a column from a certain value to another value.
 *
 * If key is set, field is overwritten to new_instance in the rows where key=value
 * If key is not set, value is changed to new_instance wherever field=value
 *
 * @param $table
 * @param $field
 * @param $value
 * @param $new_instance
 * @param string $key
 */
function change_instances($table, $field, $value, $new_instance, $key="") {
    if ($key == "") {
        $key = $field;
    }

    $db = new Connection();

    try {
        $query = $db->prepare("UPDATE $table SET $field = '$new_instance' WHERE ($key) = :cell");

        $query->bindParam(":cell", $value);

        $query->execute();

        $db = null;

        return $query;
    } catch (PDOException $e) {
        mail_PDO_error("Unable to change cell: " . $e->getMessage());
    }
}
