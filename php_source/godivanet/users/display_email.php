<?php
include_once(__DIR__ . "/user_email.php");
function display_email($num) {
    $email_list = get_email($num);
    foreach ($email_list as $email) {
        echo "<tr><td>" . $email['from'] . "</td><td><strong>" . $email['subject'] . "</strong><br/><br/>" . $email['body'] .
                "</td><td>" . $email['date'] . "</td></tr>";

    }
}

function print_email_table($num) {
    ?>
    <table border="1">
        <thead>
        <tr>
            <th>From</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        display_email($num)
        ?>
        </tbody>
    </table>
<?php
}
