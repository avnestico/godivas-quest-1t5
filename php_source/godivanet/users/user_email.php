<?php
function get_email($num) {
    $email = 'user' . $num . '_email';

    $user1_email = [
            [
                    "from" => "Peter King",
                    "subject" => "Good work",
                    "body" => "Hey kid,<br/>" .
                            "Well done with phase 1 of the Quest. I'll take phase 2, and I think the boss is doing the third phase herself.<br/><br/>" .
                            "Peter",
                    "date" => "Mon, Dec 15, 2015"
            ]
    ];

    return $$email;
}