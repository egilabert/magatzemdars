@extends('layouts.master')


@section('title')
	Cambi de password de Magatzems d'Ars
@stop

@section('content')

<div class="wrap_register">
	<div class="container col-md-6 col-md-offset-3">

		<h2>Registra't a Magatzem d'Ars</h2>

		{{Form::open()}}
			
			{{Form::hidden('token', $token)}}

			<div class="form-group">
				{{Form::label('email','Email: ')}}
				{{Form::email('email', null, ['class'=>'form-control', 'required' => 'required'])}}
			</div>

			<div class="form-group">
				{{Form::label('password','Password: ')}}
				{{Form::password('password', ['class'=>'form-control', 'required' => 'required'])}}
			</div>

			<div class="form-group">
				{{Form::label('password_confirmation','Confirma el nou password: ')}}
				{{Form::password('password_confirmation', ['class'=>'form-control', 'required' => 'required'])}}
			</div>

			<div class="form-group">
				{{ Form::submit('Aplica els canvis', ['class'=>'btn btn-primary']) }}
			</div>

		{{Form::close()}}

	</div>

</div>

@stop

@section('footer')
	{{-- @include('layouts.partials.copyright') --}}
@stop