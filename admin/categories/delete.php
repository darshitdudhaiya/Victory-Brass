<?php

require("../../assets/includes/init.php");
require(pathOf('admin/includes/auth.php'));

if (!isset($_GET['id'])) {
    header('Location: ' . urlOf('admin/sales'));
    exit();
}


$categoryId = $_GET['id'];
$imagesDelete = execute("DELETE FROM `categoriesimages` WHERE `CategoryId` = ?", [$categoryId]);

$products = select("SELECT * FROM `products` WHERE `CategoryId` = $categoryId");

foreach ($products as $product) {
    $productId = $product['Id'];
    $prodeuctImageDelete = execute("DELETE FROM `productsimages` WHERE `ProductId` = $productId");

    if ($prodeuctImageDelete) {
        execute("DELETE FROM `products` WHERE `Id` = ?", [$productId]);
    }
}

if ($imagesDelete) {
    execute("DELETE FROM `categories` WHERE `Id` = ?", [$categoryId]);
}

// execute("UPDATE `business` SET `IsDeleted` = 1 WHERE `Id` = ?", [$businessId]);
header('Location: ' . urlOf('admin/categories'));
