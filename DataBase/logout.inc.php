<?php
include('db.inc.php');
include('../function/function.php');

session_start();

if (isset($_POST['logout'])) {
    session_unset();
    echo "<script>window.open('../login.php','_self')</script>";
    exit();
}
// if (isset($_SESSION['email']) && isset($_SESSION['token'])) {

//     #Store retrieved session values
//     $email = $_SESSION['email'];
//     $token = $_SESSION['token'];

//     # if email and token is set check them against the database, retrieve and store the email and token retrieved for comparison

//     $sql = "SELECT user_email, user_token from customer WHERE user_email = '$email'";
//     $run_user = mysqli_stmt_init($con);
//     if (!mysqli_stmt_prepare($run_user, $sql)) {
//         header("Location: ../index.php?error=sqlerror");
//         exit();
//     } else {
//         mysqli_stmt_execute($run_user);
//         $result = mysqli_stmt_get_result($run_user);

//         if ($row = mysqli_fetch_assoc($result)) {

//             if ($row > 0) {
//                 # store values to be compared
//                 $_server_email = $row['user_email'];
//                 $_server_token = $row['user_token'];
//             }
//         }
//     }
// }
// if (isset($_SESSION['email']) && isset($_SESSION['token'])) {
//     if ($email == $_server_email && $token == $_server_token) {
//         session_destroy();
//         session_unset();
//         echo "<script>window.open('../login.php','_self')</script>";
//     }
// }

// echo "<script>window.open('../login.php','_self')</script>";
// exit();
