<?php

require("../../assets/includes/init.php");
require(pathOf('admin/includes/auth.php'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $productName = $_POST['product-name'];
    $productSize = $_POST['product-size'];
    $productMaterial = $_POST['product-material'];
    $productThreads = $_POST['product-threads'];
    $productPlating = $_POST['product-plating'];
    $productDescription = $_POST['product-description'];
    $uploadedFiles = array();
    if (isset($_FILES['images'])) {
        $imageName = selectOne("SELECT * FROM `productsimages` WHERE `ProductId` = ?", [$id]);
        $imagesDeleteFromFolder = unlink(pathOf('assets/uploads/product-images/' . $imageName['ImageName'] . ''));

        $time = time();
        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $tmpFileName = $_FILES['images']['tmp_name'][$i];
            $fileName = "$time-" . $_FILES['images']['name'][$i];

            $fileUploaded = move_uploaded_file($tmpFileName, pathOf("assets/uploads/product-images/$fileName"));
            if (!$fileUploaded) {
                echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
                exit();
            }

            array_push($uploadedFiles, $fileName);
        }
    }
    $query = "UPDATE `Products` SET `Name` = ?, `Size` = ?,`Material` = ?,`Threads` = ?,`Plating` = ?, `Description` = ? WHERE `Id` = ?";
    $params = [$productName, $productSize, $productMaterial, $productThreads, $productPlating, $productDescription, $id];

    $edited = execute($query, $params);
    if ($edited) {
        $productId = $_POST['id'];
        foreach ($uploadedFiles as $file) {
            execute("UPDATE `ProductsImages` SET `ImageName` =  ? WHERE `ProductId` = ?", [$file, $productId]);
        }
    }
    header('Content-Type: application/json');
    echo json_encode(["status" => true, "message" => "Product edited successfully."]);

    exit();
} elseif (!isset($_GET['id'])) {
    header('Location: ' . urlOf('admin/products'));
    exit();
}

$title = "Edit Product";

$id = $_GET['id'];
$query = "SELECT * FROM `products` WHERE `Id` = ?";
$queryForImage = "SELECT * FROM `productsimages` WHERE `ProductId` = ?";
$product = selectOne($query, [$id]);
$image = selectOne($queryForImage, [$id]);
$selectedCategory = $product['CategoryId'];
$queryForSelectedCategory = "SELECT * FROM `categories` WHERE `Id` = $selectedCategory";
$selectedCategory = select($queryForSelectedCategory);
$allCategories = select("SELECT * FROM `categories`");

require(pathOf('admin/includes/header.php'));
require(pathOf('admin/includes/nav.php'));
require(pathOf('admin/includes/sidebar.php'));

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/products') ?>">Products</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col col-md-12">
                <form onsubmit="return editProduct(<?= $id ?>);">
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-name">Category Name</label>
                                            <!-- <input type="text" class="form-control" id="product-name"
                                                placeholder="Enter Product Name" autofocus required> -->
                                            <select class="form-control" id="category-name">
                                                <option value="<?= $selectedCategory[0]["Id"] ?> " selected><?= $selectedCategory[0]["Name"] ?></option>

                                                <?php foreach ($allCategories as $category) {
                                                    if ($category['Id'] !==  $product['CategoryId']) {

                                                ?>
                                                        <option value="<?= $category["Id"] ?> "><?= $category["Name"] ?></option>

                                                <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="product-name">Product Name</label>
                                            <input type="text" class="form-control" id="product-name" placeholder="Enter product Name" autofocus required value="<?= $product['Name'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-size">Product Size</label>
                                            <input type="text" class="form-control" id="product-size" placeholder="Enter Product Size" autofocus value="<?= $product['Size'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-material">Product Material</label>
                                            <input type="text" class="form-control" id="product-material" placeholder="Enter Product Material" autofocus value="<?= $product['Material'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-threads">Product Threads</label>
                                            <input type="text" class="form-control" id="product-threads" placeholder="Enter Product Threads" autofocus value="<?= $product['Threads'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-plating">Product Finishing / Plating</label>
                                            <input type="text" class="form-control" id="product-plating" placeholder="Enter Product Finishing / Plating" autofocus value="<?= $product['Plating'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="product-description">Product Description</label>
                                            <textarea rows="5" class="form-control" id="product-description" placeholder="Enter product Description" required><?= $product['Description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="images">Service Images</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" value="<?= urlOf('assets/uploads/categories-images/' . $image['ImageName'] . '') ?>" id="images" multiple onchange="productImagesSelected();">
                                                <label class="custom-file-label" for="images">Select
                                                    images...</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-danger" onclick="clearProductImages()">Clear</span>
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div>Preview</div>
                                        <div>&nbsp;</div>
                                        <div id="img-preview-list">
                                            <img src="<?= urlOf('assets/uploads/product-images/' . $image['ImageName'] . '') ?>" class="img-preview">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="btn-submit" type="submit" class="btn btn-success">
                                    <span id="btn-submit-text">Save</span>
                                    <span id="btn-submit-text-saved" style="display: none">Saved!</span>
                                    <div id="btn-submit-spinner" class="spinner-border spinner-border-sm" role="status" style="display: none">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php
require(pathOf('admin/includes/footer-part1.php'));
require(pathOf('admin/includes/scripts.php'));
?>
<script src="<?= urlOf('admin/js/products.php.js') ?>"></script>
<?php
require(pathOf('admin/includes/footer-part2.php'));
?>