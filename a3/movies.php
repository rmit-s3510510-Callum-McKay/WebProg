
 <?php session_start(); ?>
<!doctype html>
<html>
   <head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="bookingtransition.js"></script>
	  <script type="text/javascript"
    src="http://viralpatel.net/blogs/demo/jquery/jquery.shorten.1.0.js"></script>

	  
	  <script> 
	  /*
 * jQuery Shorten plugin 1.0.0
 *
 * Copyright (c) 2013 Viral Patel
 * http://viralpatel.net
 *
 * Dual licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */
 
 (function($) {
    $.fn.shorten = function (settings) {
     
        var config = {
            showChars: 100,
            ellipsesText: "...",
            moreText: "more",
            lessText: "less"
        };
 
        if (settings) {
            $.extend(config, settings);
        }
         
        $(document).off("click", '.morelink');
         
        $(document).on({click: function () {
 
                var $this = $(this);
                if ($this.hasClass('less')) {
                    $this.removeClass('less');
                    $this.html(config.moreText);
                } else {
                    $this.addClass('less');
                    $this.html(config.lessText);
                }
                $this.parent().prev().toggle();
                $this.prev().toggle();
                return false;
            }
        }, '.morelink');
 
        return this.each(function () {
            var $this = $(this);
            if($this.hasClass("shortened")) return;
             
            $this.addClass("shortened");
            var content = $this.html();
            if (content.length > config.showChars) {
                var c = content.substr(0, config.showChars);
                var h = content.substr(config.showChars, content.length - config.showChars);
                var html = c + '<span class="moreellipses">' + config.ellipsesText + ' </span><span class="morecontent"><span>' + h + '</span> <a href="#" class="morelink">' + config.moreText + '</a></span>';
                $this.html(html);
                $(".morecontent span").hide();
            }
        });
         
    };
 
 })(jQuery);
	  </script>
	  
	  
	  
	  
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
<div class="film">
 
	<div id="CH">
        <div class="image">
		<div class="poster"><img src="" /></div> 
		<br>
		<div class="rating"><img src="" /></div>
		</div>
		<div class="content">
	<h4><div class="title"></div></h4>

		<div class="summary"></div>
		<br>
		
		<div class="description"></div>
		<script type="text/javascript">
    $(document).ready(function() {
     
        $(".comment").shorten();
     
    });
</script>
		<div class="trailer"><video src="" controls=""></video></div>
	
	</div>
	</div>
	</div> 
	
	
	<div class="film">
 
	<div id="AF">
      <div class="image">
		<div class="poster"><img src="" /></div> 
		<br>
		<div class="rating"><img src="" /></div>
		</div>
		<div class="content">
	<h4><div class="title"></div></h4>

		<div class="summary"></div>
		<br>
		<div class="description"></div>
		<div class="trailer"><video src="" controls=""></video></div>
	
	</div>
	</div>
	</div> 
	
	<div class="film">
 
	<div id="AC">
       <div class="image">
		<div class="poster"><img src="" /></div> 
		<br>
		<div class="rating"><img src="" /></div>
		</div>
		<div class="content">
	<h4><div class="title"></div></h4>

		<div class="summary"></div>
		<br>
		<div class="description"></div>
		<div class="trailer"><video src="" controls=""></video></div>
	
	</div>
	</div>
	</div> 
	
	<div class="film">
 
	<div id="RC">
      <div class="image">
		<div class="poster"><img src="" /></div> 
		<br>
		<div class="rating"><img src="" /></div>
		</div>
		<div class="content">
	<h4><div class="title"></div></h4>

		<div class="summary"></div>
		<br>
		<div class="description"></div>
		<div class="trailer"><video src="" controls=""></video></div>
	
	</div>
	</div>
	</div> 
		
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