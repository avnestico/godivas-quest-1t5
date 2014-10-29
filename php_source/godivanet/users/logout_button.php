<?php
    if (isset($_REQUEST['logout'])) {
        session_unset();
        unset($_REQUEST['message']);
        return;
    }
?>

<p class="center"></p>
<form name="logoutform" action="" method="post">
    <div id="logout_submit" onclick="logoutform.submit();">
        <a><b>Log Out</b></a>
    </div>
    <input name="logout" type="hidden" value="true" />
</form>