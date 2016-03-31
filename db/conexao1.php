<?php

require_once __DIR__ . '/vendor/autoload.php';

$config = new \Doctrine\DBAL\Configuration();
$connectionParams = array(
    'dbname'   => 'sdd_testes',
    'user'     => 'root',
    'password' => '1234',
    'host'     => 'localhost',
    'driver'   => 'pdo_mysql',
);
$conexao = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);