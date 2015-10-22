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
				
				$('#' + i + ' .title').html(item.title);
				$('#' + i + ' .description').html(item.description);
				$('#' + i + ' .description').html(item.description);
				$('#' + i + ' .summary').html(item.summary);
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
	
//make sure you end the script here, I saw you ended it after all the divs below which is incorrect
</script>	 

 
	<div id="CH">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	
	<div id="AF">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	
	<div id="AC">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	
	<div id="FO">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	
<!--	This is just here as an example way to lay out the info
	  
                     <div  id="FO" class="film">                  
                        <div class="image">  <a href="booking.html"><img src="Images/LOVE.jpg" alt="THE LOVE AFFAIR POSTER" onclick = "setAF()" /></a> </div>
                        <div class="content">
                           <h4><a href="booking.html" onclick = "setAF()">THE LOVE AFFAIR</a></h4>
                           <p>A married couple on the verge of annulment after the husband discovered the wife having an affair with his best-friend. He then consulted a lawyer who just broke up with his boyfriend.</p>
						   <br>             
                           <ul>
                              <li>Genre Asian Cinema, Drama, Romance</li>
                              <li>Rating M </li>
                              <li>Release Date 27 August 2015</li>
                           </ul>
						   <br>
						     <form action="http://titan.csit.rmit.edu.au/~s3510510/wp/a2/booking.html">
                             <input type="submit" value="Book Now!" onclick = "setAF()">
                           </form>
                        </div>
                     </div>
                     
-->