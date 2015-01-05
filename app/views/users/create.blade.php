@extends('layouts.master')


@section('title')
	Registrar usuari a Magatzems d'Ars
@stop

@section('content')

<div class="wrap_register">
	<div class="container col-md-6 col-md-offset-3">

		<h2>Registra't a Magatzem d'Ars</h2>

		{{Form::open([
			'data-remote-success-message' => 'Ja estàs registrat!',
			'method' => 'POST',
			'route'	=> 'users.store'
		])}}
			
			<div class="form-group">
				{{Form::label('username','Nom d\'usuari per la plataforma: ')}}
				{{Form::text('username', null, ['class'=>'form-control', 'required' => 'required'])}}
				<div class="error_basic"> {{ $errors->first('username') }} </div>
				{{-- $errors->first('name', '<span class=error>:message</span>') --}}
			</div>

			<div class="form-group">
				{{Form::label('name','Nom Complet: ')}}
				{{Form::text('name', null, ['class'=>'form-control', 'required' => 'required'])}}
				<div class="error_basic"> {{ $errors->first('name') }} </div>
				{{-- $errors->first('name', '<span class=error>:message</span>') --}}
			</div>

			<div class="form-group">
				{{Form::label('email','Email: ')}}
				{{Form::email('email', null, ['class'=>'form-control', 'required' => 'required'])}}
				<div class="error_basic"> {{ $errors->first('email') }} </div>
			</div>

			<div class="form-group">
				{{Form::label('password','Password: ')}}
				{{Form::password('password', ['class'=>'form-control', 'required' => 'required'])}}
				<div class="error_basic"> {{ $errors->first('password') }} </div>
			</div>

			<div class="form-group">
				{{Form::label('password_confirmation','Password: ')}}
				{{Form::password('password_confirmation', ['class'=>'form-control', 'required' => 'required'])}}
				<div class="error_basic"> {{ $errors->first('password_confirmation') }} </div>
			</div>

			<div class="form-group">
				{{Form::label('role','Rol: ')}}
				{{ Form::select('role', array(
							'1' => 'Membre', 
							'2' => 'Direcció',
							'3' => 'Administrador',
							'4' => 'Propietari',
							), null,['class'=>'form-control', 'required' => 'required']); }}
				<div class="error_basic"> {{ $errors->first('role') }} </div>
			</div>

			<div class="form-group">
				{{ Form::submit('Crear usuari', ['class'=>'btn btn-primary']) }}
			</div>

		{{Form::close()}}

	</div>

</div>

@stop

@section('footer')
	{{-- @include('layouts.partials.copyright') --}}
@stop