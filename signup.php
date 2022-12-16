<?php
session_start();
//database file connection 
require 'DataBase/db.inc.php';
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

<!-- multistep form -->
<div class="">
    <form id="msform" class="needs-validation" action="DataBase/signup.inc.php" method="POST" enctype="multipart/form-data">
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">Account Setup</li>
            <li>Social Profiles</li>
            <li>Personal Details</li>
        </ul>
        <!-- fieldsets -->
        <fieldset id="first">
            <h2 class="fs-title">Create your account</h2>
            <h3 class="fs-subtitle">This is step 1</h3>
            <input type="text" name="c_Username" placeholder="Username" required />
            <div class="form-group">
                <!-- form-group Starts -->
                <div class="input-group">
                    <!-- input-group Starts -->
                    <span class="input-group-addon">
                        <!-- input-group-addon Starts -->
                        <i class="fa fa-check tick1"> </i>
                        <i class="fa fa-times cross1"> </i>
                    </span><!-- input-group-addon Ends -->
                    <input type="password" class="form-control" placeholder="Password" id="pass" name="c_pass" required>
                    <span class="input-group-addon">
                        <!-- input-group-addon Starts -->
                        <div id="meter_wrapper">
                            <!-- meter_wrapper Starts -->
                            <span id="pass_type"> </span>
                            <div id="meter"> </div>
                        </div><!-- meter_wrapper Ends -->
                    </span><!-- input-group-addon Ends -->
                </div><!-- input-group Ends -->
            </div><!-- form-group Ends -->

            <div class="form-group">
                <!-- form-group Starts -->
                <div class="input-group">
                    <!-- input-group Starts -->
                    <span class="input-group-addon">
                        <!-- input-group-addon Starts -->
                        <i class="fa fa-check tick2"> </i>
                        <i class="fa fa-times cross2"> </i>
                    </span><!-- input-group-addon Ends -->
                    <input type="password" class="form-control confirm" placeholder="Confirm Password" id="con_pass" required style="margin-bottom: 10px;">
                </div><!-- input-group Ends -->
            </div><!-- form-group Ends -->
            <input type="text" name="c_email" placeholder="Email" />
            <a href="login.php"> <input type="button" name="action-button" class="" value="I have an account" />
            </a>
            <button name="next" type="submit" class="next btn btn-warning action-bution">&nbsp;Next&nbsp;</button>
            <!--  <input type="button" name="next" class="next action-button" value="Next" /> -->
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Social Profiles</h2>
            <h3 class="fs-subtitle">Your presence on the social network</h3>
            <input type="text" name="c_twitter" placeholder="Twitter" required />
            <input type="text" name="c_facebook" placeholder="Facebook" required />
            <input type="text" name="c_instagram" placeholder="Instagram" required />
            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <button name="next" type="button" class="next btn btn-warning action-bution">&nbsp;Next&nbsp;</button>
            <!-- <input type="button" name="next" class="next action-button" value="Next" />-->
        </fieldset>
        <fieldset>
            <h2 class="fs-title">Personal Details</h2>
            <h3 class="fs-subtitle">We will never sell it</h3>
            <input type="text" name="c_fname" placeholder="First Name" required />
            <input type="text" name="c_lname" placeholder="Last Name" required />
            <input type="text" name="c_phone" placeholder="Phone" required />
            <input type="text" name="c_Pbox" placeholder="Po-Box" required />
            <textarea name="c_address" placeholder="Address" required></textarea>
            <label>Insert You Image</label>
            <input type="file" class="btn mb-1 btn-outline-danger" name="c_image" placeholder="Your image" required>

            <input type="button" name="previous" class="previous action-button" value="Previous" />
            <!--<input type="button" name="register" class="action-button" value="Submit" />-->
            <button name="register" type="submit" class="btn btn-success action-bution">submit</button>
            <!-- <input type="button" name="submit" class="submit action-button" value="Submit" />-->
        </fieldset>
        <!-- <button name="register" type="submit" class="action-bution">submit</button>-->
    </form>
</div>
<br>
<hr>

<script>
    (function() {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener(
                "next",
                function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>

<!-- Js Plugins -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/jquery.zoom.min.js"></script>
<script src="assets/js/jquery.dd.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/main.js"></script>


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>

<script>
    $(document).ready(function() {

        $('.tick1').hide();
        $('.cross1').hide();

        $('.tick2').hide();
        $('.cross2').hide();


        $('.confirm').focusout(function() {

            var password = $('#pass').val();

            var confirmPassword = $('#con_pass').val();

            if (password == confirmPassword) {

                $('.tick1').show();
                $('.cross1').hide();

                $('.tick2').show();
                $('.cross2').hide();



            } else {

                $('.tick1').hide();
                $('.cross1').show();

                $('.tick2').hide();
                $('.cross2').show();


            }


        });


    });
</script>

<script>
    $(document).ready(function() {

        $("#pass").keyup(function() {

            check_pass();

        });

    });

    function check_pass() {
        var val = document.getElementById("pass").value;
        var meter = document.getElementById("meter");
        var no = 0;
        if (val != "") {
            // If the password length is less than or equal to 6
            if (val.length <= 6) no = 1;

            // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
            if (val.length > 6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))) no = 2;

            // If the password length is greater than 6 and contain alphabet,number,special character respectively
            if (val.length > 6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))) no = 3;

            // If the password length is greater than 6 and must contain alphabets,numbers and special characters
            if (val.length > 6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) no = 4;

            if (no == 1) {
                $("#meter").animate({
                    width: '20px'
                }, 300);
                meter.style.backgroundColor = "red";
                document.getElementById("pass_type").innerHTML = "Very Weak";
            }

            if (no == 2) {
                $("#meter").animate({
                    width: '50px'
                }, 300);
                meter.style.backgroundColor = "#F5BCA9";
                document.getElementById("pass_type").innerHTML = "Weak";
            }

            if (no == 3) {
                $("#meter").animate({
                    width: '80px'
                }, 300);
                meter.style.backgroundColor = "#FF8000";
                document.getElementById("pass_type").innerHTML = "Good";
            }

            if (no == 4) {
                $("#meter").animate({
                    width: '98px'
                }, 300);
                meter.style.backgroundColor = "#2b7a1d";
                document.getElementById("pass_type").innerHTML = "Strong";
            }
        } else {
            meter.style.backgroundColor = "";
            document.getElementById("pass_type").innerHTML = "";
        }
    }
</script>





<!-- container-scroller -->
<!-- base:js -->
<script src="../../vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- inject:js -->
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/template.js"></script>
<!-- endinject -->



</body>

</html>