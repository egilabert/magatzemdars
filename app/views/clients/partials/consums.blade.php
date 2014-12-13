<div class="row">
	{{--$client->comunicacions--}}
	<div class="main_table">
		<table class="table">
			<thead>
				<tr>
					<th>Producte</th>
					<th>Import</th>
					<th>Observacions</th>
					<th>Responsable</th>
					<th>Inicialitzada</th>
					<th>Actualitzada</th>
				</tr>
			</thead>
			<tbody>
				{{ Form::open(array(
					'action' => array('ConsumsController@store', 'id' => $client->id
				))) }}

				<tr class='not_displayed' id='new_consum'>

					<td>
						{{ Form::select('producte', array(
							'activitat' => 'Activitat', 
							'bolo' => 'Bolo',
							'curs' => 'Curs',
							'lloguer' => 'Lloguer de sala',
							'producte_empresa' => 'Producte per empresa',
							'altres' => 'Altres'
							), null,['class'=>'form-control', 'required' => 'required']); }}
					</td>
					
					<td> {{ Form::number('preu', null, ['class'=>'form-control', 'placeholder' => 'Preu...', 'required' => 'required']); }} 
						{{ errors_for('preu', $errors)}}
					</td>
					<td>{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
						{{ errors_for('observacions', $errors)}}
					</td>
					<td></td>
					<td></td>
					<td>{{Form::submit('Crear', ['class'=>'btn btn-success'])}}</td>

					
				</tr>

				{{ Form::close() }}
				@foreach ($client->consums as $consum)
					@include('clients.partials.taula_consums')
				@endforeach
			</tbody> 
		</table>
		<div class="text-center">
			{{--$client->appends(Request::except('page'))->links()--}}
		</div>
	</div>
</div>