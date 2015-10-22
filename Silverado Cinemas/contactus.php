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
	
	

<form action = "http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method = "post" id = "contactform"><br>
<label for="email">Email: </label>
<input type = "email" name = "email" placeholder = "johnsmith@email.com" required><br><br>
<label for="subject">Subject: </label>
<select name="subject">
  <option value="general">General Enquiry</option>
  <option value="groupcorporate">Group and Corporate Bookings</option>
  <option value="suggestionscomplaints">Suggestions & Complaints</option>
</select><br>
<br>Message:<br>


<label for="message"> </label>
<textarea name = "message" form = "contactform" placeholder = "Please type your message here." cols = "100" rows = "10" required>
</textarea><br>



<br>
<input type ="submit" value = "Submit">


</form>

     	
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
