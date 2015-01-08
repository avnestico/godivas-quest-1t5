<?php
include_once(__DIR__ . "/../global_variables.php");
?>

<a href=<?php echo '"/' . $GLOBALS['this_year'] . '/"'?>>
    <div id="header_container">
        <div id="header_menu"></div>
    </div>
</a>

<div id="left_sidebar">
    <?php
    include_once(__DIR__ . "/form_puzzle_submit.php");
    display_submit_form();
    include_once(__DIR__ . "/../header_data.php");
    ?>
</div>
