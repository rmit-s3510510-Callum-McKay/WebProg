  <?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Schedule</title>
  <?php include "includes/StyleRef.php"; ?>  
</head>
<body>
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
   <?php include "includes/Header.php"; ?>

     <!-- Navigation Bar -->
   <?php include "includes/Navbar.php"; ?>
 <!-- Navigation Bar End -->


  <!-- Main -->
  <div id="main">
    
      <div id="contact">
        <div class="block">
          
			  <div class="head">
              <h3>Contact Us!</h3>
          </div>
	
	


 <?php $_SESSION  {
  "name" "Jane Smith",
  "email": "jane@smith.com",
  "phone": "04 0012 3456",
  "cart": {
    "screenings": [
       {
        "movie": "CH",
        "day": "Monday",
        "time": "1pm",
        "seats": {
          "SA": {
            "quantity": 2,
            "price": 12.00,
            "seats": ["E01", "E02"]
          },
          "B3": {
            "quantity": 1,
            "price": 20.00,
            "seats": ["B02"] 
          }
        },
        "sub-total": 44.00
      },
      {
        "movie": "AC",
        "day": "Saturday",
        "time": "9pm",
        "seats": {
          "SP": {
            "qty": 3,
            "price": 15.00,
            "seats": ["F10", "F11"] 
          },
          "B2": {
            "qty": 1,
            "price": 30.00,
            "seats": ["D02"]
          }
        },
        "sub-total": 75.00,
      }
    ]
  },
  "total": 119.00
  "voucher": "12345-67890-ZI",
  "grand-total": 95.20
}?>

	 <!-- Create Blank space -->
    <div class="empty">&nbsp;</div>
    <!-- / Create Blank space -->
	
    
  </div>
<!-- / Main -->

<!-- Footer -->
 <?php include "includes/Footer.php"; ?>
</div>

<!-- / Footer -->

</div>
<!-- / Page -->
</body>
</html>
