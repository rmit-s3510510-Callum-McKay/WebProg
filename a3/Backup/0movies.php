  <?php session_start(); ?>
<!doctype html>
<html>
   <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="bookingtransition.js"></script>
      <title>Movies</title>
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
            <!-- Content (New Releases)-->
            <div id="movies">
               <div class="block">
                  <div class="head">
                     <div class="head-content">
                      
                        <h3>Now Showing <br></h3>
                     </div>
                  </div>
                  <div class="films">
                     <!-- Pannel 1-->
					 <?php include "includes/Movie1.php"; ?>					 
                     <!-- Pannel 1 End-->
					 
                     <!-- Pannel 2-->
                      <?php include "includes/Movie2.php"; ?>
                     <!-- Pannel 2 End-->
					 
                     <!-- Pannel 3-->
                     <?php include "includes/Movie3.php"; ?>
                     <!-- Pannel 3 End-->
					 
                     <!-- Pannel 4-->
                    <?php include "includes/Movie4.php"; ?>
                     <!-- Pannel 4 End-->
                  </div>
               </div>
            </div>
            <div class="empty">&nbsp;</div>
            <!-- / Content -->
         </div>
		 
<!-- Footer -->
 <?php include "includes/Footer.php"; ?>
<!-- / Footer -->
      </div>
      </div>
	  
      <div class="empty">&nbsp;</div>
      <!-- / Content -->
	  
	  
   </body>
   
   <html>
