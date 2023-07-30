<?php

return [
    'user_status' => [
        '1' => 'ACTIVE',
        '2' => 'BLOCKED',
    ],
    'user_role' => [
        '1' => 'ADMIN',
        '2' => 'USER',
    ],
    'password_reset_token_expiries' => env('PASSWORD_RESET_TOKEN_EXPIRIES', 1), // hour
];
