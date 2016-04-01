<?php

date_default_timezone_set("America/Sao_Paulo");

require_once 'conexao.php';
require_once 'src/User.php';
require_once 'src/Bug.php';

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#adding-bug-and-user-entities

$user = new User();
$user->setName("Lucas Almeida");
$entityManager->persist($user);
$entityManager->flush();
$idUser = $user->getId();

$bug = new Bug();
$bug->setDescription("Something does not work!");
$bug->setCreated(new DateTime("now"));
$bug->setStatus("OPEN");

$idBug = $bug->getId();