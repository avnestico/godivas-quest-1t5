<?php
/**
 * who_am_i.php
 *
 * Returns full list of users in SQL database
 * Usage: php -f who_am_i.php
 */

//Connect to the MySQL server with given address, user, and password
require_once(__DIR__ . "/../quest_db.php");
$query = select_all_aliases();

while ($row = $query->fetch()) {
    list($id, $full_name, $alias, $email) = get_info_from_row($row, true);
}
