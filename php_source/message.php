<?php
if (!array_key_exists('message', $_REQUEST)) {
    $_REQUEST['message'] = "";
}

$message = htmlspecialchars($_REQUEST['message']);
if ($message != "") {
    ?>
    <div id="content_container">
        <div id="message">
            <?php
            echo "<h2>$message</h2>";
            ?>
        </div>
    </div>
<?php
}
?>
