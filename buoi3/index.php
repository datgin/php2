<?php
require_once 'controllers/ProductController.php';
$act = isset($_GET['act']) ? $_GET['act'] : '/';
$productController = new ProductController();
switch ($act) {
    case '/':
        $productController->listProduct();
        break;
    case 'create':
        $productController->createProduct();
        break;
    case 'edit':
        $productController->editProduct();
        break;
    case 'delete':
        $productController->deleteProduct();
        break;
}
