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
  <script src="sorttable.js" type="text/javascript">
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
            competing against the Questmasters.</em> <?php

            //Connect to the MySQL server with given address, user, and password
            require_once '../php_source/openDB.php';
            $db = new MySQL;
            $db->connectDB(); //function from openDB.php

            $result = "original";
            $result = mysql_query("SELECT * from alldata where alias != 'XXXX'");

            echo "<table border=\"1\" class=\"leaders sortable\">";
            echo "<thead>";
            echo "<tr>";
            $fieldCount = mysql_num_fields($result);

            echo "<th><div style='width:100px;'>Quester</div></th>";
            for ($i=5; $i<$fieldCount-1; $i++) {              
            #    $fieldName = mysql_field_name($result, $i);
                    $fieldName = $i-4;
                echo "<th><div style='width:13px;'>$fieldName</div></th>";
            }
            echo "<th><div>last<br>solved</div></th>";
            echo "<th><div>num<br>solved</div></th>";
            echo "</tr>";
            echo "</thead><tbody>";

            while($row = mysql_fetch_array($result))
            {
              $solved = 0;
              $full_name = strip_tags($row[1] . " " . $row[2]);
              echo "<tr>";
              echo "<td><div style='width:100px;'>$full_name</div></td>";
              for ($i=5; $i<$fieldCount; $i++) 
              {              
                  $fieldName = $row[$i];
                  echo "<td><div>$fieldName</div></td>";
                  if ($fieldName == 'Y') $solved++;
              }
              echo "<td>$solved</td>";
              
              echo "</tr>";
            }

            echo "<tfoot><tr><td><div style='width:100px;'>Quester</div></td>";
            for ($i=5; $i<$fieldCount-1; $i++) {              
            #    $fieldName = mysql_field_name($result, $i);
                $fieldName = $i-4;
                echo "<td><div>$fieldName</div></td>";
            }
            echo "<th>last<br>solved</th>";
            echo "<th>num<br>solved</th>";
            echo "</tr></tfoot>";
            echo "</tbody></table>";
            $db->disconnectDB();

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
