<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Developers Best Friend')</title>

    <meta charset='utf-8'>
 
{{ HTML::style('http://netdna.bootstrapcdn.com/bootswatch/3.1.0/united/bootstrap.min.css') }}
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">

		{{ HTML::script('/js/respond.js') }}
		<link href="{{ URL::asset('http://fonts.googleapis.com/css?family=Lato%7CCherry+Cream+Soda%7CCookie') }}" rel='stylesheet' type='text/css'>
		
	<script>
window.App = window.App || {};
	App.siteURL = '{{ URL::to("/") }}';
	App.currentURL = '{{ URL::current() }}';
	App.fullURL = '{{ URL::full() }}';
	App.apiURL = '{{ URL::to("api") }}';
	App.assetURL = '{{ URL::to("assets") }}';
	</script>

</head>
<body>
<header>
			<div class="jumbotron">
			  <div class="container">
			        <h1>Developers Best Friend</h1>
			  </div>
			</div>
</header>

    @yield('content')

    
<footer>
  <div id="copyright text-right">© Copyright 2014 Joshua Darlington</div>
</footer>


{{ HTML::script('http://code.jquery.com/jquery-latest.min.js') }}
{{ HTML::script('/js/bootstrap.min.js') }}
</body>
</html>