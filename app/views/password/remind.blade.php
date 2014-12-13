@extends('layouts.master')


@section('title')
	Password nou
@stop

@section('content')

<div class="wrap_register">
	<div class="container col-md-6 col-md-offset-3">

		<h2>Necessites un nou password per a Magatzems d'Ars?</h2>

		{{Form::open()}}

			<div class="form-group">
				{{Form::label('email','Email: ')}}
				{{Form::email('email', null, ['class'=>'form-control', 'required' => 'required'])}}
			</div>

			<div class="form-group">
				{{ Form::submit('Generar', ['class'=>'btn btn-primary']) }}
			</div>

		{{Form::close()}}

	</div>

</div>

@stop

@section('footer')
	{{-- @include('layouts.partials.copyright') --}}
@stop