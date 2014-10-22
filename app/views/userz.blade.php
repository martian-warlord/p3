

@extends ('_master')


@section('title')
   Random User Generator
@stop

@section ('content')

			<div class="jumbotron" id="lorax">
			  <div class="container">

			        @if ($success == 1)
        <p>Success!</p>
    @else
        <p>Error!</p>
    @endif
			        

			  </div>
			</div>



@stop






