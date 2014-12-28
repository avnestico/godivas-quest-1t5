<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = 9;
$questionTitle = "RATSA";
ob_start();
?>

<p>Recently, I've been studying some alien biology. It turns out that alien DNA is surprisingly close to ours - they have all of the same amino acids, all coded the same way. I've found one important difference, however: in aliens, selenocysteine and pyrrolysine are always coded by their respective codons. This means that aliens only have one STOP codon.</p>
<p>I've been working on these two DNA fragments for a while, and I don't know where to go from here. Do you think you can help?</p>
<br/>

<p class="mono" style="word-wrap: break-word">

TACTGAGTAGCCGTATAGTCACCGAACACTTGCGTAGCCGTATAGTCATATAATCTTCGCGCCCCTCGTAGGGGGGTATAGAGGCGAGAGCGGCGTGCGCCCCGGTCGGGGTGGGTAGCAGTGTAGAGCTAAAATCTTCGCTCATTACCTGACATGATTGTACCCCAACACTCGGGAGCGGAGTCTCTCTTGGGTGTCCAGACTCACGGGCATGGAAGGGGTACTTTGGGTATCTCGCTCCCCACCCGAAACTTCACTCTCCTAGGAACTTCGCAGGGGTCCGGATACTCGGAGCTTAACGATAAGACCGGATACTTGGGCCGGGTAAGATCTTTGAGTAGCGGTGTATAGTATTGCTGA

</p>

<p class="mono" style="word-wrap: break-word">

TACTAAGACCTCCGGAGTTTGACGATGAGCGGAATAAACTACCTCTGAGGCGCGATCAGACTCACGTGCGTGTCTCCAAATACTCGCGCTCCGAGGCTCGCAACGATAAGCTAGGACCTTCCCGACACTCGATCATTAACAATGTCGCCAGATACTATTGGTACGGGGTGCTCTATGAGCTTCATCGTGAACCCGAGACTAGACTCGCGCCCGACACTGGCTCCATCCGGAATCGTCGTGCGCCACGCAACCGTTGAGTGTCTCCTGATACTGTGTAAAGAGGGATGGAGAGGCTCACAAGCCTTTCTCCGGAAACTTCACTCGCAATTATCAACAAATATATGGCGGACAGAAATGTTT

</p>
<br/>

<p>P.S. I recommend not decoding this by hand.</p>

<?php
print_template($questionNumber, $questionTitle, ob_get_clean());
