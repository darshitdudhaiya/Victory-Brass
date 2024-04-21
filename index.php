<?php
require './assets/includes/styles.php';
require './assets/includes/navbar.php';

$categories = select('SELECT categories.Id, categories.Name, categories.Description, categoriesimages.ImageName FROM categories INNER JOIN categoriesimages ON categoriesimages.CategoryId = categories.Id');



?>

<!-- Banner One Start -->
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                    "pagination": {
                    "el": "#main-slider-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                    "navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    },
                    "autoplay": {
                    "delay": 5000
                }}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-1.jpg);"></div>
                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider__content">
                                <h2>We Provide <span class="highlight">Quality</span> <br> Building Materials
                                </h2>
                                <p>We’ve One Mission to be the Best Industrial Company in UK.</p>
                                <a href="about.html" class="btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                <div class="main-slider__side-text">Construction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-2.jpg);">
                </div>

                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider__content">
                                <h2>We Provide <span class="highlight">Quality</span> <br> Building Materials
                                </h2>
                                <p>We’ve One Mission to be the Best Industrial Company in UK.</p>
                                <a href="about.html" class="btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                <div class="main-slider__side-text">Construction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-1-3.jpg);">
                </div>

                <div class="image-layer-overlay"></div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-slider__content">
                                <h2>We Provide <span class="highlight">Quality</span> <br> Building Materials
                                </h2>
                                <p>We’ve One Mission to be the Best Industrial Company in UK.</p>
                                <a href="about.html" class="btn-style-one">
                                    <i class="btn-curve"></i>
                                    <span class="btn-title">Discover More</span>
                                </a>
                                <div class="main-slider__side-text">Construction</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>
<!--Banner One End-->


<!--Services One Start-->
<section class="services-one">
    <div class="container">
        <div class="section-title text-center">
            <br><br>
            <span class="section-title__tagline">Services we’re offering</span>
            <h2 class="section-title__title">Industries We Serve</h2>
        </div>
        <div class="row">
            <?php foreach ($categories as $category) { ?>
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <a href="./pages/products.php?id=<?= $category['Id'] ?>">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="<?= urlOf("assets/uploads/categories-images/" . $category['ImageName'] . "") ?>" alt="">
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="./pages/products.php?id=<?= $category['Id'] ?>"><?= $category['Name'] ?></a>
                                </h3>
                                <p class="services-one__text"><?= $category['Description'] ?></p>
                                <div class="services-one__arrow">
                                    <a href="./pages/products.php?id=<?= $category['Id'] ?>"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!--Services One End-->

<!--Tabs Box One Start-->
<section class="tabs-box-one">
    <div class="container">
        <div class="tabs-box-one__main-tab-box tabs-box">
            <ul class="tab-buttons clearfix list-unstyled">
                <li data-tab="#powerful" class="tab-btn "><span>About</span></li>
                <li data-tab="#leading" class="tab-btn active-btn"><span>Vision - Mission</span></li>
                <li data-tab="#solutions" class="tab-btn"><span>Why Choose Us</span></li>
            </ul>
            <div class="tabs-content">
                <!--tab-->
                <div class="tab " id="powerful">
                    <div class="tabs-content__inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-left">
                                    <div class="tabs-content__inner-img">
                                        <img src="assets/images/resources/tabs-content-inner-img-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-right">
                                    <p class="tabs-content__inner-right-text" style="font-weight: bolder;">Royal Brass Products was established in 1989 with a mere 4,000 square feet space and limited infrastructure with fifteen semi-automatic machines. Today, the company stands on massive industrial campus of 21,000 square feet with work force of more than 60 employees producing millions of parts and extrusion rod every month ranging from 2 mm to 100 mm for using in industries like Electrical, Automobile, Medical, Telecommunication, Sanitary, Inserts and many more. </p>
                                    <ul class="list-unstyled tabs-content__inner-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-factory"></span>
                                            </div>
                                            <div class="text">
                                                <h4>We’re Building Better Products</h4>
                                                <p style="font-weight: bolder;">We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-customer-review"></span>
                                            </div>
                                            <div class="text">
                                                <h4>Effective Industrial Team Work</h4>
                                                <p style="font-weight: bolder;">We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab-->
                <div class="tab active-tab" id="leading">
                    <div class="tabs-content__inner">
                        <div class="row flex-row-reverse">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-left">
                                    <div class="tabs-content__inner-img">
                                        <img src="assets/images/resources/tabs-content-inner-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-right">
                                    <p class="tabs-content__inner-right-text" style="font-weight: bolder;">We intend to provide our customers with the best services from product development to delivery in engineering component contract manufacturing using world class technology with a smart system oriented work. We want to be an ethical organization in which our customers, suppliers, employees feel proud to be associated</p>
                                    <ul class="list-unstyled tabs-content__inner-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-factory"></span>
                                            </div>
                                            <div class="text">
                                                <h4>We’re Building Better Products</h4>
                                                <p style="font-weight: bolder;">We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-customer-review"></span>
                                            </div>
                                            <div class="text">
                                                <h4>Effective Industrial Team Work</h4>
                                                <p style="font-weight: bolder;">We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab-->
                <div class="tab " id="solutions">
                    <div class="tabs-content__inner">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-left">
                                    <div class="tabs-content__inner-img">
                                        <img src="assets/images/resources/tabs-content-inner-img-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tabs-content__inner-right">
                                    <p class="tabs-content__inner-right-text" style="font-weight: bolder;">Royal’s team of engineers and designers are capable of creating any kind of SPMs to optimize the production and quality of its product. Royal’s set up also allows the company to develop such machines in-house by the use of high performance jigs & fixtures which gives us the competitive edge and a unique capability.</p>
                                    <ul class="list-unstyled tabs-content__inner-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-factory"></span>
                                            </div>
                                            <div class="text">
                                                <h4>We’re Building Better Products</h4>
                                                <p style="font-weight: bolder;">We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-customer-review"></span>
                                            </div>
                                            <div class="text">
                                                <h4>Effective Industrial Team Work</h4>
                                                <p style="font-weight: bolder;">We understands that customer satisfaction starts with
                                                    arriving at your location on time</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<!--Tabs Box One End-->

<!--CTA One Start-->
<section class="cta-one">
    <div class="cta-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                    <div class="cta-one__title">
                        <h2>Provide You Quality Work that <br> Meets Your Expectation</h2>
                    </div>
                    <div class="cta-one__btn-box">
                        <a href="contact.html" class="btn-style-one cta-one__btn">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Discover More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->
<br><br><br>
<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Ask Any question</span>
            <h2 class="section-title__title">Feel Free to Contact</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form class="comment-one__form contact-form-validated" novalidate="novalidate" id="main-page-form">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name" class="contact-name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email" class="contact-email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone number" name="phone" class="contact-mobile">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write Message" class="contact-message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-page__btn-box">
                                    <button type="submit" class="btn-style-one comment-form__btn contact-submit-btn">
                                        <i class="btn-curve"></i>
                                        <span class="btn-title">Send a message</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->
<?php
require './assets/includes/footer.php';
require './assets/includes/scripts.php';
?>