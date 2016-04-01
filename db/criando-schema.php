<?php

require_once 'conexao2.php';

// http://doctrine-orm.readthedocs.org/projects/doctrine-dbal/en/latest/reference/schema-representation.html

/**
 * Cria apenas o esquema das tabelas para serem adicionadas no MySQL.
 * Não criou as tabelas automaticamente na base de dados selecionada.
 */

$schema = new \Doctrine\DBAL\Schema\Schema();

echo "Criando tabela\n";
$myTable = $schema->createTable("my_table");
$myTable->addColumn("id", "integer", array("unsigned" => true));
$myTable->addColumn("username", "string", array("length" => 32));
$myTable->setPrimaryKey(array("id"));
$myTable->addUniqueIndex(array("username"));

$myForeign = $schema->createTable("my_foreign");
$myForeign->addColumn("id", "integer");
$myForeign->addColumn("user_id", "integer");
$myForeign->addForeignKeyConstraint($myTable, array("user_id"), array("id"), array("onUpdate" => "CASCADE"));

$myPlatform = $conexao->getDatabasePlatform();

$queries = $schema->toSql($myPlatform);
print_r($queries);

$dropSchema = $schema->toDropSql($myPlatform);
print_r($dropSchema);