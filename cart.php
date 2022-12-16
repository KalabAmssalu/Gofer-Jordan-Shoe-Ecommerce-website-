<?php
session_start();

if (!isset($_SESSION['email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
    <!-- Head -->

    <?php
    ob_start();
    include('_head.php');
    ?>
    <!-- head -->


    <!-- Header -->
    <?php
    include('_header.php');
    ?>
    <!-- header -->


    <!-- Page Content -->
    <div class="page-heading cart-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4 style="background-color:transparent;">Cart</h4>
                        <h2>Your Preference</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>-->


    <?php

    /*  include cart items if it is not empty */
    count($product->getData('cart')) ? include('Template/_cart-template.php') :  include('Template/notFound/_cart_notFound.php');
    /*  include cart items if it is not empty */

    /*  include top sale section */
    //count($product->getData('wishlist')) ? include('Template/_wishilist_template.php') :  include('Template/notFound/_wishlist_notFound.php');
    /*  include top sale section */
    ?>


    <!-- footer -->
    <?php
    include('_footer.php');
    ?>
    <!-- footer -->
<?php } ?>