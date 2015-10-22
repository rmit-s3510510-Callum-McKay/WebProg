<?php
session_start();
?>
<!doctype html>
<html>
<head>
<title>Checkout</title>
 <?php include "includes/StyleRef.php"; ?>


</head>

<body>
<!-- Page -->
<div id="page" class="shell";>
  <!-- Header -->
    <?php include "includes/Header.php"; ?>
  <!-- / Header -->
  <!-- Main -->
  
  <div id = "main">
    <div style="text-align:center">
      <form action = "saveOrder.php" method = "POST">
        <input type = "text" name="name" pattern="[a-z A-Z ,.'-]+" required placeholder="John Smith">
        <br> <br>
        <input type = "text" name="mobile" pattern="04[0-9]{8}" required placeholder="0412345678">
        <br><br>
        <input type = "email" name="email" required placeholder="John.smith@email.com.au">
        <br><br>
        <input type = "submit" value="Submit Order">
      </form>
    </div>
  </div
    


<!-- / Main -->

<!-- Footer -->
 <?php include "includes/Footer.php"; ?>
<!-- / Footer -->
</div>
<!-- / Page -->
</body>
</html>
