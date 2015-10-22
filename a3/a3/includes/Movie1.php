<script>
 $.get(
		  "http://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php",
		  {
		
		  },
		  function(data,status){
			$('#progress').html('Times for ' + $("#day").val() + ': ');
			//$('#data').html(data);
			
			var obj = $.parseJSON(data);
			$.each(obj, function(i, item) {
				console.log("MOVIE KEY IS: " + i);
				console.log("Title of movie: " + item.title);
				console.log("Description of movie: " + item.description);
				console.log("Summary of movie: " + item."summary");
				console.log("Screening information: " + item.screenings);
				
				$('#' + i + ' h4 a').html(item.title);
				$('#' + i + ' .description').html(item.description);
				$('#' + i + ' .description').html(item.description);
				$('#' + i + ' .content p').html(item.summary);
				$('#' + i + ' .image img').attr("src", item.poster);
				
				console.log("screening information here");
				$.each(item.screenings, function(key, name) {
					console.log("Day: " + key + " time: " + name);
				});
				
				console.log('-------------------');
			});
			
		  });
		  
	<div id="CH">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	
	div id="AF">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	
	div id="AC">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	
	div id="FO">
		<div class="title"></div>
		<div class="description"></div>
		<div class="summary"></div>
		<div class="poster"><img src="" /></div>
	</div>
	</script>
	