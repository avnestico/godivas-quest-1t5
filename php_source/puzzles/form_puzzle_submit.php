<?php
include_once(__DIR__ . "/../global_variables.php");

/**
 * display_submit_form
 *
 * Prints the submit form to a puzzle, or a link to the solution once the Quest is over.
 *
 * @param bool $solution
 */
function display_submit_form($solution = false) {
    echo('<div class="box_container">');
    if (!$solution) {
        get_submit_form();
    } else {
        get_solution_link();
    }
    echo('</div>');
}

/**
 * get_submit_form
 *
 * Print the puzzle answer submission form.
 */
function get_submit_form() {
    global $questionNumber;
    ?>
    <h3>Submit</h3>
    <script type="text/javascript" <?php echo 'src="/' . $GLOBALS['this_year'] . '/php_source/submit_enter.js' . '"' ?>></script>
    <form name="final_answer"
          method="post" <?php echo 'action="/' . $GLOBALS['this_year'] . '/php_source/puzzles/answer_check.php' . '"' ?>>

        User ID:<br/>
        <input name="alias" style="width:84px;" type="text" value="" autofocus
               onKeyPress="return submit_enter(this,event)"/>

        Answer:<br/>
        <input name="answer" style="width:84px; margin:6px 0px" type="text" value=""
               onKeyPress="return submit_enter(this,event)"/>

        <button onclick="final_answer.submit();">Submit</button>

        <input name="question" type="hidden" value="<?php echo $questionNumber ?>"/>
        <input name="questionUrl" type="hidden" value="<?php echo $_SERVER['PHP_SELF'] . '/../' ?>"/>
    </form>
    <?php
}

/**
 * get_solution_link
 *
 * Print link to solution.
 */
function get_solution_link() {
    ?>

        <h3>Solution</h3>
        <a href="solution"><b>View Solution</b></a>
    <?php
}

/**
 * get_return_link
 *
 * On a solution page, print link that returns you to the puzzle.
 */
function get_return_link() {
    ?>
    <div class="box_container">
        <h3>Return</h3>
        <a href="../"><b>Return to Question</b></a>
    </div>
<?php
}
