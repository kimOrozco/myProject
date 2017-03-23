<!DOCTYPE html>
<html>
<head>
	<title>Broadcast</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/bootstrap-theme.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset( 'css/bootstrap-theme.css') }}">
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
	                       	 	<li><a href="http://localhost:8000/index" class="fa fa-plus fa-lg" aria-hidden="true" target="_blank"> Schedule</a></li>
	                       	 	@if (Auth::guest())
	                        	<li><a href="/auth/login">Log In</a></li>
                        		<li><a href="/auth/register">Register &nbsp;</a></li>
                        		@else
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                    {{ Auth::user()->name }} <span class="caret"></span>
	                                </a>

	                                <ul class="dropdown-menu" role="menu">
	                                    <li>
	                                        <a href="{{ route('logout') }}"
	                                            onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                            Logout
	                                        </a>

	                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                                            {{ csrf_field() }}
	                                        </form>
	                                    </li>
	                                </ul>
	                            </li>
                       		@endif
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
			<div id="head"><br><i class="fa fa-plus fa-lg" aria-hidden="true"></i> Schedule</div><hr>
			<form method="POST" action="/done">
				{{ csrf_field() }}
				<div id="text">
				Program &nbsp;<input type="text" name="program" required><br><br>
				Country &nbsp;<input type="text" name="country" required><br><br>
				Channel &nbsp;<input type="text" name="channel" required><br><br>
				Day &nbsp;<input type="text" name="day" required><br><br>
				Time &nbsp;<input type="text" name="time" required><br><br><br>
				
				<a href="/schedule" class="btn btn-info" type="button" id="button" value="done">Back</a>
				<button class="btn btn-info" type="submit" id="button" value="done">Done</button>
			</div>
		</form>
		</div>
		<div class="footer">
				<p class="vcard copyright">Copyright&copy;
			    2016-2017 | Web Application Development-2 <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
				</p>
		</div>
</div>
 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>