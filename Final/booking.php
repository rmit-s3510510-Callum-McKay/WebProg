  <?php session_start(); ?>
<!doctype html>
<html>
<head>
<script type="text/javascript" src="bookingform.js"></script>
<script type="text/javascript" src="bookingtransition.js"></script>
<title>Booking</title>
 <?php include "includes/StyleRef.php"; ?>
</head>
<body onload = "autoFillMovie()">
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
 <?php include "includes/Header.php"; ?>
     <!-- Navigation Bar -->
     <?php include "includes/Navbar.php"; ?>
 <!-- Navigation Bar End -->
  
  

   <script type="text/javascript" src="bookingtransition.js"></script>
  <!-- Main -->
  <div id="main">
      <!-- Weekly Schedule -->
      <div id="contact">
        <div class="block">
          
			  <div class="head">
              <h3>Bookings</h3>
          </div>
		 
          <form action = "cart.php" method = "post" id = "bookingform" onsubmit = "return validateForm()">

<table border = "10" style="width:100%"> 


	<tr>
		<td>Movie Name:
		</td>
		<td colspan = "2">
			<select id = "movie" name="movie" onload = "autoFillMovie()" onchange = "enableValidDays(this.value)" >
			<option value="AC">FANTASTIC FOUR</option>
			<option value="CH">BLINKY BILL THE MOVIE</option>
			<option value="AF">THE LOVE AFFAIR</option>
			<option value="RC">TRAINWRECK</option>
			<option selected disabled hidden value=''></option>
			</select>
		</td>
	</tr>

	<tr>
		<td>Session Day:
		</td>
		<td colspan = "2">
			<select id = "day" name="day" onchange = "enableValidTimes(this.value)">
			<option id = "MON" value="MON" disabled = "true" >Monday</option>
			<option id = "TUE" value="TUE" disabled = "true">Tuesday</option>
			<option id = "WED" value="WED" disabled = "true">Wednesday</option>
			<option id = "THU" value="THU" disabled = "true">Thursday</option>
			<option id = "FRI" value="FRI" disabled = "true">Friday</option>
			<option id = "SAT" value="SAT" disabled = "true">Saturday</option>
			<option id = "SUN" value="SUN" disabled = "true">Sunday</option>
			<option selected disabled hidden value=''></option>
			</select>
		</td>
	</tr>

	<tr>
		<td>Session Time:
		</td>
		<td colspan = "2">
			<select id = "time" name="time" onchange = "reCalculate()">
			<option id = "1200" value="1200" disabled = "true" >12:00</option>
			<option id = "1300" value="1300" disabled = "true">13:00</option>
			<option id = "1500" value="1500" disabled = "true">15:00</option>
			<option id = "1800" value="1800" disabled = "true">18:00</option>
			<option id = "2100" value="2100" disabled = "true">21:00</option>
			<option selected disabled hidden value=''></option>
			</select>
		</td>
	</tr>

	
	<tr>
		<td>Ticket Type:
		</td>
		<td>Quantity:
		</td>
		<td>Subtotal Price:
		</td>
	</tr>
	
	
	<tr>
		<td>Adult
		</td>
		<td>
			<input name = "SA" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "SAsubtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	
	<tr>
		<td>Concession
		</td>
		<td>
			<input name = "SP" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "SPsubtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	<tr>
		<td>Child
		</td>
		<td>
			<input name = "SC" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "SCsubtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	<tr>
		<td>First Class Adult
		</td>
		<td>
			<input name = "FA" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "FAsubtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	<tr>
		<td>First Class Child
		</td>
		<td>
			<input name = "FC" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "FCsubtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	<tr>
		<td>Beanbag - 1 Person
		</td>
		<td>
			<input name = "B1" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "B1subtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	<tr>
		<td>Beanbag - 2 People
		</td>
		<td>
			<input name = "B2" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "B2subtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	<tr>
		<td>Beanbag - 3 children
		</td>
		<td>
			<input name = "B3" type = "number" value = "0" min = "0" step = "1" onchange = "calculateSubtotal(this)">
		</td>
		<td>
			&#36;<input id = "B3subtotal" disabled = "true" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	<tr>
		<td colspan = "2">Total Price:
		</td>
		<td>
			&#36;<input id = "totalPrice" name = "price" type = "number" value = "0.00" readonly = "true">
		</td>
	</tr>
	
	
</table>

<input type ="submit" value = "Purchase tickets">
</form>
		  
		  
		  
		  
		  
		  
		  
		  
        </div>
      </div>
    <!-- / Weekly Schedule -->
	
	    <!-- Create Blank space -->
    <div class="empty">&nbsp;</div>
    <!-- / Create Blank space -->
	
  </div>
<!-- / Main -->

<!-- Footer -->
 <?php include "includes/Footer.php"; ?>
<!-- / Footer -->

</div>
<!-- / Page -->
</body>
</html>
