<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 20;
$questionTitle = "Elementary";
ob_start();
?>

<p>You must battle each of the following teams in order to become the champion. Remember, the only real pokemon are the
    original 118.</p><br/>

<img src="057.png"/><img src="111.png"/><img src="068.png"/><br/>

<img src="019.png"/><img src="053.png"/><img src="043.png"/><img src="002.png"/><img src="007.png"/><img src="068.png"/><br/>

<img src="092.png"/><img src="007.png"/><img src="053.png"/><br/>

<img src="032.png"/><img src="007.png"/><img src="068.png"/><img src="053.png"/><img src="006.png"/><br/>

<img src="052.png"/><img src="007.png"/><img src="028.png"/><img src="016.png"/><br/>

<img src="015.png"/><img src="092.png"/><img src="006.png"/><img src="019.png"/><br/>

<img src="008.png"/><img src="045.png"/><img src="008.png"/><img src="008.png"/><img src="015.png"/><img src="016.png"/><br/>

<img src="015.png"/><img src="057.png"/><img src="039.png"/><img src="068.png"/>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
?>
