<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'url' => 'mysql://root:1234@localhost/sdd_doctrine',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);