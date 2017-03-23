<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}">
</head>

<body>
<div id="container">
	<div id="img"><img src="{{URL::asset('/img/mcgi_logo.png')}}" alt="image" ></div><br><br>
		<div id="app">
	        <nav class="navbar navbar-default navbar-static-top">
	            <div class="container">
	                <div class="navbar-header" id="navig">
	                	<div id="navi">
	                    	<ul class="nav navbar-nav navbar-right">
	                       	 	<li><a href="/index" class="fa fa-plus fa-lg" aria-hidden="true" target="_blank"> Schedule</a></li>
	                        	<li><a href="/auth/login">Log In</a></li>
                        		<li><a href="/auth/register">Register &nbsp;</a></li>
	                  		</ul>
	                    </div>
	        		</div>
	        	</div>
	        </nav>
	    </div>
        <div id="title2">
        	BROADCASTS
        </div>
        <div id="title2b">
        	The Old Path Worldwide Broadcast Schedule
        </div>
        <div id="content">
			<div id="head"><br>Confirmation</div><hr>
				<div id="text1">
				Program: &nbsp; <?php echo $program ?><br>
				Country: &nbsp; <?php echo $country ?><br>
				Channel: &nbsp; <?php echo $channel ?><br>
				Day: &nbsp; &nbsp; <?php echo $day ?><br>
				Time:&nbsp; &nbsp; <?php echo $time ?><br>
				</div>
				<div id="text2">
				<br>
					<form method="POST" action="/show-schedule">
					{{ csrf_field() }}
						<button class="btn btn-info" id="button" type="submit">Show Schedule</button>
					</form>
			</div>
		</div>
		<div class="footer">
		<p class="vcard copyright">Copyright&copy;
	    2016-2017 | Web Application Development-2 <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
		</p>
	</div>
	</div>
</body>
</html>
