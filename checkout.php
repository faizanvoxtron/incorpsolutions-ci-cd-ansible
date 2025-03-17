<!-- Header Include -->
<?php
$pageTitle = "Checkout | Incorp Solutions";
$pageDescription = "";
include 'include/header.php'; ?>

<!-- Banner Section Start -->
<section class="banner quick-pages-banner">
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-lg-12">
                <div class="banner-content">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<section class="privacy-terms checkout">
    <div class="container">
        <div class="content">
            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="privacy-policy">Privacy Policy.</a></p>
            <div class="pay">
                <h2>We Accept</h2>
                <img class="img-fluid" src="assets/images/payments-icons-new.png" />
            </div>
            <?php

            if (!empty($_SESSION['error'])) {
                echo '<p class="text-danger alert-danger"> ' . $_SESSION['error'] .
                    '</p>';
                unset($_SESSION['error']);
            }
            ?>
            <form method="post" action="form-bootstrap/payment.php" enctype="multipart/form-data">
                <input type="hidden" name="lead_id" value="<?= $_GET['lead_id'] ?>">
                <input type="hidden" id="package" name="package" value="<?= $_GET['package'] ?>">
                <input type="hidden" id="package_price" name="package_price" value="<?= $_GET['price'] ?>">
                <div class="pay-btn">
                    <button type="submit" class="theme-btn">Proceed to Payment</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Footer Include -->
<?php include 'include/footer.php'; ?>