<div class="row">
	{{--$client->comunicacions--}}
	<div class="main_table">
		<table class="table">
			<thead>
				<tr>
					<th>Observacions</th>
					<th>Responsable</th>
					<th>Inicialitzada</th>
					<th>Actualitzada</th>
				</tr>
			</thead>
			<tbody>
				{{ Form::open(array(
					'action' => array('ObservacionsController@store', 'id' => $client->id
				))) }}

				<tr class='not_displayed' id='new_observacio'>

					<td>{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
						{{ errors_for('observacions', $errors)}}
					</td>
					<td></td>
					<td></td>
					<td>{{Form::submit('Crear', ['class'=>'btn btn-success'])}}</td>

					
				</tr>

				{{ Form::close() }}
				@foreach ($client->observacions as $observacio)
					@include('clients.partials.taula_observacions')
				@endforeach
			</tbody> 
		</table>
		<div class="text-center">
			{{--$client->appends(Request::except('page'))->links()--}}
		</div>
	</div>
</div>