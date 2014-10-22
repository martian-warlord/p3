

@extends ('_master')


@section('title')
   Welcome to Developers Best Friend
@stop

@section ('content')

			<div class="jumbotron" id="lorax">
			  <div class="container" >
			        <h2 >Lorem Ipsum Generator</h2>
			        <h3 >Specify how many paragraphs you want.</h3>
						{{ Form::open(array('url' => 'paragraphs', 'method' => 'GET'))}}
						{{ Form::label('numberParagraphs', '[10 max]') }}
					    {{ Form::text('numberParagraphs', '1') }}
					    {{ Form::submit('go!') }}
						{{ Form::close() }}

			  </div>
			</div>


			<div class="jumbotron" id="imginaryFriends">
			  <div class="container">
			        <h2>Random User Generator.</h2>
			        <h3>Specify how many users you want.</h3>
						{{ Form::open(array('url' => 'users', 'method' => 'GET'))}}
						{{ Form::label('numberUsers', '[100 max]') }}
					    {{ Form::text('numberUsers', '1') }}
    					{{ Form::submit('go!') }}
						{{ Form::close() }}

			  </div>
			</div>

@stop






