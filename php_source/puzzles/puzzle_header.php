<?php
include_once(__DIR__ . "/../global_variables.php");

/**
 * print_puzzle_header
 *
 * Print header and sidebar for a puzzle (or solution, if the optional argument is set to true).
 *
 * Add true as an argument to the display_submit_form call when you upload puzzle solutions to the site and don't want
 * to take any more answer submissions. The submit form div will switch to a link to the solution.
 *
 * @param bool $is_solution
 */
function print_puzzle_header($is_solution = false) {
    ?>

    <a href=<?php echo '"/' . $GLOBALS['this_year'] . '/"' ?>>
        <div id="header_container">
            <div id="header_menu"></div>
        </div>
    </a>

    <div id="left_sidebar">
    <?php
    include_once(__DIR__ . "/form_puzzle_submit.php");
    if (!$is_solution) {
        display_submit_form($GLOBALS['quest_finished']);
    } else {
        get_return_link();
    }
    include_once(__DIR__ . "/../header_data.php");
    ?>
    </div>

<?php
}
