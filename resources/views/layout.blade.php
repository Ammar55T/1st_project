<!DOCTYPE html>
<html>
<head>
	<title> App- @yield('title')</title>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


	@section('navbar')

	<nav class="navbar navbar-expand-sm bg-dark">
		<ul class="navbar-nav"> 
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('welcome')}}">Welcome</a>
			</li>
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('about')}}">About</a>
			</li>
			<a id="index" class="navbar-brand" href="{{url('myinfo')}}">My Info</a>
		</li>
		<li class="nav-item">
			<a id="index" class="navbar-brand" href="{{url('task')}}">Task</a>
		</li>
		<li class="nav-item">
			<a id="index" class="navbar-brand" href="{{url('grid')}}">Grid</a>
		</li>
	</ul>
</nav>

@show
</body>
</html>