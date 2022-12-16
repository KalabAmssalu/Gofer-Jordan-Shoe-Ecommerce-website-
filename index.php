<?php
session_start();

if (!isset($_SESSION['email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<?php
    include('DataBase/db.inc.php');
    include('function/function.php');
?>

    <!-- Head -->
    <?php
    include('_head.php');
    ?>
    <!-- head -->


    <!-- Header -->
    <?php
    include('_header.php');
    ?>
    <!-- header -->


    <!-- Page Content -->
    <!-- ******************************************************* -->

    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            <div class="banner-item-01">
                <div class="text-content">
                    <h4></h4>
                    <h2></h2>
                </div>
            </div>
            <div class="banner-item-02">
                <div class="text-content">
                    <h4>Best Offer</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
            <div class="banner-item-03">
                <div class="text-content">
                    <h4>Best outlook</h4>
                    <h2>New Arrivals On Sale</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Ends Here -->


    <!--latest product -->
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest Products - አዲስ የገባ </h2>
                        <a href="products.php">view all products <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/image/LatestShoes/jordan1.jpg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Jordan Air 01</h4>
                            </a>
                            <h6>3000 ETB</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (24)</span>
                            <button type="submit" class="btn btn-warning font-size-12"><i class='fa fa-shopping-cart'></i> &nbsp; Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/image/LatestShoes/images_061.jpeg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Jordan Air 2022</h4>
                            </a>
                            <h6>3500 ETB</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (21)</span>
                            <button type="submit" class="btn btn-warning font-size-12"><i class='fa fa-shopping-cart'></i> &nbsp; Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/image/LatestShoes/images_244.jpeg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Michel Jordan </h4>
                            </a>
                            <h6>2700 ETB</h6>
                            <p>Sixteen Clothing is free CSS template provided by TemplateMo.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (36)</span>
                            <button type="submit" class="btn btn-warning font-size-12"><i class='fa fa-shopping-cart'></i> &nbsp; Add to cart</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/image/LatestShoes/images_102.jpeg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Air Jordan 47</h4>
                            </a>
                            <h6>4000 ETB</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (48)</span>
                            <button type="submit" class="btn btn-warning font-size-12"><i class='fa fa-shopping-cart'></i> &nbsp; Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/image/LatestShoes/images_112.jpeg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Jordan Box 23</h4>
                            </a>
                            <h6>5000 ETB</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (16)</span>
                            <button type="submit" class="btn btn-warning font-size-12"><i class='fa fa-shopping-cart'></i> &nbsp; Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-item">
                        <a href="#"><img src="assets/image/LatestShoes/images_125.jpeg" alt=""></a>
                        <div class="down-content">
                            <a href="#">
                                <h4>Jordan MIC</h4>
                            </a>
                            <h6>6900 ETB</h6>
                            <p>Lorem ipsume dolor sit amet, adipisicing elite. Itaque, corporis nulla aspernatur.</p>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                            <span>Reviews (32)</span>
                            <button type="submit" class="btn btn-warning font-size-12"><i class='fa fa-shopping-cart'></i> &nbsp; Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of latest product-->

    <!-- about Gofer -->
    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About GOFER Products</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Looking for the best products?</h4>
                        <p><a rel="nofollow" href="" target="_parent">This Website</a> is made for you Welcome to the greatest business websites. We have been suppling Original Jordan shoes for decades. You are first hand Jordan Shoes wholesale Ethiopia.
                            <a rel="nofollow" href="">Contact us</a> for more info.
                        </p>
                        <ul class="featured-list">
                            <li><a href="#">We have free delivery</a></li>
                            <li><a href="#">We have alot of jordan collection</a></li>
                            <li><a href="#">We have a wholesale all-over cities in Ethiopia</a></li>
                            <li><a href="#">Fine cost</a></li>
                            <li><a href="#">Brand new Original </a></li>
                        </ul>
                        <a href="about.php" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/image/LatestShoes/backa.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of about Gofer -->


    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="assets/image/banner/timer3.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Deal Of The Month</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> do ipsum dolor sit amet, consectetur adipisicing elit </p>
                    <div class="product-price">
                        1000.00 ETB
                        <span>/ AirJordan34</span>
                    </div>
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>40</span>
                        <p>Mins</p>
                    </div>
                    <div class="cd-item">
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="#" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->


    <!--start Purchase now banner -->
    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Jordan in <em>GOFER</em> Shop</h4>
                                <p>ምርጥ ምርጥ ብራንድ ጫማዎቸ አሉን፡፡ Do you want our product. If so PURCHASE</p>
                            </div>
                            <div class="col-md-4">
                                <a href="stock.php" class="filled-button">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- end of purchase now -->

    <?php
    /*  include top sale section */
    include('Template/_top-sale.php');
    /*  include top sale section */
    ?>



    <!-- Latest Blog Section start -->
    <div class="benefit-items">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="assets/image/logo/icon-1.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Free Shipping</h6>
                        <p>For all order over 99$</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="assets/image/logo/icon-2.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Delivery On Time</h6>
                        <p>If good have prolems</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-benefit">
                    <div class="sb-icon">
                        <img src="assets/image/logo/icon-3.png" alt="">
                    </div>
                    <div class="sb-text">
                        <h6>Secure Payment</h6>
                        <p>100% secure payment</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest Blog Section End -->
    <br>

    <!-- ******************************************************* -->
    <!-- End of content -->

    <!-- footer -->
    <?php
    include('_footer.php');
    ?>
    <!-- footer -->
<?php } ?>