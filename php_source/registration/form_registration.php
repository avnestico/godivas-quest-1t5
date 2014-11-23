<script type="text/javascript" src="../php_source/submit_enter.js"></script>
<div style="text-align:center">
    <form name="registerform" action="../php_source/registration/perform_register.php" method="post"
          id="registerform">
        First name:<br/>
        <input name="firstname" type="text" value="" autofocus onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>
        Last name:<br/>
        <input name="lastname" type="text" value="" onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>
        Email: (Important)<br/>
        <input name="email" type="text" value="" onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>

        <div id="form_submit" onclick="registerform.submit();">
            <a><b>Register</b></a>
        </div>
    </form>
</div>