@extends('app')

@section('content')

<div class="container">


	<h1>Basic Laravel Contact Page</h1>


	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach	
	</ul>

	{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

		<div class="form-group">
			{!! Form::label('Your Name') !!}
	    	{!! Form::text('name', null, 
		        array('required', 
		            'class'=>'form-control', 
		            'placeholder'=>'Your name')) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('Your E-mail Address') !!}
		    {!! Form::text('email', null, 
		        array('required', 
					'class'=>'form-control', 
					'placeholder'=>'Your e-mail address')) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('Your Message') !!}
		    {!! Form::textarea('message', null, 
		        array('required', 
					'class'=>'form-control', 
					'placeholder'=>'Your message')) !!}
		</div>

		<div class="form-group">
		    {!! Form::submit('Contact Us!', 
		     	array('class'=>'btn btn-primary')) !!}
		</div>

	{!! Form::close() !!}

	@if(Session::has('message'))
		<div class="alert alert-info">
			{{ Session::get('message') }}
		</div>
	@endif

</div>

@stop()