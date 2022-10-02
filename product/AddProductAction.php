<?php
include 'Product.php';
include '../components/product/ProductFactory.php';
include '../components/product/ProductManager.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(
        !empty($_POST['name']) &&
        !empty($_POST['description']) &&
        !empty($_POST['price']) &&
        !empty($_POST['category']) &&
        !empty($_POST['image'])
    ) {
        $productFactory = new ProductFactory();
        $product = $productFactory->create(
            $_POST['name'],
            $_POST['description'],
            $_POST['image'],
            (int)$_POST['price'],
            $_POST['category']
        );
        $productManager = new ProductManager();
        $productManager->save($product, true);
    }
}
