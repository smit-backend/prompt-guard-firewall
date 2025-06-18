<?php

return [
    'enabled' => env('PROMPT_GUARD_FIREWALL_ENABLED', true),
    'timeout' => env('PROMPT_GUARD_FIREWALL_TIMEOUT', 30),
    'log_channel' => env('PROMPT_GUARD_FIREWALL_LOG', 'stack'),
];
