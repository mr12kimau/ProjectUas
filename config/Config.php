<?php

// config/foodboard.php

return [

    'app_root' => 'https://ultimatewebsolutions.net',

    'work_root' => '/foodboard/',

    'thankyou_url' => env('FOODBOARD_APP_ROOT', 'https://ultimatewebsolutions.net') . env('FOODBOARD_WORK_ROOT', '/foodboard/') . 'pay-with-cash-on-delivery/thank-you.php',

    'cancel_url' => env('FOODBOARD_APP_ROOT', 'https://ultimatewebsolutions.net') . env('FOODBOARD_WORK_ROOT', '/foodboard/') . 'pay-with-cash-on-delivery/index.php',

    'order_email_subject' => 'Order Confirmation',

    'currency' => 'USD',

    'currency_symbol' => '$',

    // Sender and Recipient
    'sender_name' => 'FoodBoard',

    'sender_email' => 'noreply@foodboard.com',

    'recipient_email' => 'websolutions.ultimate@gmail.com',

    'cc_email' => '',

    'bcc_email' => '',

    // Mechanism to use, to send email
    'mailer' => 'phpmail',
];
