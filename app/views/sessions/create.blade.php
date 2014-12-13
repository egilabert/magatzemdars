@extends('layouts.master')


@section('title')
	Benvingut a Magatzems d'Ars
@stop

@section('styles')
	<link rel="stylesheet" type="text/css" href="/assets/css/login.css">
@stop

@section('content')

<div class="login">
	<div class="container col-md-4 col-md-offset-4 text-center +">

		<h2>Magatzem d'Ars</h2>

		{{Form::open([
			'data-remote-success-message' => 'Benvingut!',
			'method' => 'POST',
			'route'	=> 'sessions.store'
		])}}
			

			<div class="form-group">
				{{Form::label('email','Email ')}}
				{{Form::email('email', null, ['class'=>'form-control', 'required' => 'required'])}}
				{{ errors_for('email', $errors)}}
			</div>

			<div class="form-group">
				{{Form::label('password','Password ')}}
				{{Form::password('password', ['class'=>'form-control', 'required' => 'required'])}}
				{{ errors_for('password', $errors)}}
			</div>

			<div class="form-group">
				{{ Form::submit('Entra', ['class'=>'btn btn-primary']) }}
			</div>

			@if (Session::has('flash_message'))
				<div class="form-group">
					<p>{{ Session::get('flash_message')}}</p>
				</div>
			@endif

		{{Form::close()}}

	</div>
</div>

@stop

@section('footer')
@stop