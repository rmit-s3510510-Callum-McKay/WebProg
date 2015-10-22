<!--

function setAC()
{
	window.name = "AC";
}

function setCH()
{
	window.name = "CH";
}

function setAF()
{
	window.name = "AF";
}

function setRC()
{
	window.name = "RC";
}

function autoFillMovie()
{
	var movie = document.getElementById("movie");
	
	if(window.name == "AC")
	{
		movie.value = "AC";
		//simulate on change event
		movie.onchange();
		
	}	
	
	if(window.name == "CH")
	{
		movie.value = "CH";
		//simulate on change event
		movie.onchange();
	}
	
	if(window.name == "AF")
	{
		movie.value = "AF";
		//simulate on change event
		movie.onchange();
	}
	
	if(window.name == "RC")
	{
		movie.value = "RC";
		//simulate on change event
		movie.onchange();
	}
	
}

 -->