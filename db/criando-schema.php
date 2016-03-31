<?php

require_once 'conexao1.php';

$schema = new \Doctrine\DBAL\Schema\Schema();

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
$loginTable->addForeignKeyConstraint($usersTable, array("id"), array("id"), array("onDelete" => "CASCADE")
);

$myPlatform = new \Doctrine\DBAL\Platforms\MySqlPlatform;

$queries = $schema->toSql($myPlatform); // get queries to create this schema.

//$dropSchema = $schema->toDropSql($myPlatform); // get queries to safely delete this schema