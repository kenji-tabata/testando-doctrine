<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#obtaining-the-entitymanager

// Define o local da pasta padrão que contem as classes de modelos do projeto
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

// database configuration parameters
$conn = array(
    'dbname'   => 'sdd_doctrine',
    'user'     => 'root',
    'password' => '1234',
    'host'     => 'localhost',
    'driver'   => 'pdo_mysql',
);

$entityManager = EntityManager::create($conn, $config);