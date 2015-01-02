@extends('layouts.master')


@section('title')
	Subscriu-te a Magatzem d'Ars
@stop

@section('content')

<div class="">
	<div class="container col-md-6 col-md-offset-3">

		<h2>Subscriu-te a Magatzem d'Ars</h2>

		{{Form::open([
			'data-remote-success-message' => 'T\'has subscrit correctament!',
		])}}

			<div class="form-group">
				{{Form::label('email','Email: ')}}
				{{Form::email('email', null, ['class'=>'form-control', 'required' => 'required'])}}
				<div class="error_basic"> {{ $errors->first('email') }} </div>
			</div>

			<div class="form-group">
				{{Form::label('name','Nom Complet: ')}} (Opcional...)
				{{Form::text('name', null, ['class'=>'form-control'])}}

				<div class="error_basic"> {{ $errors->first('name') }} </div>
				{{-- $errors->first('name', '<span class=error>:message</span>') --}}
			</div>

			<div class="form-group">
				{{ Form::submit('Subscriu-te!', ['class'=>'btn btn-primary']) }}
			</div>

		{{Form::close()}}

	</div>

</div>

@stop

@section('footer')
	{{-- @include('layouts.partials.copyright') --}}
@stop