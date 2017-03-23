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
	                       	 	<li><a href="/index" class="fa fa-plus fa-lg" aria-hidden="true"> Schedule</a></li>
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
	    <div id="head"><br><i class="fa fa-pencil fa-lg" aria-hidden="true"></i> Update Schedule</div><hr><br>
			<form method="POST" action="/edit/{{$id}}">
			{{ csrf_field() }}
				<div id="text">
				<input type="hidden" name="id" value="{{$id}}">
				Program <input type="text"  class="" name="program" value="{{$program}}"><br><br>
				Country <input type="text"  class="" name="country" value="{{$country}}"><br><br>
				Channel <input type="text"  class="" name="channel" value="{{$channel}}"><br><br>
				Day <input type="text"  class="" name="day" value="{{$day}}"><br><br>
				Time <input type="text"  class="" name="time" value="{{$time}}"><br><br>
				
				<a href="/schedule" class="btn btn-info" type="button" id="button" value="done">Back</a>
				<button type="submit" id="button" class="btn btn-info">Done</button>
				</div>
			</form>
		</div>
	<div class="footer">
		<p class="vcard copyright">Copyright&copy;
	    2016-2017 | Web Application Development-2  <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
		</p>
	</div>
</div>
 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
