

@extends ('_master')


@section('title')
   Welcome to Developers Best Friend
@stop

@section ('content')

			<div class="jumbotron" style="background-color: yellow; color: red;">
			  <div class="container" >
			        <h2 >Whoopsie!  Try again.  Please enter 1,2,3 numbers only.  Thanks!</h2>
			  </div>
			</div>

			<div class="jumbotron" id="lorax">
			  <div class="container" >
			        <h1 >Placeholder text Generator</h1>
			        <small>"Lorem Ipsum" style fake Latin is the industry standard in dummy text.</small>
			        <h3 >How many paragraphs do you want?</h3>
						{{ Form::open(array('url' => 'paragraphs', 'method' => 'GET'))}}
						{{ Form::label('numberParagraphs', '[1-10]') }}
					    {{ Form::text('numberParagraphs', '1') }}
					    {{ Form::submit('go!') }}
						{{ Form::close() }}

			  </div>
			</div>


			<div class="jumbotron" id="imginaryFriends">
			  <div class="container">
			        <h1>Fake User Generator</h1>
			        <h3>How many users do you want?</h3>
						{{ Form::open(array('url' => 'users', 'method' => 'GET'))}}
						{{ Form::label('numberUsers', '[1-10]') }}
					    {{ Form::text('numberUsers', '1') }}
    					{{ Form::submit('go!') }}
						{{ Form::close() }}

			  </div>
			</div>

@stop






