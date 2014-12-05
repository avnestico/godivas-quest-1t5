<script type="text/javascript" src="../php_source/submit_enter.js"></script>
<div style="text-align:center">
    <form name="registerform" action="../php_source/registration/perform_register.php" method="post" id="registerform">

        First name:<br/>
        <input name="first_name" type="text" value="" autofocus onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>
        Last name:<br/>
        <input name="last_name" type="text" value="" onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>
        Email: (Important)<br/>
        <input name="email" type="text" value="" onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>

        <button onclick="registerform.submit();">Register</button>

        <input name="questionUrl" type="hidden" value="<?php echo $_SERVER['PHP_SELF'] ?>"/>
    </form>
</div>
