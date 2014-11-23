<?php
include_once "global_variables.php";

function display_header_link($url, $name, $is_visible = true, $is_past_year = false) {
    $new_link = "";
    if (!$is_past_year) {
        $new_link = "/" . $GLOBALS['this_year'];
    }

    $new_link =  "<a href=" . $new_link . "/$url>$name</a><br/>";
    if (!$is_visible) {
        $new_link = "<!--" . $new_link . "-->";
    }
    echo $new_link;
}

function display_past_quests($start_year) {
    $start_year_int = uoft_year_to_int($start_year);
    $current_year_int = uoft_year_to_int($GLOBALS['this_year']);
    for ($i = $start_year_int; $i < $current_year_int; $i++) {
        $uoft_year = int_to_uoft_year($i);
        display_header_link($uoft_year, $uoft_year, true, true);
    }

}

function uoft_year_to_int($year) {
    return intval(str_split($year)[0] . str_split($year)[2], 10);
}

function int_to_uoft_year($int) {
    $year = str_pad($int,2,'0',STR_PAD_LEFT);
    return $year[0] . "T" . $year[1];
}
?>

<p class="center"></p>

<h3><b>Menu</b></h3>
<b>
    <?php
    display_header_link("index.php", "Home");
    display_header_link("phase1/index.php", "Phase 1");
    display_header_link("phase2/index.php", "Phase 2", false);
    display_header_link("phase3/index.php", "Phase 3", false);
    display_header_link("info/registration.php", "Registration");
    display_header_link("info/leaderboard.php", "Leaderboard");
    display_header_link("info/history.php", "History");
    display_header_link("info/hints.php", "Hints");
    display_header_link("info/winners.php", "Winners", false);
    display_header_link("godivanet.php", "GodivaNet", false);
    ?>
</b><br/>
<h3>Previous Quests</h3>

<p class="center">
    <?php display_past_quests("0T7"); ?>
    <br/>
</p>