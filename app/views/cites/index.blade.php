@extends('layouts.master')


@section('title')
	Agenda de {{$user->name}}
@stop

@section('styles')
	<link rel="stylesheet" href="/assets/css/db_clients.css">
@stop

@section('content')

		@if (Auth::check())
			@include('layouts.partials.cites_content_frame_top')
		@endif

		<div class="photo_agenda">
			@if (Auth::check())
				<div class="text-center">AGENDA</div>
			@else
				<div class="text-center">AGENDA</div>
			@endif
		</div>
		
		<div class="agenda">
			<div class="container">
			<h2>{{$month}}</h2>
			<table class="table">
				@if (Auth::check())
				<thead>
					<tr>
						<th>Dia</th>
						<th>Programat</th>
						<th>Observacions</th>
					</tr>
				</thead>
				@endif
				<tbody>
					@if (Auth::check())

						{{ Form::open(array(
							'action' => array('CitesController@store', 'id' => $user->id
						))) }}

						<tr class='not_displayed' id='new_cita'>

							<td> {{Form::input('datetime-local', 'data_programada', Auth::user()->time, ['class'=>'form-control'])}}
								{{ errors_for('data_programada', $errors)}}
							</td>
							<td></td>
							<td>{{ Form::text('details', null, ['class'=>'form-control', 'placeholder' => 'Detalls...', 'required' => 'required']); }} 
								{{ errors_for('details', $errors)}}
							</td>
							<td>{{Form::submit('Crear', ['class'=>'btn btn-success pull-right'])}}</td>

							
						</tr>

						{{ Form::close() }}
					@endif

					@foreach ($cites as $cita)
						<tr class='clickableRow' data-url="#">
							<td><h4>{{$cita->data_programada->day}}</h4></td>
							<td><h5>{{$cita->data_programada->hour}}
								@if ($cita->data_programada->minute!=0):{{$cita->data_programada->minute}}
								@endif
								h</h5>
								</td>
							<td><h4>{{ $cita->details }}</h4></td>
						</tr>			
					@endforeach
				</tbody> 
			</table>

				
				
			</div>	
		</div>
	
@stop

@section('footer')
@stop