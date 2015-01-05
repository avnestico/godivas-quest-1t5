<?php
include_once(__DIR__ . "/global_variables.php");

/**
 * display_header_link
 *
 * Print a link in the header, given the absolute url you want it to point to and the name you want it to display as.
 * By default, adds the current year at the beginning of the url. Can be suppressed by setting $is_current_year = false.
 * The $is_visible flag comments out the link if set to false (useful for hiding phases until they're ready).
 *
 * @param $url
 * @param $name
 * @param bool $is_visible
 * @param bool $is_current_year
 */
function display_header_link($url, $name, $is_visible = true, $is_current_year = true) {
    $new_link = "";
    if ($is_current_year) {
        $new_link = "/" . $GLOBALS['this_year'];
    }

    $new_link = "<a href=" . $new_link . "/$url>$name</a><br/>";
    if (!$is_visible) {
        $new_link = "<!--" . $new_link . "-->";
    }
    echo $new_link;
}

/**
 * display_past_quests
 *
 * Print links to all the quests from $start_year to last year.
 *
 * @param $start_year
 */
function display_past_quests($start_year) {
    $start_year_int = uoft_year_to_int($start_year);
    $current_year_int = uoft_year_to_int($GLOBALS['this_year']);
    for ($i = $start_year_int; $i < $current_year_int; $i++) {
        $uoft_year = int_to_uoft_year($i);
        display_header_link($uoft_year, $uoft_year, true, false);
    }

}

/**
 * uoft_year_to_int
 *
 * Convert a U of T year string into an int (ie String "1T5" => int 15)
 *
 * @param $year
 * @return int
 */
function uoft_year_to_int($year) {
    return intval(str_split($year)[0] . str_split($year)[2], 10);
}

/**
 * int_to_uoft_year
 *
 * Reverse of above (ie int 15 => String "1T5")
 *
 * @param $int
 * @return string
 */
function int_to_uoft_year($int) {
    $year = str_pad($int, 2, '0', STR_PAD_LEFT);
    return $year[0] . "T" . $year[1];
}

?>

<div class="box_container">
    <h3><b>Menu</b></h3>
    <b>
        <?php
        display_header_link("", "Home");
        display_header_link("phase1", "Phase 1");
        display_header_link("phase2", "Phase 2");
        display_header_link("phase3", "Phase 3");
        display_header_link("registration", "Registration");
        display_header_link("leaderboard", "Leaderboard");
        display_header_link("history", "History");
        display_header_link("hints", "Hints");
        display_header_link("winners", "Winners", false);
        display_header_link("godivanet", "GodivaNet", false);
        ?>
    </b><br/>
</div>

<div class="box_container">
    <h3>Previous Quests</h3>

    <p class="center">
        <?php display_past_quests("0T7"); ?>
        <br/>
    </p>
</div>
