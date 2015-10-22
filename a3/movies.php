
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
                    

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
 <script>
 //jquery "get" request
 $.get(
		  "http://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php",
		  {
		
		  },
		  function(data,status){
			//$('#progress').html('Times for ' + $("#day").val() + ': ');
			//$('#data').html(data);
			
			
			//this just creates the movie element from the JSON structure we've just sent a request to
			var obj = $.parseJSON(data);
			
			//item is the movie element that we get info from, i is the element number
			$.each(obj, function(i, item) {
				
				//console.log("MOVIE KEY IS: " + i);
				//console.log("Title of movie: " + item.title);
				//console.log("Description of movie: " + item.description);
				//console.log("Summary of movie: " + item.summary);
				//console.log("Screening information: " + item.screenings);
			    //console.log("trailer of movie: " + item.trailer);
				
				$('#' + i + ' .title').html(item.title);
				$('#' + i + ' .description').html(item.description);
				$('#' + i + ' .trailer').attr("src", item.trailer);
				$('#' + i + ' .summary').html(item.summary);
				$('#' + i + ' .rating img').attr("src", item.rating);
				$('#' + i + ' .poster img').attr("src", item.poster);
				
				//console.log("screening information here");
				
				/*This bit is probably not necessary since our booking form shows the available days
				$.each(item.screenings, function(key, name) {
					console.log("Day: " + key + " time: " + name);
				});
				*/
				
				//console.log('-------------------');
			});
			
		  });
	

</script>	 


 <?php include "includes/MovieCH.php"; ?>
 <?php include "includes/MovieAF.php"; ?>
 <?php include "includes/MovieAC.php"; ?>
 <?php include "includes/MovieRC.php"; ?>

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
