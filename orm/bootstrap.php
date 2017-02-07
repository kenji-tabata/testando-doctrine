<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#obtaining-the-entitymanager

# Debug
$isDevMode = true;

# Define o local padrão estarão armazenadas as Entities class
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src/simples"), $isDevMode);

# Podemos criar Entities class com os arquivos yaml ou xml
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);

# Configurações da base de dados
$conn = array(
    'dbname'   => 'doctrine_test',
    'user'     => 'root',
    'password' => '1234',
    'host'     => 'localhost',
    'driver'   => 'pdo_mysql',
);

# Criando a conexão
$entityManager = EntityManager::create($conn, $config);