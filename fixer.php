<?php
$config = include('./config.php');
$conn = new mysqli($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['dbname']);
echo "fixed";