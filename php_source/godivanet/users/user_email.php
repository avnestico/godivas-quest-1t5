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

    $user2_email = [
            [
                    "from" => "IT Manager",
                    "subject" => "Re: Re: How are things going?",
                    "body" => "Pete,<br/><br/>" .
                            "That's horrible! I've got to tell her to change her password!<br/><br/>" .
                            "Dave<br/><br/>" .
                            "P.S. It's times like this that make me glad my account can't be accessed from the web portal.<br/><br/>" .
                            "| Dave,<br/>|<br/>" .
                            "| Things are good. We're making great strides all around the university.<br/>" .
                            "| We've been in talks with EngSoc about the Skule trademark, and the<br/>" .
                            "| university appears to be amicable to a tuition raise to fund our joint<br/>" .
                            "| enterprise.<br/>|<br/>" .
                            "| Bold is a master of her craft. She's playing the administration like a<br/>" .
                            "| fiddle while keeping the students happy. She's got some plans cooking<br/>" .
                            "| in her email inbox - she told me her password is her real name, so if<br/>" .
                            "| you want to stay up to date with what's going on, just log in as her.<br/>|<br/>" .
                            "| Pete<br/>|<br/>" .
                            "| | Hi Pete,<br/>| |<br/>" .
                            "| | Just checking in on the Quest. How are our plans for the University?<br/>" .
                            "| | Is the Potts trophy secure? Get back to me when you can.<br/>| |<br/>" .
                            "| | Dave",
                    "date" => "Sun, Dec 28, 2014"
            ],
            [
                    "from" => "IT Manager",
                    "subject" => "How are things going?",
                    "body" => "Hi Pete,<br/><br/>" .
                            "Just checking in on the Quest. How are our plans for the University? Is the Potts trophy secure? Get back to me when you can.<br/><br/>" .
                            "Dave",
                    "date" => "Sat, Dec 20, 2014"
            ]
    ];

    $user3_email = [
            [
                    "from" => "Serena Bold",
                    "subject" => "Notes To Self",
                    "body" => "* Potts trophy is secure in my office.<br/>" .
                            "* Only give trophy to someone who knows my code name, because I've only told that to a few important people.<br/>" .
                            "* Ask Lark where the hottest New Year's parties will be.<br/>" .
                            "* Fire that annoying IT guy when this is all over. And maybe give Peter a raise.",
                    "date" => "Tues, Dec 30, 2014"
            ],
            [
                    "from" => "IT Manager",
                    "subject" => "Change Your Password, Please",
                    "body" => "Serena,<br/><br/>" .
                            "You can't just go telling people your password, even if they're in our organization. Please change it as soon as you get the chance.<br/><br/>" .
                            "Regards,<br/>" .
                            "Dave",
                    "date" => "Sun, Dec 28, 2014"
            ]
    ];

    return $$email;
}
