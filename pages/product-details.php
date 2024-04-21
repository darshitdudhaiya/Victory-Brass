<?php
require '../assets/includes/styles.php';
require '../assets/includes/navbar.php';

if (isset($_GET['id'])) {
    $id = $_GET["id"];
    $productsDetails = selectOne("SELECT products.Name, products.Description, products.Size, products.Size, products.Material, products.Threads, products.Plating, productsimages.ImageName FROM products INNER JOIN productsimages ON productsimages.ProductId = products.Id WHERE products.Id = $id");
}

$randomProducts = select("SELECT products.Id, products.Name, products.Description, products.Size, products.Size, products.Material, products.Threads, products.Plating, productsimages.ImageName FROM products INNER JOIN productsimages ON productsimages.ProductId = products.Id ORDER BY RAND()
LIMIT 3");

?>

<!--Page Header Start-->
<section class="page-header">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?=urlOf('')?>">Home</a></li>
                <li><span>/</span></li>
                <li>Product Details</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Project Details Start-->
<section class="project-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="project-details__left">
                    <div class="project-details__img-box">
                        <div class="project-details__img">
                            <img src="<?= urlOf('assets/uploads/product-images/' . $productsDetails['ImageName'] . '') ?>" alt="" style="border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="project-details__right">
                    <h3 class="project-details__title"><?= $productsDetails['Name'] ?></h3>
                    <p class="project-details__text"><?= $productsDetails['Description'] ?></p>
                    <div class="project-details__info">
                        <div class="project-details__info-single">
                            <h5 class="project-details__info-client">Size:</h5>
                            <p class="project-details__info-name"><?= $productsDetails['Size'] ?></p>
                        </div>
                        <div class="project-details__info-single">
                            <h5 class="project-details__info-client">Threads:</h5>
                            <p class="project-details__info-name"><?= $productsDetails['Threads'] ?></p>
                        </div>
                        <div class="project-details__info-single">
                            <h5 class="project-details__info-client">Plating:</h5>
                            <p class="project-details__info-name"><?= $productsDetails['Plating'] ?></p>
                        </div>
                        <div class="project-details__info-single">
                            <h5 class="project-details__info-client">Material:</h5>
                            <p class="project-details__info-name"><?= $productsDetails['Material'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project Details End-->

<!--Similar Work Start-->
<section class="similar-work">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Checkout more work</span>
            <h2 class="section-title__title">Our Similar Work</h2>
        </div>
        <div class="row">
            <?php foreach ($randomProducts as $randomProduct) { ?>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="project-one__single">
                        <div class="project-one__img">
                            <img src="<?= urlOf('assets/uploads/product-images/' . $randomProduct['ImageName'] . '') ?>" alt="" style="border-radius: 10px;">
                            <div class="project-one__content">
                                <h3 class="project-one__tilte"><a href="./product-details.php?id=<?= $randomProduct['Id'] ?>"><?= $randomProduct['Name'] ?></a></h3>
                                <div class="project-one__arrow">
                                    <a href="./product-details.php?id=<?= $randomProduct['Id'] ?>"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--Similar Work End-->

<?php
require '../assets/includes/footer.php';
require '../assets/includes/scripts.php';
?>