<script type="text/javascript" src="../php_source/submit_enter.js"></script>
<div style="text-align:center">
    <form name="loginform" action="../php_source/godivanet/perform_login.php" method="post"
          id="loginform">
        Username:<br/>
        <input name="username" type="text" value="" autofocus onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>
        Password:<br/>
        <input name="password" type="password" value="" onKeyPress="return submit_enter(this,event)"/><br/>
        <br/>

        <div id="form_submit" onclick="loginform.submit();">
            <a><b>Log In</b></a>
        </div>
    </form>
</div>