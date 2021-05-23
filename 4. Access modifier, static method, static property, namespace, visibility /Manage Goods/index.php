<?php

require_once "Models/Product.php";
require_once "Services/ProductManage.php";

use Models\Product;
use Services\ProductManage;

$productManager = new ProductManage();

    $productManager->add(new Product("laptop","50.000VND"));
    $productManager->add(new Product("Smartphone", "100.000VND"));

    $products = $productManager->getProducts();
    foreach ($products as $product){
        echo $product->getName(). $product->getPrice() ."<br>";
    }



