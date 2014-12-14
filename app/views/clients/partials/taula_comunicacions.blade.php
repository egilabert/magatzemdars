<tr class='clickableRow subcamp'>
	{{ Form::model($comunicacio, array(
		'method' => 'PATCH',
		'route'	=> ['comunicacions.update',
			'id' => $comunicacio->id
			//'client_id' => $client->id
			],
		'role'=> 'form'
	)) }}
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::select(
				'tipus', array(
				'cita' => 'Cita', 
				'mail' => 'Mail',
				'reunió' => 'Reunió',
				'sms' => 'SMS',
				'trucada' => 'Trucada',
			), null,['class'=>'form-control', 'required' => 'required']); }}
		</div>
		<div class="info_subcamp">{{ $comunicacio->tipus }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{Form::input('datetime-local', 'hora_progamada', Auth::user()->time, ['class'=>'form-control'])}}
		</div>
		@if ($comunicacio->hora_progamada != $comunicacio->created_at)
		<div class="info_subcamp">{{ $comunicacio->hora_progamada }}</div>
		@endif
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
		</div>
		<div class="info_subcamp">{{ $comunicacio->observacions }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed"></div>
		<div class="info_subcamp">{{ $comunicacio->user->name }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{Form::submit('Editar', ['class'=>'btn btn-success'])}}
		</div>
		<div class="info_subcamp">{{ $comunicacio->created_at }}</div>
		{{ Form::close() }}
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{Form::delete('comunicacions/'.$comunicacio->id, 'Eliminar', $form_parameters = array(), $button_options = array('class'=>'btn btn-danger', 'data-confirm' =>'Estàs segur que vols eliminar aquesta comunicació de la base de dades?')
                )}}
		</div>
		<div class="info_subcamp">{{ $comunicacio->updated_at }}</div>
	</td>
	
</tr>