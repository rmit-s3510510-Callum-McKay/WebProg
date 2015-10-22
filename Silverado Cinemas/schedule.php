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
      <!-- Weekly Schedule -->
      <div id="contact">
        <div class="block">
          
			  <div class="head">
              <h3>Weekly Schedule</h3>
          </div>
		 
          <table border="10" style="width:100%">
            <tr>
              <td> Monday - Tuesday </td>
              <td> Wednesday - Friday </td>
              <td> Saturday - Sunday </td>
            </tr>
            <tr>
              <td> 
                13:00 - Childrens <br>
                18:00 - Art / Foreign <br>
                21:00 - Romantic Comedy 
              </td>

              <td> 
                13:00 - Romantic Comedy  <br>
                18:00 - Childrens <br>
                21:00 - Action
              </td>

              <td> 
                12:00 - Childrens <br>
                15:00 - Art / Foreign <br>
                18:00 - Romantic Comedy <br>
                21:00 - Action 
              </td>
              </tr>
			  
              </table>
        </div>
      </div>
    <!-- / Weekly Schedule -->
	
	    <!-- Create Blank space -->
    <div class="empty">&nbsp;</div>
    <!-- / Create Blank space -->
	
    <!-- Price Information -->
		<div id="contact">
		        <div class="block">
		          <div class="head">
		              <h3>Price & Schedule Information</h3>
		          </div>
				 
		          <table border="10" style="width:100%">
		            <tr>
		              <td> Price List </td>
		              <td> Mon - Tue (All Day)<br>
						   Mon - Fri (1pm only)
					  </td>
		              <td> Wed - Fri (not 1pm)<br>
						   Sat - Sun (All Day)
					  </td>
		            </tr>
		            <tr>
		              <td> 
		                Standard-Full<br>
						Standard-Conc<br>
						Standard-Child<br>
						<br>
						FirstClass-Adult<br>
						FirstClass-Child<br>
						Beanbag*
		              </td>

		              <td> 
		                $12<br>
						$10<br>
						$8<br>
						<br>
						$25<br>
						$20<br>
						$20
		              </td>

		              <td> 
		                $18<br>
						$15<br>
						$12<br>
						<br>
						$30<br>
						$25<br>
						$30<br>
		              </td>
			
					  
		              </tr>
					  
		              </table>
					  <p>* Beanbag price allows up to 2 adults OR 1 adult + 1 child OR up to 3 children. One price fits all!</p>
				
		        </div>
				   <div class="empty">&nbsp;</div>
		      </div>

      <!-- / Price Information -->
  </div>
<!-- / Main -->

<!-- Footer -->
 <?php include "includes/Footer.php"; ?>
<!-- / Footer -->

</div>
<!-- / Page -->
</body>
</html>
