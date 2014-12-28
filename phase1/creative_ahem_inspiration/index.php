<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 5; //number
$questionTitle = "Creative, Ahem, Inspiration";  //string
ob_start();
?>

<p>Some are born great, some achieve greatness, and some have greatness thrust upon them.</p>
<br/>
<img src="album1.jpg" alt="Album 1" width="32%"
     title="The numbers for each set of images don't correspond to each other."/>
<img src="album2.jpg" alt="Album 2" width="32%"/>
<img src="album3.jpg" alt="Album 3" width="32%"/>
<img src="album4.jpg" alt="Album 4" width="32%"/>
<img src="album5.jpg" alt="Album 5" width="32%"/>
<img src="album6.jpg" alt="Album 6" width="32%"/>
<br/><br/>
<img src="chemical1.png" alt="Chemical 1" width="32%"/>
<img src="chemical2.png" alt="Chemical 2" width="32%"/>
<img src="chemical3.png" alt="Chemical 3" width="32%"/>
<img src="chemical4.png" alt="Chemical 4" width="32%"/>
<img src="chemical5.png" alt="Chemical 5" width="32%"/>
<img src="chemical6.png" alt="Chemical 6" width="32%"/>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
