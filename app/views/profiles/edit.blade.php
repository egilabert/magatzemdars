@extends('layouts.master')


@section('title')
	{{$user->name}}
@stop

@section('styles')
@stop

@section('content')

	<div class="container">
		<h1>Edita el teu perfil {{$user->name}}</small></h1>
		<hr>
		
		{{ Form::model($user->profile, [
			'method' => 'PATCH',
			'route' => ['profiles.update', $user->username]
			]) }}

		<!-- Location field -->

		<div class="form-group">
			{{Form::label('location', 'Location')}}
			{{Form::text('location', null, ['class' => 'form-control']) }}
			<div class="error_basic"> {{ $errors->first('location') }} </div>
		</div>

		<!-- Bio field -->

		<div class="form-group">
			{{Form::label('bio', 'bio')}}
			{{Form::textarea('bio', null, ['class' => 'form-control']) }}
			<div class="error_basic"> {{ $errors->first('bio') }} </div>
		</div>

		<!-- rol field -->

		<div class="form-group">
			{{Form::label('rol', 'rol')}}
			{{Form::text('rol', null, ['class' => 'form-control']) }}
			<div class="error_basic"> {{ $errors->first('rol') }} </div>
		</div>

		<!-- Link1 field -->

		<div class="form-group">
			{{Form::label('link1', 'link1')}}
			{{Form::text('link1', null, ['class' => 'form-control']) }}
			<div class="error_basic"> {{ $errors->first('link1') }} </div>
		</div>

		<div class="form-group">
			{{ Form::submit('Actualitza el perfil', ['class'=>'btn btn-primary']) }}
		</div>

		{{Form::close() }}

	</div>

@stop

@section('footer')
@stop

