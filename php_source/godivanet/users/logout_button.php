<?php
if (isset($_REQUEST['logout'])) {
    session_unset();
    $_REQUEST['message'] = "";
    return;
}
?>

<div class="box_container">
    <h3>GodivaNet</h3>

    <form name="logoutform" action="" method="post">
        <div id="form_submit" onclick="logoutform.submit();">
            <a><b>Log Out</b></a>
        </div>
        <input name="logout" type="hidden" value="true"/>
    </form>
    <br/>
</div>
