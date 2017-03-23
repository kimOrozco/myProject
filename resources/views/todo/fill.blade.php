<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="container">

	<div class="head">Sign Up</div><hr><br>
	<form method="POST" action="/done">
		{{ csrf_field() }}
		<div class="text">
		Full Name: <input type="text" name="name"><br><br>
		Task:<input type="text" name="course"><br><br>
		
		<button class="btn btn-primary" type="submit" id="reg" value="done">Done</button>
	</div>
	</form>
</div>

</body>
</html>
