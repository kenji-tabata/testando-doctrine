<?php

require_once 'bootstrap.php';
require_once 'src/simples/Product.php';

// http://doctrine-orm.readthedocs.org/en/latest/tutorials/getting-started.html#starting-with-the-product
// 
// All
$productRepository = $entityManager->getRepository('Product');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}
