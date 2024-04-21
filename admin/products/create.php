<?php

require "../../assets/includes/init.php";
require pathOf('admin/includes/auth.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    header('Content-Type: application/json');
    $uploadedFiles = array();
    if (isset($_FILES['images'])) {

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
    $productName = $_POST['productName'];
    $productSize = $_POST['productSize'];
    $productMaterial = $_POST['productMaterial'];
    $productThreads = $_POST['productThreads'];
    $productPlating = $_POST['productPlating'];
    $productDescription = $_POST['productDescription'];
    $categoryName = $_POST['categoryName'];

    $query = "INSERT INTO `Products` (`Name`,`Size`,`Material`,`Threads`,`Plating`, `Description`,`CategoryId`) VALUES (?,?,?,?,?, ?, ?)";
    $params = [$productName,$productSize,$productMaterial,$productThreads,$productPlating, $productDescription, $categoryName];
    $inserted = execute($query, $params);

    if ($inserted) {
        $productId = lastInsertId();
        foreach ($uploadedFiles as $file) {
            execute("INSERT INTO `ProductsImages` (`ProductId`, `ImageName`) VALUES (?, ?)", [$productId, $file]);
        }
    }
    echo json_encode(["status" => true, "message" => "Services created successfully."]);
    exit();
}
$title = "Create New Product";

$query = "SELECT * FROM `categories`";
$categories = select($query);

require pathOf('admin/includes/header.php');
require pathOf('admin/includes/nav.php');
require pathOf('admin/includes/sidebar.php');

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create New Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/product') ?>">Product</a></li>
                        <li class="breadcrumb-item active">Create New</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col col-md-12">
                <form onsubmit="return createProduct();">
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
                                                <?php foreach ($categories as $category) { ?>
                                                    <option value="<?= $category["Id"] ?>"><?= $category["Name"] ?></option>
                                                <?php
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
                                            <label for="Product-name">Product Name</label>
                                            <input type="text" class="form-control" id="product-name" placeholder="Enter Product Name" autofocus required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-size">Product Size</label>
                                            <input type="text" class="form-control" id="product-size" placeholder="Enter Product Size" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-material">Product Material</label>
                                            <input type="text" class="form-control" id="product-material" placeholder="Enter Product Material" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-threads">Product Threads</label>
                                            <input type="text" class="form-control" id="product-threads" placeholder="Enter Product Threads" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-plating">Product Finishing / Plating</label>
                                            <input type="text" class="form-control" id="product-plating" placeholder="Enter Product Finishing / Plating" autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="Product-description">Product Description</label>
                                            <textarea rows="5" class="form-control" id="product-description" placeholder="Enter Product Description" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="images">Product Images</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="images" multiple onchange="productImagesSelected();">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="btn-submit" type="submit" class="btn btn-success">
                                    <span id="btn-submit-text">Create</span>
                                    <span id="btn-submit-text-saved" style="display: none">Created!</span>
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
require pathOf('admin/includes/footer-part1.php');
require pathOf('admin/includes/scripts.php');
?>
<script src="<?= urlOf('admin/js/products.php.js') ?>"></script>
<?php
require pathOf('admin/includes/footer-part2.php');
?>