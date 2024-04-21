<?php
require '../assets/includes/styles.php';
require '../assets/includes/navbar.php';
?>

<!--Page Header Start-->
<section class="page-header" >
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?=urlOf('')?>">Home</a></li>
                <li><span>/</span></li>
                <li>About</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--About Page Start-->
<section class="about-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-page__images-box">
                    <ul class="list-unstyled about-page__img-list">
                        <li>
                            <div class="about-page__img">
                                <img src="<?= urlOf('assets/images/resources/about-page-img-1.jpg') ?>" alt="">
                            </div>
                        </li>
                        <li>
                            <div class="about-page__img">
                                <img src="<?= urlOf('assets/images/resources/about-page-img-2.jpg') ?>" alt="">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-page__right">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Complete work list</span>
                        <h2 class="section-title__title">We Build Effective Top Buildings</h2>
                    </div>
                    <p class="about-page__right-text">The majority have suffered alteration in some form humour
                        or words which don't look even believable.</p>
                    <ul class="list-unstyled about-page__points">
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <h3>Best Construction Quality</h3>
                                <p>Lorem minim veniam, quisq wiusmod ut tempor incididunt ut labore et dolore
                                    sed do magna aliqua location on time.</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-tick"></span>
                            </div>
                            <div class="text">
                                <h3>High Standards of Constructions</h3>
                                <p>Lorem minim veniam, quisq wiusmod ut tempor incididunt ut labore et dolore
                                    sed do magna aliqua location on time.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Page End-->

<!--Have Questions Start-->
<section class="have-questions about-page-have-questions">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="have-questions__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">Frequently asked questions</span>
                        <h2 class="section-title__title">Have Any Questions?</h2>
                    </div>
                    <ul class="have-questions__list list-unstyled">
                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <div class="text">
                                <p>Making this the first true generator on the Internet</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <div class="text">
                                <p>If you are going to use a passage</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-check"></span>
                            </div>
                            <div class="text">
                                <p>Lorem Ipsum is not simply random text</p>
                            </div>
                        </li>
                    </ul>
                    <div class="have-questions__img">
                        <img src="<?= urlOf('assets/images/resources/have-questions-img.jpg') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="have-questions__right">
                    <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>Company Provides a Full Range of Services?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                        ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                        adipisi cing elit.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Home Improvement Works are Expensive?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                        ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                        adipisi cing elit.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Taking Seamless Key Performance Indicators?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                        ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                        adipisi cing elit.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion last-chiled">
                            <div class="accrodion-title">
                                <h4>Minning Construction Project Program</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Suspendisse finibus urna mauris, vitae consequat quam vel. Vestibulum leo
                                        ligula, vitae commodo nisl. Lorem ipsum dolor sit amet, consectetur
                                        adipisi cing elit.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Have Questions End-->
<br><br>


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

<!--CTA One Start-->
<section class="cta-one">
    <div class="cta-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(<?= urlOf('assets/images/backgrounds/cta-one-bg.jpg') ?>)"></div>
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
<?php
require '../assets/includes/footer.php';
require '../assets/includes/scripts.php';
?>