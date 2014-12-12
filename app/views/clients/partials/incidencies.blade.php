<div class="row">
	{{--$client->comunicacions--}}
	<div class="main_table">
		<table class="table">
			<thead>
				<tr>
					<th>Incidència</th>
					<th>Observacions</th>
					<th>Responsable</th>
					<th>Inicialitzada</th>
					<th>Actualitzada</th>
				</tr>
			</thead>
			<tbody>
				{{ Form::open(array(
					'action' => array('IncidenciesController@store', 'id' => $client->id
				))) }}

				<tr class='not_displayed' id='new_incidencia'>

					<td>
						{{ Form::select('tipus', array(
							'queixa' => 'Queixa', 
							'suggeriment' => 'Suggeriment',
							'altres' => 'Altres',
							), null,['class'=>'form-control', 'required' => 'required']); }}
					</td>
					<td>{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
						{{ errors_for('observacions', $errors)}}
					</td>
					<td></td>
					<td></td>
					<td>{{Form::submit('Crear', ['class'=>'btn btn-success'])}}</td>

					
				</tr>

				{{ Form::close() }}
				@foreach ($client->incidencies as $incidencia)
					@include('clients.partials.taula_incidencies')
				@endforeach
			</tbody> 
		</table>
		<div class="text-center">
			{{--$client->appends(Request::except('page'))->links()--}}
		</div>
	</div>
</div>