<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Developers Best Friend')</title>

    <meta charset='utf-8'>
 
 	{{ HTML::script('/js/respond.js') }}



	{{ HTML::style('http://netdna.bootstrapcdn.com/bootswatch/3.1.0/readable/bootstrap.min.css') }}
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Lato%7CCherry+Cream+Soda%7CCookie') }}" rel='stylesheet' type='text/css'>
		
</head>

<body>


<header>
			<div class="jumbotron">
			  <div class="container">

			        	<a href='/'>
			        	<h1>
			        		Developer&#39;s Best Friend
			        	</h1>
			        	</a>

					        	<h2>
					        		A quick and dirty app for generating dummy data. 
					        	</h2> 

								        	<small>
										        	Do you need placeholder text for your layout?  
										        	Do you need fake users to test your database?  
										        	You've come to the right place.
								        	</small>


			  </div>
			</div>
</header>




    @yield('content')




    
<footer>
  	<div>© Copyright 2014 Joshua Darlington</div>
</footer>



	{{ HTML::script('http://code.jquery.com/jquery-latest.min.js') }}
	{{ HTML::script('/js/bootstrap.min.js') }}


</body>
</html>