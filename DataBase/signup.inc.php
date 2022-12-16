<?php
include('db.inc.php');
include('../function/function.php');


if (isset($_POST['register'])) {
    echo " submission page";
    $remoteip = $_SERVER['REMOTE_ADDR'];

    // $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");

    // $result = json_decode($url, TRUE);

    //if ($result['success'] == 0) {

    //to protect our database from SQLINGECTION
    $c_Username = mysqli_real_escape_string($con, $_POST['c_Username']);
    $c_fname = mysqli_real_escape_string($con, $_POST['c_fname']);
    $c_lname = mysqli_real_escape_string($con, $_POST['c_lname']);
    $c_pass = mysqli_real_escape_string($con, $_POST['c_pass']);
    $c_email = mysqli_real_escape_string($con, $_POST['c_email']);
    $c_phone = mysqli_real_escape_string($con, $_POST['c_phone']);
    $c_Pbox = mysqli_real_escape_string($con, $_POST['c_Pbox']);
    $c_twitter = mysqli_real_escape_string($con, $_POST['c_twitter']);
    $c_facebook = mysqli_real_escape_string($con, $_POST['c_facebook']);
    $c_instagram = mysqli_real_escape_string($con, $_POST['c_instagram']);
    $c_address = mysqli_real_escape_string($con, $_POST['c_address']);
    $c_image = mysqli_real_escape_string($con, $_FILES['c_image']['name']);
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    $c_ip = getRealUserIp();
    //move_uploaded_file($c_image_tmp, "assets/image/$c_image");

    $c_type = "user";

    //hash the password to protect it and make it unreadable **************************
    $hashed_password = password_hash($c_pass, PASSWORD_DEFAULT);

    //checking if there is empty sumission
    if (empty($name) && empty($email) && empty($password) && empty($address)) {
        echo "Please fill all fields!";
    } elseif (empty($c_fname || $c_lname)) {
        echo "Please enter your name!";
    } elseif (empty($c_email)) {
        echo "Please enter an email!";
    } elseif (empty($c_password)) {
        echo "Please enter password!";
    } elseif (empty($c_address)) {
        echo "Please enter address!";
    }

    // checking if the email address is exit in the database 
    $get_email = "select * from customer where user_email='$c_email'";

    $run_email = mysqli_query($con, $get_email);

    $check_email = mysqli_num_rows($run_email);

    if ($check_email == 1) {

        echo "<script>alert('This email is already registered, try another one')</script>";

        exit();
    }


    # Generate a unique token
    $c_token = time();
    $c_token = password_hash($c_token, PASSWORD_BCRYPT);



    //         $customer_confirm_code = mt_rand();

    //         $subject = "Email Confirmation Message";

    //         $from = "GOFER@gmail.com";

    //         $message = "

    // <h2>
    // Email Confirmation By GOFER Shoe Shopping Website $c_name
    // </h2>

    // <a href='localhost/ጎፈር_Jordan_Shoe_hopping_Project/customer/my_account.php?$customer_confirm_code'>

    // Click Here To Confirm Email

    // </a>

    // ";

    //         $headers = "From: $from \r\n";

    //         $headers .= "Content-type: text/html\r\n";

    //         mail($c_email, $subject, $message, $headers);


    $insert_customer = "insert into customer (user_name, user_Fname, user_lname, user_pass, user_email, user_phone, user_Twitter, user_facebook, user_Instagram, user_Pbox, user_Address, user_Img, user_ip, user_type, user_token)
         values ('$c_Username','$c_fname', '$c_lname', '$hashed_password','$c_email','$c_phone','$c_twitter','$c_facebook','$c_instagram','$c_Pbox','$c_address','$c_image','$c_ip','$c_type','$c_token')";


    $run_customer = mysqli_query($con, $insert_customer);

    $sel_cart = "select * from cart";

    $run_cart = mysqli_query($con, $sel_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if ($check_cart > 0) {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('You have been Registered Successfully')</script>";

        echo "<script>window.open('../login.php','_self')</script>";
    } else {

        $_SESSION['customer_email'] = $c_email;

        echo "<script>alert('You have been Registered Successfully')</script>";

        echo "<script>window.open('../index.php','_self')</script>";
    }
    // } else {

    //     echo "<script>alert('Please Try Again')</script>";
    // }
}
