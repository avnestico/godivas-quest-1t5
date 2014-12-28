<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 3;
$questionTitle = "Putney";
ob_start();
?>

<p>I found this note on my way home from the club one dreary morning. I feel like the fellow who wrote it
    was as drunk as I was when I read it:</p>
<br/>

<p>K UBCM HXUWRXH HXKQ BWLEMO YJQ OJHXMO VWII</p>

<p>EWH BUY K SKBV KH NMOZ KBHMOMQHKBR</p>

<p>EMCJWQM J SOKMBV US LKBM KBSUOLMV LM HXJH KH KQ HXM QLJIIMQH BWLEMO</p>

<p>MFTOMQQKEIM JQ HXM QWL US HYU CWEMQ KB HYU VKSSMOMBH YJZQ</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
