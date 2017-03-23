<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('font-awesome/css/font-awesome.min.css') }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div id="container">
		<div id="img"><img src="{{URL::asset('/img/mcgi_logo.png')}}" alt="image" ></div><br><br>
		<div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header" id="navig">
                	<div id="navi1">
                    	<ul class="nav navbar-nav navbar-right">
                       	 	<li><a href="/index" class="fa fa-plus fa-lg" aria-hidden="true"> Schedule</a></li>
                       	 	<li><a href="/auth/login">Log In</a></li>
                        	<li><a href="/auth/register">Register &nbsp;</a></li>
                        	
                  		</ul>
                    </div>
        		</div>
        	</div>
        </nav>
        </div>
        
 	    <div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="{{URL::asset('/img/1-Peter-2-17-banner1.jpg')}}" style="width:100%">
			  <div class="text">Share the Word</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="{{URL::asset('/img/247-Community-Prayer-MCGI.jpg')}}" style="width:100%">
			  <div class="text">24/7 Community Prayer</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext"></div>
			  <img src="{{URL::asset('/img/MCGI-Quarerly-Mass-Blood-Donation.jpg')}}" style="width:100%">
			  <div class="text">Quarterly Mass Blood Donation</div>
			</div>

			</div>
			<br>

			<div style="text-align:center" class="dot1">
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			  <span class="dot"></span> 
			</div>
		<br><br>

		<div id="title">
        	BROADCASTS
        </div>
        <div id="title1">
        	The Old Path Worldwide Broadcast Schedule
        </div><br>

		<table>
			<thead>
				<tr>
					<th> Program </th>
					<th> Country </th>
					<th> Channel </th>
					<th> Day </th>
					<th> Time </th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($users as $user):
				?>
				<tr>
					<td hidden> <?php echo $user->id ?> </td>
					<td> <?php echo $user->program ?> </td>
					<td> <?php echo $user->country ?> </td>
					<td> <?php echo $user->channel ?> </td>
					<td> <?php echo $user->day ?> </td>
					<td> <?php echo $user->time ?> </td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		<div class="footer">
			<p class="vcard copyright">Copyright&copy;
		    2016-2017 | Web Application Development-2 <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
			</p>
		</div>
	</div>
	<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
	    var i;
	    var slides = document.getElementsByClassName("mySlides");
	    var dots = document.getElementsByClassName("dot");
	    for (i = 0; i < slides.length; i++) {
	       slides[i].style.display = "none";  
	    }
	    slideIndex++;
	    if (slideIndex> slides.length) {slideIndex = 1}    
	    for (i = 0; i < dots.length; i++) {
	        dots[i].className = dots[i].className.replace(" active", "");
	    }
	    slides[slideIndex-1].style.display = "block";  
	    dots[slideIndex-1].className += " active";
	    setTimeout(showSlides, 3000); 
	}
	</script>

</body>
</html>