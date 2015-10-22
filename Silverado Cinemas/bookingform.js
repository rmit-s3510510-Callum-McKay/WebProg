<!--


function enableValidDays(movieType)
{
	
	var days = document.getElementById("day");
	
	switch(movieType)
	{
		case 'AC':
		{
			days.options[0].disabled = true;
			days.options[1].disabled = true;
			days.options[2].disabled = false;
			days.options[3].disabled = false;
			days.options[4].disabled = false;
			days.options[5].disabled = false;
			days.options[6].disabled = false;
			
			break;
		}
		
		case 'CH':
		{
			days.options[0].disabled = false;
			days.options[1].disabled = false;
			days.options[2].disabled = false;
			days.options[3].disabled = false;
			days.options[4].disabled = false;
			days.options[5].disabled = false;
			days.options[6].disabled = false;
			
			break;
		}
		
		case 'AF':
		{
			days.options[0].disabled = false;
			days.options[1].disabled = false;
			days.options[2].disabled = true;
			days.options[3].disabled = true;
			days.options[4].disabled = true;
			days.options[5].disabled = false;
			days.options[6].disabled = false;
			
			break;
		}
		
		case 'RC':
		{
			days.options[0].disabled = false;
			days.options[1].disabled = false;
			days.options[2].disabled = false;
			days.options[3].disabled = false;
			days.options[4].disabled = false;
			days.options[5].disabled = false;
			days.options[6].disabled = false;
			
			break;
		}
		
		default:
		{
			
			days.options[0].disabled = true;
			days.options[1].disabled = true;
			days.options[2].disabled = true;
			days.options[3].disabled = true;
			days.options[4].disabled = true;
			days.options[5].disabled = true;
			days.options[6].disabled = true;
		}
	}
	
	
	

	//This if check prevents an exception where a null value is checked by the nested if
	if (document.getElementById(days.value) != null)
	{
		
		//If the currently selected day is not valid, set selection to blank
		if(document.getElementById(days.value).disabled == true)
		{
			days.value = '';
	
		}
	}
	
	//simulate onchange event
	days.onchange();
	
}




function enableValidTimes(day)
{
	var movieType = document.getElementById("movie").value;
	var times = document.getElementById("time");
	
	
	switch(day)
	{
		
		case 'MON':
		{		
			//will execute next case
		}
		
		case 'TUE':
		{
			switch(movieType)
			{
				case 'AC':
				{
					//AC Monday/Tuesday 12:00
					times.options[0].disabled = true;
					//AC Monday/Tuesday 13:00
					times.options[1].disabled = true;
					//AC Monday/Tuesday 15:00
					times.options[2].disabled = true;
					//AC Monday/Tuesday 18:00
					times.options[3].disabled = true;
					//AC Monday/Tuesday 21:00
					times.options[4].disabled = true;
					
					break;
				}
				
				case 'CH':
				{
					//CH Monday/Tuesday 12:00
					times.options[0].disabled = true;
					//CH Monday/Tuesday 13:00
					times.options[1].disabled = false;
					//CH Monday/Tuesday 15:00
					times.options[2].disabled = true;
					//CH Monday/Tuesday 18:00
					times.options[3].disabled = true;
					//CH Monday/Tuesday 21:00
					times.options[4].disabled = true;
					
					break;
				}
				
				case 'AF':
				{
					//AF Monday/Tuesday 12:00
					times.options[0].disabled = true;
					//AF Monday/Tuesday 13:00
					times.options[1].disabled = true;
					//AF Monday/Tuesday 15:00
					times.options[2].disabled = true;
					//AF Monday/Tuesday 18:00
					times.options[3].disabled = false;
					//AF Monday/Tuesday 21:00
					times.options[4].disabled = true;
					
					break;
				}
				
				case 'RC':
				{
					//RC Monday/Tuesday 12:00
					times.options[0].disabled = true;
					//RC Monday/Tuesday 13:00
					times.options[1].disabled = true;
					//RC Monday/Tuesday 15:00
					times.options[2].disabled = true;
					//RC Monday/Tuesday 18:00
					times.options[3].disabled = true;
					//RC Monday/Tuesday 21:00
					times.options[4].disabled = false;
					
					break;
				}
			}
			
			
			break;
		}
		
		
		
		
		case 'WED':
		{
			//will execute next case
		}
		
		case 'THU':
		{
			//will execute next case
		}
		
		case 'FRI':
		{
			switch(movieType)
			{
				case 'AC':
				{
					//AC Wednesday/Thursday/Friday 12:00
					times.options[0].disabled = true;
					//AC Wednesday/Thursday/Friday 13:00
					times.options[1].disabled = true;
					//AC Wednesday/Thursday/Friday 15:00
					times.options[2].disabled = true;
					//AC Wednesday/Thursday/Friday 18:00
					times.options[3].disabled = true;
					//AC Wednesday/Thursday/Friday 21:00
					times.options[4].disabled = false;
					
					break;
				}
				
				case 'CH':
				{
					//CH Wednesday/Thursday/Friday 12:00
					times.options[0].disabled = true;
					//CH Wednesday/Thursday/Friday 13:00
					times.options[1].disabled = true;
					//CH Wednesday/Thursday/Friday 15:00
					times.options[2].disabled = true;
					//CH Wednesday/Thursday/Friday 18:00
					times.options[3].disabled = false;
					//CH Wednesday/Thursday/Friday 21:00
					times.options[4].disabled = true;
					
					break;
				}
				
				case 'AF':
				{
					//AF Wednesday/Thursday/Friday 12:00
					times.options[0].disabled = true;
					//AF Wednesday/Thursday/Friday 13:00
					times.options[1].disabled = true;
					//AF Wednesday/Thursday/Friday 15:00
					times.options[2].disabled = true;
					//AF Wednesday/Thursday/Friday 18:00
					times.options[3].disabled = true;
					//AF Wednesday/Thursday/Friday 21:00
					times.options[4].disabled = true;
					
					break;
				}
				
				case 'RC':
				{
					//RC Wednesday/Thursday/Friday 12:00
					times.options[0].disabled = true;
					//RC Wednesday/Thursday/Friday 13:00
					times.options[1].disabled = false;
					//RC Wednesday/Thursday/Friday 15:00
					times.options[2].disabled = true;
					//RC Wednesday/Thursday/Friday 18:00
					times.options[3].disabled = true;
					//RC Wednesday/Thursday/Friday 21:00
					times.options[4].disabled = true;
					
					break;
				}
			}
			
			
			break;
		}
		
		
		case 'SAT':
		{
			//will execute next case
		}
	
		case 'SUN':
		{
			switch(movieType)
			{
				case 'AC':
				{
					//AC Saturday/Sunday 12:00
					times.options[0].disabled = true;
					//AC Saturday/Sunday 13:00
					times.options[1].disabled = true;
					//AC Saturday/Sunday 15:00
					times.options[2].disabled = true;
					//AC Saturday/Sunday 18:00
					times.options[3].disabled = true;
					//AC Saturday/Sunday 21:00
					times.options[4].disabled = false;
					
					break;
				}
				
				case 'CH':
				{
					//CH Saturday/Sunday 12:00
					times.options[0].disabled = false;
					//CH Saturday/Sunday 13:00
					times.options[1].disabled = true;
					//CH Saturday/Sunday 15:00
					times.options[2].disabled = true;
					//CH Saturday/Sunday 18:00
					times.options[3].disabled = true;
					//CH Saturday/Sunday 21:00
					times.options[4].disabled = true;
					
					break;
				}
				
				case 'AF':
				{
					//AF Saturday/Sunday 12:00
					times.options[0].disabled = true;
					//AF Saturday/Sunday 13:00
					times.options[1].disabled = true;
					//AF Saturday/Sunday 15:00
					times.options[2].disabled = false;
					//AF Saturday/Sunday 18:00
					times.options[3].disabled = true;
					//AF Saturday/Sunday 21:00
					times.options[4].disabled = true;
					
					break;
				}
				
				case 'RC':
				{
					//RC Saturday/Sunday 12:00
					times.options[0].disabled = true;
					//RC Saturday/Sunday 13:00
					times.options[1].disabled = true;
					//RC Saturday/Sunday 15:00
					times.options[2].disabled = true;
					//RC Saturday/Sunday 18:00
					times.options[3].disabled = false;
					//RC Saturday/Sunday 21:00
					times.options[4].disabled = true;
					
					break;
				}
			}
			
			
			break;
		}
		
		default:
		{
			//disable all options if no day detected
			times.options[0].disabled = true;
			times.options[1].disabled = true;
			times.options[2].disabled = true;
			times.options[3].disabled = true;
			times.options[4].disabled = true;	
		}

		
	}
	
	//This if check prevents an exception where a null value is checked by the nested if
	if (document.getElementById(times.value) != null)
	{
		
		//If the currently selected time is not valid, set selection to blank
		if(document.getElementById(times.value).disabled == true)
		{
			times.value = '';
		}
	}		
}



function calculateSubtotal(element)
{
	var ticketType = element.name;
	var ticketQuantity = element.value;
	var ticketPrice = 0;
	var discountBOOL = checkDiscount();
	
	switch(ticketType)
	{
		case 'SA':
		{
			if(discountBOOL)
			{
				ticketPrice = 12;
			}
			else
			{
				ticketPrice = 18;
			}
			
			break;
		}
		
		case 'SP':
		{
			if(discountBOOL)
			{
				ticketPrice = 10;
			}
			else
			{
				ticketPrice = 15;
			}
			
			break;
		}
		
		case 'SC':
		{
			if(discountBOOL)
			{
				ticketPrice = 8;
			}
			else
			{
				ticketPrice = 12;
			}
			
			break;
		}
		
		case 'FA':
		{
			if(discountBOOL)
			{
				ticketPrice = 25;
			}
			else
			{
				ticketPrice = 30;
			}
			
			break;
		}
		
		case 'FC':
		{
			if(discountBOOL)
			{
				ticketPrice = 20;
			}
			else
			{
				ticketPrice = 25;
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
			if(discountBOOL)
			{
				ticketPrice = 20;
			}
			else
			{
				ticketPrice = 30;
			}
			
			break;
		}
	}
	

	
	var subtotal = ticketPrice * ticketQuantity;
	
	var subtotalID = element.name + "subtotal";
	document.getElementById(subtotalID).value = subtotal.toFixed(2);
	
	calculateTotal();
	
}




function checkDiscount()
{
	var day = document.getElementById("day").value;
	var time = document.getElementById("time").value;
	if(day == "MON" || day == "TUE" || ((day == "WED" || day == "THU" || day == "FRI") &&  time == "1300"))
	{
		return true;
	}
	else return false;
}



//There are many ways to do this, but this way lets me demonstrate use of for loops
function calculateTotal()
{
	var total = 0;
	
	//sums values of all disabled number elements (ie. sum all subtotals)
	for(var i = 0; i < document.forms[0].length ; i++)
	{
		if(document.forms[0].elements[i].type == "number" && document.forms[0].elements[i].disabled == true)
		{
			total += Number(document.forms[0].elements[i].value);
		}
	}	
	
	document.getElementById("totalPrice").value = total.toFixed(2);

	
}


//useful for when user changes session time after already being awarded discount (or the opposite)
function reCalculate()
{
	
	for(var i = 0; i < document.forms[0].length ; i++)
	{
		if(document.forms[0].elements[i].type == "number" && document.forms[0].elements[i].name.length == 2)
		{	
			calculateSubtotal(document.forms[0].elements[i]);
		}
	}	
	
}


function validateForm()
{
	if(document.getElementById("movie").value == '')
	{
		alert("Please select a movie.");
		return false;
	}
	
	if(document.getElementById("day").value == '')
	{
		alert("Please select a day.");
		return false;
	}
	
	if(document.getElementById("time").value == '')
	{
		alert("Please select a time.");
		return false;
	}
	
	if(document.getElementById("totalPrice").value == 0)
	{
		alert("Please select number of tickets.");
		return false;
	}
	
	return true;
}

function autoFillMovie()
{
	alert("function called");
	
}


 -->