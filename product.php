<?php
session_start();

if (!isset($_SESSION['email'])) {

  echo "<script>window.open('login.php','_self')</script>";
} else {

?>
  <!-- Head -->
  <?php
  include('_head.php');
  ob_start();
  ?>
  <!-- head -->


  <!-- Header -->
  <?php
  include('_header.php');
  ?>
  <!-- header -->



  <!-- Page Content -->

  <br>
  <br>
  <br>
  <hr>
  <br>
  <br>
  <br>

  <?php

  /*  include products */
  include('Template/_products.php');
  /*  include products */

  /*  include top sale section */
  include('Template/_top-sale.php');
  /*  include top sale section */

  ?>

  <!-- ******************************************************* -->
  <!-- End of content -->

  <!-- footer -->
  <?php
  include('_footer.php');
  ?>
  <!-- footer -->

<?php } ?>