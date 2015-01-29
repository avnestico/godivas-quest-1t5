<?php
require_once(__DIR__ . "/../../../php_source/puzzles/puzzle_template.php");

$questionNumber = 9;
$questionTitle = "RATSA";
ob_start();
?>
The first hint to this puzzle is in its title. If you transpose A with T (as if you're taking the complement of RATSA) and R with S, you get the word "START". This implies that, before you can start, the first thing you need to do is take the complement of the given DNA strings.

Also, searching Google will reveal that selenocysteine (Sec, U) and pyrrolysine (Pyl, O) are encoded by <a href="http://en.wikipedia.org/wiki/Amino_acid#Proteinogenic_amino_acids">UGA and UAG, respectively</a>, meaning that the aliens' STOP codon is only encoded by UAA.

Decoding each DNA strand gives you two seemingly nonsensical strings. However, if you look closely at each string, you'll see that they're made up of a series of <em>three-letter</em> codon names. Convert these to the corresponding one-letter codon names, and you get the following:

Start THRHISGLUTHRHISILEARGASPHISALAARGASPTHRHISILEASNGLY Stop
       T  H  E  T  H  I  R  D  H  A  R  D  T  H  I  N  G

Start ILEASNCYSPYLMETPROSECTHRGLUARGSERCYSILEGLUASNCYSGLU Stop
       I  N  C  O  M  P  U  T  E  R  S  C  I  E  N  C  E

The third hard thing in computer science (after cache invalidation and naming things, as the joke goes) is off-by-one errors. Rather than the answer, this is a hint that you have to shift the codon reading frame of each string by 1. If you move forward for the first string and back for the second, then repeat the above process, you get:

Srt GLUALASERTHRSECPYLPHETHRARGGLUSERILEASPGLUASNCYSGLUTRPILETHRHIS Stp
     E  A  S  T  U  O  F  T  R  E  S  I  D  E  N  C  E  W  I  T  H

Start PHEILEVALGLUSERGLUPROALAARGALATHRGLUHISPYLSECSERGLUSER Stop
       F  I  V  E  S  E  P  A  R  A  T  E  H  O  U  S  E  S

Two of the residences at U of T are made up of five separate houses each: Elmsley Hall and Morrison Hall. Morrison is on the west side of campus, while Elmsley is on the east side.

<?php
print_template($questionNumber, $questionTitle, ob_get_clean(), "ELMSLEY HALL");
