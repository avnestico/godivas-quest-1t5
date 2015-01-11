<?php
include_once(__DIR__ . "/../global_variables.php");

/**
 * print_template
 *
 * Print formatted html with puzzle template.
 *
 * Copy everything in the next comment into a new file, changing the location of the require_once if necessary, and add
 * the page's question, title, and content. If printing a solution page, enter the puzzle's solution as a fourth
 * argument. This adds a sidebar link to return to the puzzle (assuming the solution is in a subfolder of the puzzle)
 *
 * @param $questionNumber
 * @param $questionTitle
 * @param $content
 * @param string $solution: The puzzle's solution. Optional arg; when included, the template prints a solution page.
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
print_template($questionNumber, $questionTitle, ob_get_clean()); // Add puzzle's solution as fourth arg to print solution page

*/

function print_template($questionNumber, $questionTitle, $content, $solution = "") {
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
        print_puzzle_header($solution); // Casts to bool. False if empty (default behaviour), true otherwise.
        include_once(__DIR__ . "/../message.php");
        ?>
        <div id="content_container">
            <div id="content">
                <h2>
                    <?php if ($solution) echo('Solution to ') ?>#<?php echo $questionNumber ?>: <?php echo $questionTitle ?>
                </h2>
                <?php
                if ($solution) {
                    echo('<pre><code>');
                }
                echo($content);
                if ($solution) {
                    echo('<div id="solution">' . $solution . '</div></code></pre>');
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
