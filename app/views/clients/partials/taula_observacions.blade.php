<tr class='clickableRow subcamp'>
	{{ Form::model($observacio, array(
		'method' => 'PATCH',
		'route'	=> ['observacions.update','id' => $observacio->id],
		'role'=> 'form'
	)) }}
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
			{{ errors_for('observacions', $errors)}}
		</div>
		<div class="info_subcamp">{{ $observacio->observacions }}</div>
	</td>
	<td></td>
	<td>
		<div class="edit_form_subcamp not_displayed">{{Form::submit('Editar', ['class'=>'btn btn-success'])}}</div>
	</td>
	{{ Form::close() }}
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{Form::delete('observacions/'.$observacio->id, 'Eliminar', $form_parameters = array(), $button_options = array('class'=>'btn btn-danger', 'data-confirm' =>'Estàs segur que vols eliminar aquesta comunicació de la base de dades?')
                )}}
		</div>
	</td>
</tr>