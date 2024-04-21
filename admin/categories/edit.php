<?php

require("../../assets/includes/init.php");
require(pathOf('admin/includes/auth.php'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $categoryName = $_POST['categoryName'];
    $categoryDescription = $_POST['categoryDescription'];
    $uploadedFiles = array();
    if (isset($_FILES['images'])) {

        $imageName = selectOne("SELECT * FROM `categoriesimages` WHERE `CategoryId` = ?", [$id]);
        $imagesDeleteFromFolder = unlink(pathOf('assets/uploads/categories-images/' . $imageName['ImageName'] . ''));
        $time = time();
        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {
            $tmpFileName = $_FILES['images']['tmp_name'][$i];
            $fileName = "$time-" . $_FILES['images']['name'][$i];

            $fileUploaded = move_uploaded_file($tmpFileName, pathOf("assets/uploads/categories-images/$fileName"));
            if (!$fileUploaded) {
                echo json_encode(["status" => false, "message" => "Error uploading image(s)."]);
                exit();
            }

            array_push($uploadedFiles, $fileName);
        }
    }
    $query = "UPDATE `Categories` SET `Name` = ?, `Description` = ? WHERE `Id` = ?";
    $params = [$categoryName, $categoryDescription, $id];

    $edited = execute($query, $params);
    if ($edited) {
        $categoryId = $_POST['id'];
        foreach ($uploadedFiles as $file) {
            execute("UPDATE `CategoriesImages` SET `ImageName` =  ? WHERE `CategoryId` = ?", [$file, $categoryId]);
        }
    }
    header('Content-Type: application/json');
    echo json_encode(["status" => true, "message" => "Category edited successfully."]);

    exit();
} elseif (!isset($_GET['id'])) {
    header('Location: ' . urlOf('admin/categories'));
    exit();
}

$title = "Edit Category";

$id = $_GET['id'];
$query = "SELECT * FROM `categories` WHERE `Id` = ?";
$queryForImage = "SELECT * FROM `categoriesimages` WHERE `CategoryId` = ?";
$category = selectOne($query, [$id]);
$image = selectOne($queryForImage, [$id]);


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
                    <h1>Edit Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= urlOf('admin/categories') ?>">Categories</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col col-md-12">
                <form onsubmit="return editCategory(<?= $id ?>);">
                    <div class="card card-outline card-info">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="category-name">Category Name</label>
                                            <input type="text" class="form-control" id="category-name" placeholder="Enter Category Name" autofocus required value="<?= $category['Name'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label for="category-description">Category Description</label>
                                            <textarea rows="5" class="form-control" id="category-description" placeholder="Enter Category Description" required><?= $category['Description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="images">Category Images</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" value="<?= urlOf('assets/uploads/categories-images/' . $image['ImageName'] . '') ?>" id="images" multiple onchange="categoryImagesSelected();">
                                                <label class="custom-file-label" for="images">Select
                                                    images...</label>
                                            </div>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-outline-danger" onclick="clearCategoryImages()">Clear</span>
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div>Preview</div>
                                        <div>&nbsp;</div>
                                        <div id="img-preview-list">
                                            <img src="<?= urlOf('assets/uploads/categories-images/' . $image['ImageName'] . '') ?>" class="img-preview">
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
<script src="<?= urlOf('admin/js/category.js') ?>"></script>
<?php
require(pathOf('admin/includes/footer-part2.php'));
?>