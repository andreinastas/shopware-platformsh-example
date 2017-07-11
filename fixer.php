<?php
$config = include('config.php');
$conn = new mysqli($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['dbname']);
$uri =  $conn->real_escape_string(getenv('SHOPWARE_DOMAIN'));
$sql = 'UPDATE s_core_shops SET secure = true, secure_host = "' . $uri . '", always_secure = true';
if ($conn->query($sql)) {
    printf("%d Row inserted.\n", $conn->affected_rows);
} else {
    printf("Error: %s\n", $conn->sqlstate);
}