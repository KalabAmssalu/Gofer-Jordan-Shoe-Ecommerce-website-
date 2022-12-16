<?php
include('db.inc.php');
include('../function/function.php');
session_start();

if (isset($_POST['login'])) {

    $user_identity = mysqli_real_escape_string($con, $_POST['useridentity']);

    $user_pass = $_POST['user_pass'];

    if (empty($user_identity) && empty($user_pass)) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Please fill all fields!
        <a href="login.php" >
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
</div>';
    } elseif (empty($user_identity)) {
        echo "Please enter your email or your username!";
    } elseif (empty($user_pass)) {
        echo "Please enter your password!";
    } else {

        // query for login 
        $get_user = 'select * From customer where user_email=? OR user_name=?;';

        $run_user = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($run_user, $get_user)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {

            mysqli_stmt_bind_param($run_user, "ss", $user_identity, $user_identity);
            mysqli_stmt_execute($run_user);
            $result = mysqli_stmt_get_result($run_user);

            if ($row = mysqli_fetch_assoc($result)) {
                $password_verified = password_verify($user_pass, $row['user_pass']);

                if ($password_verified == false) {
                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                } else if ($password_verified == true) {

                    $token = time();
                    $token = password_hash($token, PASSWORD_BCRYPT);
                    $_SESSION['email'] = $row['user_email'];
                    $_SESSION['token'] = $token;

                    $sql_com = 'update customer SET user_token="$token" WHERE user_email= "$user_identity" OR user_name="$user_identity";';
                    $updateStmt  = mysqli_query($con, $sql_com);
                    //header("Location: ../login.php?login=success");

                    echo "<script>alert('You have login successfullly')</script>";

                    echo "<script>window.open('../index.php','_self')</script>";
                    exit();
                } else {
                    header("Location: ../login.php?error=wrongPassword");
                    exit();
                }
            } else {
                header("Location: ../login.php?error=noUSER");
                exit();
            }
        }
    }
}
