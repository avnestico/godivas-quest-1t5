<?php
include_once(__DIR__ . "/../global_variables.php");

/**
 * print_template
 *
 * Print formatted html with puzzle template.
 *
 * Copy everything in the next comment into a new file, changing the location of the require_once if necessary, and add
 * the page's question, title, and content. If printing a solution page, add true as a fourth optional argument.
 *
 * @param $questionNumber
 * @param $questionTitle
 * @param $content
 * @param bool $is_solution
 */

/*
<?php
require_once(__DIR__ . "/../../php_source/puzzles/puzzle_template.php");

$questionNumber = ; //number
$questionTitle = ;  //string
ob_start();
?>

// content of page goes here

<?php
print_template($questionNumber, $questionTitle, ob_get_clean()); // Add true to print solution template

*/

function print_template($questionNumber, $questionTitle, $content, $is_solution = false) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="generator" content=
    "HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org"/>
    <meta name="viewport" content="width=800px"/>
    <title><?php echo $questionTitle ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/<?php echo $GLOBALS['this_year'] ?>/favicon.ico"/>
    <link rel="stylesheet" href="/<?php echo $GLOBALS['this_year'] ?>/style/mystyle.css" type=
    "text/css"/>
</head>
<body>
    <div id="container">
        <?php
        include_once(__DIR__ . "/puzzle_header.php");
        print_puzzle_header($is_solution);
        include_once(__DIR__ . "/../message.php");
        ?>
        <div id="content_container">
            <div id="content">
                <h2>
                    <?php if ($is_solution) echo('Solution to ') ?>#<?php echo $questionNumber ?>: <?php echo $questionTitle ?>
                </h2>
                <?php
                if ($is_solution) {
                    echo('<div id="solution">');
                }
                echo($content);
                if ($is_solution) {
                    echo('</div>');
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
