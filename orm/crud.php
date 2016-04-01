<?php

require_once 'conexao.php';
require_once 'src/Produto.php';

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#starting-with-the-product

// Create
$produto = new Produto();
$produto->setNome("Adicionar produto");
$entityManager->persist($produto);
$entityManager->flush();

$idProd = $produto->getId();

// Read
$produto = $entityManager->find('Produto', $idProd);
var_dump($produto->getNome());

// Update
$produto = $entityManager->find('Produto', $idProd);
$produto->setNome("Produto editado");
$entityManager->flush();

// Delete
$produto = $entityManager->find('Produto', $idProd);
$entityManager->remove($produto);
$entityManager->flush();
