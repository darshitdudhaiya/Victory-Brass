<?php
require '../assets/includes/styles.php';
require '../assets/includes/navbar.php';
?>

<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?=urlOf('assets/images/backgrounds/page-header-bg.jpg')?>);">
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="<?=urlOf('')?>">Home</a></li>
                <li><span>/</span></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="section-title text-center">
            <br><br>
            <span class="section-title__tagline">Ask Any question</span>
            <h2 class="section-title__title">Feel Free to Contact</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-page__form">
                    <form class="comment-one__form contact-form-validated" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Your name" name="name" id="contact-name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email" id="contact-email">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Phone number" name="phone" id="contact-mobile">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="comment-form__input-box">
                                    <input type="text" placeholder="Subject" name="Subject" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="comment-form__input-box">
                                    <textarea name="message" placeholder="Write Message" id="contact-message"></textarea>
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

<!--Google Map Start-->
<section class="contact-page-google-map">
    <iframe onload="setMapTarget()" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14748.368011925913!2d70.05231465102082!3d22.463176702819055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39576ab818b5cea5%3A0x32a59c87d0a346d1!2sVICTORY%20BRASS%20PRODUCTS!5e0!3m2!1sen!2sin!4v1692673898579!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="contact-page-google-map__one"></iframe>
</section>
<!--Google Map End-->

<br><br>
<div class="row">
    <div class="col-xl-12">
        <div class="contact-page__btn-box">
            <button onclick="openMap()" id="map-link" type="button" class="btn-style-one comment-form__btn" 
                data-href="https://goo.gl/maps/u6mdwQFLdUsEMt8U8"
                data-apple-href="https://maps.apple.com/?ll=22.463771715612033,70.0625281693174&z=14&q=VICTORY+BRASS+PRODUCTS">
                <i class="btn-curve"></i>
                <span id="open-in-maps" class="btn-title">Open in Google Maps</span>
            </button>
        </div>
    </div>
</div>
<br><br>


<?php require '../assets/includes/footer.php';?>
<?php require '../assets/includes/scripts.php';?>
<script>
    $(".contact-submit-btn").on("click", function () {
  // $('#btn-submit').attr('disabled', '');

  // $('#btn-submit-text').hide();
  // $('#btn-submit-text-saved').hide();
  // $('#btn-submit-spinner').show();

  let formData = new FormData();
  // formData.append('class-id', $('#service').val());
  formData.append("name", $("#contact-name").val());
  formData.append("email", $("#contact-email").val());
  formData.append("message", $("#contact-message").val());
  formData.append("mobile", $("#contact-mobile").val());

  // let files = $('#images')[0].files;
  // for (let i = 0; i < files.length; i++) {
  //     formData.append('images[]', files[i]);
  // }
  $.ajax({      
    method: "POST",
    url: "../assets/ajax/contact.php",
    contentType: false,
    processData: false,
    data: formData,
    success: (response) => {
      if (response.status) {
        console.log(response);
        // $('#btn-submit-text').hide();
        // $('#btn-submit-text-saved').show();
        // $('#btn-submit-spinner').hide();

        setTimeout(() => (window.location.href = "../index.php"), 1000);
      }
    },
  });

  return false;
});
</script>