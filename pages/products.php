<?php
require '../assets/includes/styles.php';
require '../assets/includes/navbar.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $products = select("SELECT products.Id, products.Name, products.Description, products.Size, products.Size, products.Material, products.Threads, products.Plating, productsimages.ImageName FROM products INNER JOIN productsimages ON productsimages.ProductId = products.Id WHERE products.CategoryId = $id");
} elseif (isset($_POST['query'])) {
    $query = $_POST['query'];
    $products = select("SELECT products.Id, products.Name, products.Description, products.Size, products.Size, products.Material, products.Threads, products.Plating, productsimages.ImageName FROM products INNER JOIN productsimages ON productsimages.ProductId = products.Id WHERE products.Name LIKE '%$query%'");
} else {
    $products = select('SELECT products.Id, products.Name, products.Description, products.Size, products.Size, products.Material, products.Threads, products.Plating, productsimages.ImageName FROM products INNER JOIN productsimages ON productsimages.ProductId = products.Id');
}
?>

<!--Page Header Start-->
<section class="page-header">
    <div class="container" style="background-color: white !important;">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?= urlOf('') ?>">Home</a></li>
                <li><span>/</span></li>
                <li>Products</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Services One Start-->
<section class="services-one services-page">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <a href="./product-details.php?id=<?= $product['Id'] ?>">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="<?= urlOf('assets/uploads/product-images/' . $product["ImageName"] . '') ?>" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./product-details.php?id=<?= $product['Id'] ?>"><?= $product['Name'] ?></a>
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--Services One End-->
<?php
require '../assets/includes/footer.php';
require '../assets/includes/scripts.php';
?>