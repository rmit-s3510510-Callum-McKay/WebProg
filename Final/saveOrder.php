<?php
session_start();
// saves users contact info to session
$_SESSION["name"]  = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["phone"] = $_POST["mobile"];

$_SESSION["cart"] = array();

unset($_SESSION["total"]);
unset($_SESSION["grandtotal"]);
unset($_SESSION["voucher"]);
unset($_SESSION["vouchervalidBOOL"]);	

header("Location: orderConfirmation.php");
exit();
?>