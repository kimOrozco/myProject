<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="{{ URL:: asset('font-awesome/css/font-awesome.min.css') }}">

<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
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
        <div id="title">
        	BROADCASTS
        </div>
        <div id="title1">
        	The Old Path Worldwide Broadcast Schedule
        </div><br>
        @if(Session::has('flash_message'))
        	<div class="alert alert-success" id="flash-message">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	{{ Session::get('flash_message')}}</div>
        @endif

        @if(Session::has('flash_message1'))
        	<div class="alert alert-danger" id="flash-message">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	{{ Session::get('flash_message1')}}</div>
        @endif

         @if(Session::has('flash_message2'))
        	<div class="alert alert-success" id="flash-message">
        	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        	{{ Session::get('flash_message2')}}</div>
        @endif


		<table>
			<thead>
				<tr>
					<th> Program </th>
					<th> Country </th>
					<th> Channel </th>
					<th> Day </th>
					<th> Time </th>
					<th><i class="fa fa-pencil fa-lg" aria-hidden="true"></i></th>
					<th><i class="fa fa-trash fa-lg" aria-hidden="true"></i></th>
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
					<td> 
						<form method="POST" action="/update">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="program" value="{{$user->program}}">
						<input type="hidden" name="country" value="{{$user->country}}">
						<input type="hidden" name="channel" value="{{$user->channel}}">
						<input type="hidden" name="day" value="{{$user->day}}">
						<input type="hidden" name="time" value="{{$user->time}}">
						<button class="btn btn-xs btn-primary" >Edit </button>
						</form>
					</td>
					<td>
						<form method="POST" action="/delete/{{$user->id}}">
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{$user->id}}">
						<input type="hidden" name="program" value="{{$user->program}}">
						<input type="hidden" name="country" value="{{$user->country}}">
						<input type="hidden" name="channel" value="{{$user->channel}}">
						<input type="hidden" name="day" value="{{$user->day}}">
						<input type="hidden" name="time" value="{{$user->time}}">
						<button type="submit" class="btn btn-xs btn-danger" href="/delete/{{$user->id}}">Delete</button> 
						</form>
					</td>
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
 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>