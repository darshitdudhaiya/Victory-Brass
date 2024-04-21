<?php

require("../../assets/includes/init.php");
require(pathOf('admin/includes/auth.php'));

if (!isset($_GET['id'])) {
    header('Location: ' . urlOf('admin/products'));
    exit();
}

$productId = $_GET['id'];

$imageName = selectOne("SELECT * FROM `productsimages` WHERE `ProductId` = ?", [$productId]);
$imagesDeleteFromFolder = unlink(pathOf('assets/uploads/product-images/' . $imageName['ImageName'] . ''));

if ($imagesDeleteFromFolder === true) {
    $imagesDelete = execute("DELETE FROM `productsimages` WHERE `ProductId` = ?", [$productId]);

    if ($imagesDelete) {
        execute("DELETE FROM `products` WHERE `Id` = ?", [$productId]);
    }
    header('Location: ' . urlOf('admin/products'));
}

// execute("UPDATE `business` SET `IsDeleted` = 1 WHERE `Id` = ?", [$businessId]);
