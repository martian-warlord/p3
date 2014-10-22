

@extends ('_master')


@section('title')
   Lorem Ipsum Generator
@stop

@section ('content')

			<div class="jumbotron" id="lorax">
			  <div class="container">

			        {{$success or 'Try Again'}}
			        

			  </div>
			</div>

			<div class="jumbotron" id="lorax">
			  <div class="container" >
			        <h2 >Need more paragraphs?</h2>
			  
						{{ Form::open(array('url' => 'paragraphs', 'method' => 'GET'))}}
						{{ Form::label('numberParagraphs', '[10 max]') }}
					    {{ Form::text('numberParagraphs', '1') }}
					    {{ Form::submit('go!') }}
						{{ Form::close() }}

			  </div>
			</div>

@stop






