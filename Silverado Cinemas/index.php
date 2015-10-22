  <?php session_start(); ?>
<!doctype html>
<html>
<head>
  <?php include "includes/StyleRef.php"; ?>  
   <title>SILVERADO CINEMA</title>
</head>

<body>

<!-- Page -->
<div id="page" class="shell">
  
 <?php include "includes/Header.php"; ?>
 <?php include "includes/Navbar.php"; ?>


  <!-- Main -->
  <div id="main">
      <!-- Content (Coming Soon)-->
      <div id="content">
        <div class="block">
          <div class="head">
            <div class="head-content"> <a href="movies.php" </a>
              <h3>Coming Soon <br></h3>
            </div>
          </div>
          <div class="articles">
		  
		  
		  <!-- Pannel 1-->
          <?php include "includes/NewMovie1.php"; ?>
			<!-- Pannel 1 End-->
			
			
			 <!-- Pannel 2-->
       <?php include "includes/NewMovie2.php"; ?>
			<!-- Pannel 2 End-->
			
			
			
			<!-- Pannel 3-->
            <?php include "includes/NewMovie3.php"; ?>
			<!-- Pannel 3 End-->
          </div>
        </div>
      </div>
    <!-- / Content -->
 
 

 
   <!-- Sidebar (Announcements) -->
    <div id="sidebar">
      <div class="block">
          <div class="head">
            <div class="head-content">
              <h3>Announcements</h3>
			  </div>
			  
		            <div class="content">
					<br>
             		<b>Dear fellow movie patrons,<br>	<br>	</b>
					We, at <b>Silverado Cinema</b>, are glad to announce the unveiling of our remodelled movie theatres! 
					Now with brand new leather seats and new 3D projection screenings, no longer will you be forced to travel 
					into the city to enjoy the highest quality movie experience. 
					Along with our new <i>"Dolby Sound system"</i> We here at <b>Silverado Cinema</b> have done our best to bring you the best, 
					in experience and comfort.  <br>
					<br>
					Below you will find an image displaying the new seating arrangements for the cinema. 
					<br>
					<br>
					<div class="article">
                      <div class="image"> <a href="#"><img src="Images/Layout.jpg" alt="Layout of new theatres" /></a> </div>
					  
					
					
				      </div><!--content End-->
		            </div><!-- Head End -->
		    </div><!-- block End -->
	        </div> <!-- Side Bar End -->
    </div> <!-- Main End -->
        
		  <div class="empty">&nbsp;</div> <!-- Creates black page fill -->
    
	 
 <?php include "includes/Footer.php"; ?>
 
</html>
