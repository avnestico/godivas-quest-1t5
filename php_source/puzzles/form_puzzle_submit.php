<?php
include_once(__DIR__ . "/../global_variables.php");

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

function get_solution_link() {
    ?>

        <h3>Solution</h3>
        <a href="solution.html"><b>View Solution</b></a>
    <?php
}


function display_submit_form($solution = false) {
    echo('<div class="box_container">');
    if (!$solution) {
        get_submit_form();
    } else {
        get_solution_link();
    }
    echo('</div>');
}
