<?php
//TODO: proper tables using <col> and CSS

/**
 * print_leaderboard_header
 *
 * Prints header/footer of leaderboard as a row of an html table.
 *
 * @param $fieldCount
 */
function print_leaderboard_header($fieldCount)
{
    echo "<tr><th><div style='width:100px;'>Quester</div></th>";

    for ($i = 1; $i < $fieldCount - 5; $i++) {
        $fieldName = $i;
        echo "<th><div id='small_cell' style='width:13px'>$fieldName</div></th>";
    }

    echo "<th><div>last<br>solved</div></th>";
    echo "<th><div>num<br>solved</div></th>";
    echo "</tr>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii"/>
    <meta http-equiv="Content-Style-Type" content="text/css"/>

    <title>Leaderboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico"/>
    <link rel="stylesheet" href="../style/mystyle.css" type="text/css" media="screen"/>
    <script src="../php_source/sort_table.js" type="text/javascript">
    </script>
</head>

<body>
<div id="container">
    <?php
    include_once(__DIR__ . "/../php_source/header.php");
    include_once(__DIR__ . "/../php_source/global_functions.php");
    ?>

    <div id="content_container">
        <div id="content">
            <h2>Leaderboard</h2>
            <p>
                Click on the column headers to sort.
            </p>
            <br/>

            <?php
            // Connect to the database and retrieve user table
            require_once(__DIR__ . "/../php_source/quest_db.php");
            $query = select_all_aliases();

            $fieldCount = $query->columnCount();

            echo "<table border=\"1\" class=\"leaders sortable\"><thead>";
            print_leaderboard_header($fieldCount);
            echo "</thead><tfoot>";
            print_leaderboard_header($fieldCount);
            echo "</tfoot><tbody>";

            while ($row = $query->fetch()) {
                $numSolved = 0;
                list($id, $full_name, $alias, $email) = get_info_from_row($row);
                echo "<tr><td><div>$full_name</div></td>";
                for ($i = 1; $i < $fieldCount - 5; $i++) {
                    $fieldName = $row["Q" . $i];
                    echo "<td><div id='small_cell'>$fieldName</div></td>";
                    if ($fieldName == 'Y') $numSolved++;
                }
                echo "<td><div style='width:48px'>" . $row["last_solve"] . "</div></td><td><div id='small_cell'>$numSolved</div></td></tr>";
            }

            echo "</tbody></table>";
            ?>
        </div>
    </div>
</div>
</body>
</html>
