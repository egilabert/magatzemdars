<tr class='clickableRow subcamp'>
	{{ Form::model($incidencia, array(
		'method' => 'PATCH',
		'route'	=> ['incidencies.update','id' => $incidencia->id],
		'role'=> 'form'
	)) }}
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::select('tipus', array(
							'queixa' => 'Queixa', 
							'suggeriment' => 'Suggeriment',
							'altres' => 'Altres',
							), null,['class'=>'form-control', 'required' => 'required']); }}
		</div>
		<div class="info_subcamp">{{ $incidencia->tipus }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
						{{ errors_for('observacions', $errors)}}
		</div>
		<div class="info_subcamp">{{ $incidencia->observacions }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed"></div>
		<div class="info_subcamp">{{ $incidencia->user->name }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">{{Form::submit('Editar', ['class'=>'btn btn-success'])}}</div>
		<div class="info_subcamp">{{ $incidencia->created_at }}</div>
	</td>
	{{ Form::close() }}
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{Form::delete('incidencies/'.$incidencia->id, 'Eliminar', $form_parameters = array(), $button_options = array('class'=>'btn btn-danger', 'data-confirm' =>'Estàs segur que vols eliminar aquesta comunicació de la base de dades?')
                )}}
		</div>
		<div class="info_subcamp">{{ $incidencia->updated_at }}</div>
	</td>
</tr>