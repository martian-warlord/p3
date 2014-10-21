

@extends ('_master')


@section('title')
   Random User Generator
@stop

@section ('content')

			<div class="jumbotron" id="lorax">
			  <div class="container">

			        <h2>{{{ $random_users }}}</h2>
			        

			  </div>
			</div>



@stop






