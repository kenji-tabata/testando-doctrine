<?php

require_once 'bootstrap.php';
require_once 'src/simples/Product.php';

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#starting-with-the-product

// Create
$produto = new Product();
$produto->setName("Adicionar produto");
$entityManager->persist($produto);
$entityManager->flush();

$idProd = $produto->getId();
var_dump("Create: $idProd");



// Read
$produto = $entityManager->find('Product', $idProd);

if ($produto === null) {
    echo "No product found.\n";
    exit(1);
}

var_dump("Read: " . $produto->getName());



// Update
$produto = $entityManager->find('Product', $idProd);

if ($produto === null) {
    echo "Product $idProd does not exist.\n";
    exit(1);
}

$produto->setName("Produto editado");
$entityManager->flush();
var_dump("Update: " . $produto->getName());



// Delete
$produto = $entityManager->find('Product', $idProd);

if ($produto === null) {
    echo "Product $idProd does not exist.\n";
    exit(1);
}

$entityManager->remove($produto);
$entityManager->flush();
var_dump("Delete");
