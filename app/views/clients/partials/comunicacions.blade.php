<div class="row">
	<div class="main_table">
		<table class="table">
			<thead>
				<tr>
					<th>Comunicació</th>
					<th>Programacions</th>
					<th>Observacions</th>
					<th>Responsable</th>
					<th>Inicialitzada</th>
					<th>Actualitzada</th>
				</tr>
			</thead>
			<tbody>
				{{ Form::open(array(
					'action' => array('ComunicacionsController@store', 'id' => $client->id
				))) }}

				<tr class='not_displayed' id='new_comm'>

					<td>
						{{ Form::select('tipus', array(
							'cita' => 'Cita', 
							'mail' => 'Mail',
							'reunió' => 'Reunió',
							'sms' => 'SMS',
							'trucada' => 'Trucada',
							), null,['class'=>'form-control', 'required' => 'required']); }}
					</td>
					<td> {{Form::input('datetime-local', 'hora_progamada', Auth::user()->time, ['class'=>'form-control'])}}
						{{ errors_for('hora_progamada', $errors)}}
					</td>
					<td>{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
						{{ errors_for('observacions', $errors)}}
					</td>
					<td></td>
					<td></td>
					<td>{{Form::submit('Crear', ['class'=>'btn btn-success'])}}</td>

					
				</tr>

				{{ Form::close() }}
				@foreach ($client->comunicacions as $comunicacio)
					@include('clients.partials.taula_comunicacions')
				@endforeach
			</tbody> 
		</table>
		<div class="text-center">
		</div>
	</div>
</div>