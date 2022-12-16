<?php
//database file connection 
require 'DataBase/db.inc.php';
session_start();
?>


<!-- Head -->
<?php
include('_head.php');
?>
<!-- head -->



<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="assets/image/logo/goffer.png" alt="" width="90" height="60">
        </a>
        <h2>
            <B> GOFER <span style="color: red;">SHOE</span></B>
        </h2>
        </a>
    </div>
</nav>




<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="assets/image/Jordan Shoes/hellothere.png" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form action="DataBase/login.inc.php" method="POST">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-0 me-3">Sign in with :</p>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook  btn btn-danger btn-floating mx-1"></i></a>
                            <a href="#"><i class="fa fa-instagram btn btn-danger btn-floating mx-1"></i></a>
                            <a href="#"><i class="fa fa-twitter   btn btn-danger btn-floating mx-1"></i></a>
                            <a href="#"><i class="fa fa-pinterest btn btn-danger btn-floating mx-1"></i></a>
                        </div>

                    </div>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0">Or</p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address or username" style="background-color:rgb(238, 125, 125); color: white" name="useridentity" />
                        <label class="form-label" for="form3Example3">Email address or username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" id="form3Example4" name="user_pass" class="form-control form-control-lg" placeholder="Enter password" style="background-color:rgb(238, 125, 125); color: white" />
                        <label class="form-label" for="form3Example4">Password</label>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">

                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem; background-color: rgb(226, 43, 43);" name="login">Login</button>

                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="signup.php" class="link-danger">Create Account</a></p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-danger">

        <div class="text-white mb-3 mb-md-0">
            SUPER SECURITY
        </div>

        <!-- Right -->
        <div>
            <a href="#!" class="text-white me-4">
                <i class="fa fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
                <i class="fa fa-google"></i>
            </a>
            <a href="#!" class="text-white">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
        <!-- Right -->
    </div>
</section>

<!-- footer -->
<?php
include('_footer.php');
?>
<!-- footer -->