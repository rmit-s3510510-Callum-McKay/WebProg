  <?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Cart</title>
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
              <h3>Cart</h3>
          </div>
	
	
<?php

//echo count($_POST);

if(count($_POST) != 1)
{
$movie = $_POST["movie"];
$day = $_POST["day"];
$time = $_POST["time"];

$discountBOOL = false;
if($day == "MON" || $day == "TUE" || (($day == "WED" || $day == "THU" || $day == "FRI") &&  $time == "1300"))
{
	$discountBOOL = true;
}

//initialise cart
$_SESSION["cart"]["screenings"][] = array(
  //  "screenings" => array (
        "movie" => $movie,
        "day" => $day,
        "time" => $time,
        "seats" => array(
          "SA" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["E01", "E02"]
          ),
          "SP" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["B02"] 
          ),
		  "SC" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["B02"] 
          ),
		  "FA" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["B02"] 
          ),
		  "FC" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["B02"] 
          ),
		  "B1" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["B02"] 
          ),
		  "B2" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["B02"] 
          ),
		  "B3" => array(
            "quantity" => 0,
            "price" => 0.00,
            "seats"//: ["B02"] 
          )
        ),
        "subtotal" => 0.00
   // )
);
$_SESSION["total"] = 0.00;
$_SESSION["grandtotal"] = 0.00;
//$_SESSION["voucher"] = "";
$_SESSION["vouchervalidBOOL"] = FALSE;


$numScreenings = count($_SESSION["cart"]["screenings"]);
$subtotal = 0;

foreach ($_SESSION["cart"]["screenings"][$numScreenings - 1]["seats"] as $key => &$value)
{
	$quantity = $_POST[$key];
	$ticketPrice = getTicketPrice($key, $discountBOOL);
	
	
	$value["quantity"] = $quantity; //might need to change this to work without pointers (EDIT: fixed the issue)
	
	$_SESSION["cart"]["screenings"][$numScreenings - 1]["seats"][$key]["price"] = $ticketPrice;
	
	$subtotal += ($quantity * $ticketPrice);
	unset($value);
}

$_SESSION["cart"]["screenings"][$numScreenings - 1]["subtotal"] = $subtotal;



}//end if
else
{
	$voucherCode = $_POST['voucherCode'];

	$_SESSION["voucher"] = $voucherCode;

	$voucherArray = explode ('-', $voucherCode);

	$digOne = $voucherArray[0][0];
	$digTwo = $voucherArray[0][1];
	$digThree = $voucherArray[0][2];
	$digFour = $voucherArray[0][3];
	$digFive = $voucherArray[0][4];

	$digSix = $voucherArray[1][0];
	$digSeven = $voucherArray[1][1];
	$digEight = $voucherArray[1][2];
	$digNine = $voucherArray[1][3];
	$digTen = $voucherArray[1][4];

	$charOne = $voucherArray[2][0];
	$charTwo = $voucherArray[2][1];


	$expectedCharOne = chr(65 + (($digOne * $digTwo + $digThree) * $digFour + $digFive) % 26);
	$expectedCharTwo = chr(65 + (($digSix * $digSeven + $digEight) * $digNine + $digTen) % 26);

	if($charOne == $expectedCharOne && $charTwo == $expectedCharTwo)
	{
		$_SESSION["vouchervalidBOOL"] = TRUE;
	}
	else 
	{
		$_SESSION["vouchervalidBOOL"] = FALSE;
	}
}




$total = 0;
foreach ($_SESSION["cart"]["screenings"] as $key => $value)
{
	$total += $value["subtotal"];
}
$_SESSION["total"] = $total;


//end back-end set up
//start generating html

echo "<div id = 'cart' align='middle'>";

foreach($_SESSION["cart"]["screenings"] as $key => $value)
{
	echo "<div id = " . $key . "><p>";
	
	$localmovie = $value["movie"];
	$localday = $value["day"];
	$localtime = $value["time"];
	
	switch($localmovie)
	{
		case "CH":
		{
			echo "<b>Inside Out (G)</b><br>";
			break;
		}
		case "AF":
		{
			echo "<b>Girlhood (MA)</b><br>";
			break;
		}
		case "AC":
		{
			echo "<b>Mission Impossible - Rogue Nation (M)</b><br>";
			break;
		}
		case "RC":
		{
			echo "<b>Train Wreck (R)</b><br>";
			break;
		}
	}
	
	
	
	echo "Showing at " . $localtime / 100 . ":00 " . $localday . "<br>";
	
	
	echo "<table border = '1' >"; 
	echo "<tr>
			<td>Ticket Type:
			</td>
			<td>Ticket Price:
			</td>
			<td>Quantity:
			</td>
			<td>Subtotal Price:
			</td>
		</tr>
		";
	
	
	foreach($_SESSION["cart"]["screenings"][$key]["seats"] as $i => $x)
	{
		if($x["quantity"] != 0)
		{
			echo "<tr>
				<td>" . $i .
				"</td>
				<td>$" . number_format((float)$x["price"], 2, '.', '') .
				"</td>
				<td>" . $x["quantity"] .
				"</td>
				<td>$" . number_format((float)$x["price"] * $x["quantity"], 2, '.', '') .
				"</td>
			</tr>
			";
		}
	}

	echo "<tr>
		<td colspan = 4>" . "Subtotal: $" . $value["subtotal"] . ".00" .
		"</tr>
		</td>";
	
	echo "</table>";
	
	echo "</p></div><br>";
}

echo "</div>";

//empties post so we can refresh/self post safely
$_POST = array();


if($_SESSION["vouchervalidBOOL"] == TRUE)
{
	$_SESSION["grandtotal"] = $_SESSION["total"]*0.8;

}
else
{
	$_SESSION["grandtotal"] = $_SESSION["total"];
}


echo "Total: $" . number_format((float)$total, 2, '.', '') . "<br>";
echo "Grand Total: $" . number_format((float)$_SESSION["grandtotal"], 2, '.', '') . "<br>";

if($_SESSION["vouchervalidBOOL"] == TRUE)
{
	echo "<font color = 'green'>VOUCHER ACCEPTED</font>";
}
else if($_SESSION["vouchervalidBOOL"] == FALSE && count($_POST) == 1)
{
	echo "<font color = 'red'>INVALID VOUCHER</font>";
}
else 
{
echo "<form action='cart.php' method = 'post'>
Voucher code: <input type='text' name='voucherCode' pattern='\d{5}-\d{5}-[A-Z]{2}' placeholder = '12345-67890-AZ' title='Invalid voucher format'>
<input type='submit' value='Submit Voucher'>
</form>"; 
}


?>

<br>
<a href="getDetails.php">CONTINUE</a>





























<?php
function getTicketPrice($ticketType, $discountBOOL)
{
	$ticketPrice = 0.00;
	
	switch($ticketType)
	{
		case 'SA':
		{
			if($discountBOOL)
			{
				$ticketPrice = 12.00;
			}
			else
			{
				$ticketPrice = 18.00;
			}
			
			break;
		}
		
		case 'SP':
		{
			if($discountBOOL)
			{
				$ticketPrice = 10.00;
			}
			else
			{
				$ticketPrice = 15.00;
			}
			
			break;
		}
		
		case 'SC':
		{
			if($discountBOOL)
			{
				$ticketPrice = 8.00;
			}
			else
			{
				$ticketPrice = 12.00;
			}
			
			break;
		}
		
		case 'FA':
		{
			if($discountBOOL)
			{
				$ticketPrice = 25.00;
			}
			else
			{
				$ticketPrice = 30.00;
			}
			
			break;
		}
		
		case 'FC':
		{
			if($discountBOOL)
			{
				$ticketPrice = 20.00;
			}
			else
			{
				$ticketPrice = 25.00;
			}
			
			break;
		}
		
		case 'B1':
		{
			//will execute next case
		}
		
		case 'B2':
		{
			//will execute next case
		}
		
		case 'B3':
		{
			if($discountBOOL)
			{
				$ticketPrice = 20.00;
			}
			else
			{
				$ticketPrice = 30.00;
			}
			
			break;
		}
	}
	
	return $ticketPrice;
	
}
?>


	
	
	
	
	
	
	
	
	
	
	
	

     	
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
