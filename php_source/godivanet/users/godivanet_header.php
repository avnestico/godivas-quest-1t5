<div id="header_container">
    <div id="header_menu"></div>
</div>

<div id="left_sidebar">
    <?php
    if ($_SESSION['auth']) {
        include_once(__DIR__ . "/logout_button.php");
    }
    include_once(__DIR__ . "/../../header_data.php");
    ?>
</div>
