<!-- Header -->
<?php

if (isset($_POST['logout'])) {
    session_unset();
    echo "<script>window.open('login.php','_self')</script>";
    exit();
}
?>
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="#" class="navbar-logo">
                <img src="assets/image/logo/goffer.png" alt="">
            </a>
            <a class="navbar-brand" href="index.php">
                <h2> GOFER <em> Shoe</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="stock.php">Stock</a>
                            <a class="dropdown-item" href="cart.php">Cart</a>
                            <a class="dropdown-item" href="checkout.php">Checkout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Contact Us</a>
                    </li>

                    <li class="nav-item cta cta-colored" id="cart-btn"><a href="cart.php" class="nav-link"><i class="fa fa-shopping-cart"></i></a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="customer/my_account.php?my_orders">My Account</a>
                            <form action="" method="POST">
                                <a class="dropdown-item" href="DataBase/logout.inc.php"><button name="logout" type="submit">LogOut</button></a>
                                <a class="dropdown-item" href="cart.php">Service</a>
                            </form>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- header -->