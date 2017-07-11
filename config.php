<?php
$relationships = getenv("PLATFORM_RELATIONSHIPS");
$relationships = json_decode(base64_decode($relationships), TRUE);

$mysql = $relationships['database'][0];
$redis = $relationships['redis'][0];

return [
    'db' => [
        'username' => $mysql['username'],
        'password' => $mysql['password'],
        'dbname' => $mysql['path'],
        'host' => $mysql['host'],
        'port' => $mysql['port']
    ],
    'cache' => [
        'backend' => 'redis',
        'backendOptions' => [
            'servers' => [
                [
                    'host' => $redis['host'],
                    'port' => $redis['port'],
                    'dbindex' => 0
                ]
            ]
        ]
    ],
    'front' => [
        'throwException' => true,
        'showException' => true
    ],
    'phpsettings' => [
        'display_errors' => 1
    ],
];
