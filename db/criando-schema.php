<?php

require_once 'conexao1.php';

$schema = new \Doctrine\DBAL\Schema\Schema();

$sm = $conexao->getSchemaManager();
echo "Criando tabela\n";
$usersTable = $schema->createTable("users");
$usersTable->addColumn("id", "integer", array("unsigned" => true));
$usersTable->addColumn("first_name", "string", array("length" => 64));
$usersTable->addColumn("last_name", "string", array("length" => 64));
$usersTable->addColumn("email", "string", array("length" => 256));
$usersTable->addColumn("website", "string", array("length" => 256));
$usersTable->setPrimaryKey(array("id"));

$loginTable = $schema->createTable("login");
$loginTable->addColumn("id", "integer", array("unsigned" => true));
$loginTable->addColumn("username", "string", array("length" => 64));
$loginTable->addColumn("password", "string", array("length" => 64));
$loginTable->addUniqueIndex(array("username"));
$loginTable->setPrimaryKey(array("id"));
$loginTable->addForeignKeyConstraint($usersTable, array("id"), array("id"), array("onDelete" => "CASCADE"));

$myPlatform = $conexao->getDatabasePlatform();

$queries = $schema->toSql($myPlatform); // get queries to create this schema.
print_r($queries);

// Lista todas as bases de dados
echo "\nBase de dados disponíveis\n";
$databases = $sm->listDatabases();
foreach ($databases as $database) {
    echo $database . "\n";
}

// Lista as colunas da tabela
echo "\nColunas da tabela pesq_main\n";
$colunas = $sm->listTableColumns('pesq_main');
foreach ($colunas as $coluna) {
    echo $coluna->getName() . ": " . $coluna->getType() . "\n";
}

// Migrate
echo "\nEsquema de Migrate\n";
$doSchema = $sm->createSchema();
$paraSchema = clone $doSchema;
$paraSchema->dropTable("auth_group");
$sql = $doSchema->getMigrateToSql($paraSchema, $conexao->getDatabasePlatform());
print_r($sql);


//$dropSchema = $schema->toDropSql($myPlatform); // get queries to safely delete this schema