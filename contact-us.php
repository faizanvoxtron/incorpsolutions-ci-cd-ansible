<!-- Header Include -->
<?php
$pageTitle = "Contact Us | Incorp Solutions";
$pageDescription = "";
include 'include/header.php'; ?>

<!-- Banner Section Start -->
<section class="banner quick-pages-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1>Contact Us</h1>
                    <?php
                    // Check if the 'submitted' parameter in the URL is set to 1
                    if (isset($_GET['submitted']) && $_GET['submitted'] == 1) : ?>
                        <p class="th-alert">Thanks for getting in touch, your query will be answered shortly.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- About Section Start -->
<section class="about inner-about amr-about-1 contact-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 align-self-center">
                <div class="top-headings-left">
                    <h6 class="cl-iPrimary">WE CATER YOUR DIGITAL NEEDS</h6>
                    <h3>Have A Question?<br>
                        Drop Us A Message</h3>
                    <p>We are here to cater to all your advertising needs. One of our customer support executives will get in touch with you shortly.</p>
                    <h6 class="cl-iPrimary">Reach Us at:</h6>
                    <p>Put life back into your online business strategies with our ingenious digital services that clicks the right audience interest.</p>
                    <div class="bottom-links">
                        <a href="tel:+18333370930" class="btn-link"> <i class="ic-5 fa-solid fa-phone fa-beat"></i> +1 (833) 337-0930 </a>
                        <a href="mailto:legal@theincorpsolutions.com" class="btn-link"> <i class="ic-3 fa-solid fa-envelope fa-beat"></i>legal@theincorpsolutions.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form class="mt-4 form-box" id="contactForm" method="POST" action="contact-mail.php">
                        <fieldset class="header-form">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="name">Name <span>*</span></label>
                                    <input type="text" class="form-control name" placeholder="Enter Your Full Name" name="name">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="email">Email <span>*</span></label>
                                    <input type="email" class="form-control email" placeholder="Enter Your Email Address" name="email">
                                </div>
                                <div class="col-lg-12 mb-3 phone-banner banner-field-container">
                                    <label for="phonenumber">Phone <span>*</span></label>
                                    <input class="form-control phone" type="tel" name="phonenumber" id="phone-contact">
                                    <span id="valid-msg-contact" class="hide">✓ Valid</span>
                                    <span id="error-msg-contact" class="hide"></span>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="description">Message <span>*</span></label>
                                    <textarea name="description" class="form-control textarea" placeholder="Enter Your Message" rows="5"></textarea>
                                </div>
                                <div class="form-group col-lg-5">
                                    <button class="btn btn-primary submitform submit" id="submit" type="submit">Submit Now <i class="fa fa-chevron-right"></i></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Footer Include -->
<?php include 'include/footer.php'; ?>