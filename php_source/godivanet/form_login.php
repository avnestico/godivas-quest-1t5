<?php
include_once(__DIR__ . "/../global_variables.php");
?>

<p>
    <em>Note: Do not submit your utormail credentials on this form. I don't want your utormail password.</em>
</p>
<br/>

<div style="text-align:center">
    <script type="text/javascript" <?php echo 'src="/' . $GLOBALS['this_year'] . '/php_source/js/submit_enter.js' . '"' ?>></script>
    <form name="loginform" method="post" id="loginform"
            <?php echo 'action="/' . $GLOBALS['this_year'] . '/php_source/godivanet/perform_login.php"' . '"' ?>>
        Quest ID:<br/>
        <input name="alias" type="text" value="" autofocus onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>
        Username:<br/>
        <input name="username" type="text" value="" onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>
        Password:<br/>
        <input name="password" type="password" value="" onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>

        <button onclick="loginform.submit();">Log In</button>

        <input name="questionUrl" type="hidden" value="<?php echo $_SERVER['PHP_SELF'] . '/../' ?>"/>
    </form>
</div>
