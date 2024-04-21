<?php
$allProducts = select('SELECT * FROM Products');
?>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="<?= urlOf('assets/images/favicons/victory_logo.png') ?>" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container">
                    <div class="main-header__top-inner clearfix">
                        <div class="main-header__top-left">
                            <ul class="list-unstyled main-header__top-address">
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>03, Siddharth Shopping center near digvijay plot police station, summer club road Jamnagar</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:victorybrass@gmail.com">victorybrass@gmail.com</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-right-social">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="container clearfix">
                        <div class="main-menu-wrapper-inner clearfix">
                            <div class="main-menu-wrapper__left clearfix">
                                <div class="main-menu-wrapper__logo">
                                    <a href="<?= urlOf('') ?>"><img src="<?= urlOf('assets/images/favicons/victory_logo - Copy.png') ?>" alt="logo"></a>
                                </div>
                                <div class="main-menu-wrapper__search"><i class="fa fa-search" data-toggle="modal" data-target="#exampleModalCenter"></i></div>
                                <div class="main-menu-wrapper__main-menu">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li><a href="<?= urlOf('') ?>">Home</a></li>
                                        <li class="dropdown">
                                            <a href="<?= urlOf('pages/products.php.php') ?>">Our Products</a>
                                            <ul>
                                                <?php foreach ($allProducts as $allProduct) { ?>
                                                    <li><a href="<?= urlOf('pages/product.php-details?id=') . $allProduct['Id'] ?>"><?= $allProduct['Name'] ?></a></li>
                                                <?php  } ?>
                                            </ul>
                                        </li>
                                        <li><a href="<?= urlOf('pages/about.php') ?>">About</a></li>
                                        <li><a href="<?= urlOf('pages/contact.php') ?>">Contact</a></li>
                                        <li><a href="<?= urlOf('pages/contact.php') ?>">Broucher</a></li>
                                        <li class="desktop_serach"><a><i class="fa fa-search" data-toggle="modal" data-target="#exampleModalCenter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu-wrapper__right">
                                <div class="main-menu-wrapper__call">
                                    <div class="main-menu-wrapper__call-icon">
                                        <span class="icon-phone"></span>
                                    </div>
                                    <div class="main-menu-wrapper__call-number">
                                        <a href="tel:+91-9328119750">+91-9328119750</a><br>
                                        <a href="tel:+91-9328119750">+91-9409177062</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded-0">
                    <div class="modal-body bg-image overlay" style="background: rgba( 255, 255, 255, 0.4 ); box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ); backdrop-filter: blur( 20px );
-webkit-backdrop-filter: blur( 20px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );">
                        <div class="line px-3 to-front">
                            <div class="row align-items-center">
                                <div class="col-md-8 text-left">
                                    <h2 style="color: white;">Search Amazing Products</h2>
                                </div>
                                <div class="col text-right">
                                    <a href="#" class="close-btn" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true"><span class="icon-close2"></span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="p-4 to-front">
                            <div class="text-center">
                                <form action="<?= urlOf('pages/products.php.php') ?>" method="post" class="d-flex mb-4">
                                    <input type="text" class="form-control mr-3" placeholder="Search...." name="query" autofocus tabindex="1">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>