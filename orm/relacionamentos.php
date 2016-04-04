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



require_once 'src/Unidirectional-One-to-One.php';

// 02. Exemplo de relacionamento unidirecional Um-para-Um

$produto = new Produto();
$produto->setTipo("Calça Jeans");
$entityManager->persist($produto);
$entityManager->flush();

$envio = new Envio();
$envio->setLocal("Ruam Madureira, 45");
$envio->setProduto($produto);
$entityManager->persist($envio);
$entityManager->flush();

$novoProduto = $produto->getId();

$buscarProduto = $entityManager->find('Envio', $novoProduto);
var_dump($buscarProduto->getProduto()->getTipo());
var_dump($buscarProduto->getLocal());



require_once 'src/Bidirectional-Many-to-Many.php';

// 03. Exemplo de relacionamento bidirecional Muitos-para-Muitos
