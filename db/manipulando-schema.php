<?php

require_once 'conexao1.php';

// http://doctrine-orm.readthedocs.org/projects/doctrine-dbal/en/latest/reference/schema-manager.html

$sm = $conexao->getSchemaManager();

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