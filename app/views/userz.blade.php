

@extends ('_master')


@section('title')
   Random User Generator
@stop

@section ('content')

			<div class="jumbotron" id="lorax">
			  <div class="container">

			        {{$success or 'Try again'}}
			        

			  </div>
			</div>

			<div class="jumbotron" id="imginaryFriends">
			  <div class="container">
			        <h2>Need more fake users?</h2>
						{{ Form::open(array('url' => 'users', 'method' => 'GET'))}}
						{{ Form::label('numberUsers', '[100 max]') }}
					    {{ Form::text('numberUsers', '1') }}
    					{{ Form::submit('go!') }}
						{{ Form::close() }}

			  </div>
			</div>

@stop






