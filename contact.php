<?php
session_start();

if (!isset($_SESSION['email'])) {

    echo "<script>window.open('login.php','_self')</script>";
} else {

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
    <div class="page-heading contact-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>contact us</h4>
                        <h2>let’s get in touch</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="find-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Location on Maps</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1965.7733081404879!2d37.44286554623671!3d12.590239342893307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164328c02d6cc4b1%3A0x57e4ce60a16af1c4!2sUniversity%20of%20Gondar!5e0!3m2!1sen!2set!4v1657227959998!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="MAP"></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="left-content">
                        <h4>About Our shop</h4>
                        <p>Our Main Branch is located in the historical city of GONDAR. near to University of Gondar.Main Campus Maraki, Fassil, Teddy.. </p>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="send-message">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Send us a Message</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="accordion">
                        <li>
                            <a>How to purchase our product?</a>
                            <div class="content">
                                <p>You can Purchase our product anywhere at anytime. We are getting up our potential to address our marbelous product to the customer as much as possible compatible to our users need. costomer can use master card or debit
                                    card.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a>How do the delivery work?</a>
                            <div class="content">
                                <p>we can deliver our product in all continents and countries. with our agents.</p>
                            </div>
                        </li>
                        <li>
                            <a>Quality of our Product?</a>
                            <div class="content">
                                <p>As you know Quality is our main concern rather than Quantities. this results that our shop works 24/7 in rash hour. our quanlity of product makes our company more compitable with other shoes related companies.
                                </p>
                            </div>
                        </li>
                        <li>
                            <a>Security?</a>
                            <div class="content">
                                <p>security is our main and high concern. on this level we can provide a secure cloud on the recent cyber security Advance. </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="happy-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Our Customers</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-clients owl-carousel">
                        <div class="client-item">
                            <img src="assets/image/Contact/kisspng-africa-blank-map-5af66c54382e08.2815360315260990282301.png" alt="1">
                        </div>

                        <div class="client-item">
                            <img src="assets/image/Contact/kisspng-asia-vector-graphics-stock-photography-illustratio-indonesia-longboard-crews-5c00d571e0fbb5.3771930315435585139215.png" alt="2">
                        </div>

                        <div class="client-item">
                            <img src="assets/image/Contact/kisspng-australia-vector-graphics-map-royalty-free-image-home-ruth-taylor-5c031464d54287.5867140815437057008735.png" alt="3">
                        </div>

                        <div class="client-item">
                            <img src="assets/image/Contact/kisspng-south-america-vector-map-drawing-clip-art-africa-5ad637eee9af47.6071763715239884629572.png" alt="4">
                        </div>

                        <div class="client-item">
                            <img src="assets/image/Contact/kisspng-united-states-canada-haiti-earth-geography-of-nort-north-5afe2c9795e225.0589226815266069996139.png" alt="5">
                        </div>

                        <div class="client-item">
                            <img src="assets/image/Contact/kisspng-world-map-europe-continent-5b34797c605d09.6552681515301656283947.png" alt="6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ******************************************************* -->
    <!-- End of content -->

    <!-- footer -->
    <?php
    include('_footer.php');
    ?>
    <!-- footer -->

<?php } ?>