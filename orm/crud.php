<?php

require_once 'conexao.php';
require_once 'src/Product.php';

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#starting-with-the-product

// Create
$produto = new Product();
$produto->setName("Adicionar produto");
$entityManager->persist($produto);
$entityManager->flush();

$idProd = $produto->getId();

// Read
$produto = $entityManager->find('Product', $idProd);
var_dump($produto->getName());

// Update
$produto = $entityManager->find('Product', $idProd);
$produto->setName("Produto editado");
$entityManager->flush();

// Delete
$produto = $entityManager->find('Product', $idProd);
$entityManager->remove($produto);
$entityManager->flush();
