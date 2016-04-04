<?php

date_default_timezone_set("America/Sao_Paulo");

require_once 'conexao.php';
require_once 'src/Unidirectional-Many-to-One.php';

// doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/reference/working-with-associations.html#establishing-associations

// 01. Exemplo de relacionamento unidirecional Muitos-para-Um

$ondeMora = new OndeMora();
$ondeMora->setEndereco("Rua Alfredo");
$entityManager->persist($ondeMora);
$entityManager->flush();

$usuario = new Usuario();
$usuario->setNome("Carlos");
$usuario->setOndeMora($ondeMora);
$entityManager->persist($usuario);
$entityManager->flush();

$novoUsuario = $usuario->getId();

$buscarUsuario = $entityManager->find('Usuario', $novoUsuario);
var_dump($buscarUsuario->getNome());
var_dump($buscarUsuario->getOndeMora()->getEndereco());
