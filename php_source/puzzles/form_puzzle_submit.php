<div class="box_container">
    <h3>Submit</h3>
    <script type="text/javascript" src="../php_source/submit_enter.js"></script>
    <form name="final_answer" action="../php_source/puzzles/answer_check.php" method="post">

        User ID:<br/>
        <input name="alias" style="width:84px;" type="text" value="" autofocus onKeyPress="return submit_enter(this,event)"/>

        Answer:<br/>
        <input name="answer" style="width:84px; margin:6px 0px" type="text" value="" onKeyPress="return submit_enter(this,event)"/>

        <button onclick="final_answer.submit();">Submit</button>

        <input name="question" type="hidden" value="<?php echo $questionNumber ?>"/>
        <input name="questionUrl" type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>"/>
    </form>
    <br/>
</div>
