<?php
/**
 * printLeaderboardHeader
 *
 * Prints header/footer of leaderboard as a row of an html table.
 *
 * @param $fieldCount
 */
function printLeaderboardHeader($fieldCount) {
  echo"<tr><th><div style='width:100px;'>Quester</div></th>";

  for ($i=1; $i<$fieldCount-5; $i++) {
    $fieldName = $i;
    echo "<th><div style='width:13px;'>$fieldName</div></th>";
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
  "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org" />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <meta http-equiv="Content-Style-Type" content="text/css" />

  <title>Leaderboard</title>
  <link rel="stylesheet" href="../style/mystyle.css" type="text/css" media="screen" />
  <script src="../php_source/sorttable.js" type="text/javascript">
</script>
</head>

<body>
  <div id="container">
    <?php
    include '../php_source/header.php'
    ?>

    <div id="maincontent_container">
      <div id="maincontent">
        <div id="maincontent_top">
          <div id="started_container">
            <h2>Leaderboard</h2><em>Previous winners are ineligible to win again, so you
            are <strong>not</strong> competing against Ryan Wills, Ang Cui, Evangelos Staikos, Alvin
            Ho, Tommy Liu, Ian Swartz, John Zhou, or Harry Zhao. Of course, you are also not
            competing against the Questmasters.</em>

            <?php

            // Connect to the database and retrieve user table
            require_once '../php_source/openDB.php';
            $query = selectAllUsers();

            $fieldCount = $query->columnCount();

            echo "<table border=\"1\" class=\"leaders sortable\"><thead>";
            printLeaderboardHeader($fieldCount);
            echo "</thead><tfoot>";
            printLeaderboardHeader($fieldCount);
            echo "</tfoot><tbody>";

            while($row = $query->fetch())
            {
              $numSolved = 0;
              $fullName = strip_tags($row["firstname"] . " " . $row["lastname"]);
              echo "<tr><td><div style='width:100px;'>$fullName</div></td>";
              for ($i=1; $i<$fieldCount-5; $i++)
              {              
                  $fieldName = $row["Q" . $i];
                  echo "<td><div>$fieldName</div></td>";
                  if ($fieldName == 'Y') $numSolved++;
              }
              echo "<td><div style='width:48px;'>" . $row["last_solve"] . "</div></td><td>$numSolved</td></tr>";
            }

            echo "</tbody></table>";

            $db = null;

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
