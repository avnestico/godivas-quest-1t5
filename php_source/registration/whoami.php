<?php
/**
 * whoami.php
 *
 * Returns full list of users in SQL database
 * Usage: php5-cli whoami.php
 */

//Connect to the MySQL server with given address, user, and password
require_once '../openDB.php';
$db = new MySQL;
$db->connectDB();

$result = mysql_query("SELECT * FROM alldata WHERE alias != 'XXXX'");
$fieldCount = mysql_num_fields($result);

while ($row = mysql_fetch_array($result)) {
    $num = $row[0];

    $full_name = strip_tags($row[1] . " " . $row[2]);
    $id = $row[3];
    $email = $row[4];
    echo "id: " . $num . "\nname: " . $full_name . "\nid: " . $id . "\nemail: " . $email . "\n";
}

$db->disconnectDB();
