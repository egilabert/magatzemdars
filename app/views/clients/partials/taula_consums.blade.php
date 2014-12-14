<tr class='clickableRow subcamp'>
	{{ Form::model($consum, array(
		'method' => 'PATCH',
		'route'	=> ['consums.update',
			'id' => $consum->id
			//'client_id' => $client->id
			],
		'role'=> 'form'
	)) }}
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::select('producte', array(
							'activitat' => 'Activitat', 
							'bolo' => 'Bolo',
							'curs' => 'Curs',
							'lloguer' => 'Lloguer de sala',
							'producte_empresa' => 'Producte per empresa',
							'altres' => 'Altres'
							), null,['class'=>'form-control', 'required' => 'required']); }}
		</div>
		<div class="info_subcamp">{{ $consum->producte }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::text('preu', null, ['class'=>'form-control', 'placeholder' => 'Preu...', 'required' => 'required']); }} 
						{{ errors_for('preu', $errors)}}
		</div>
		<div class="info_subcamp">{{ number_format( $consum->preu, 2, ",", "." ) }}€</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{ Form::text('observacions', null, ['class'=>'form-control', 'placeholder' => 'Observacions...', 'required' => 'required']); }} 
						{{ errors_for('observacions', $errors)}}
		</div>
		<div class="info_subcamp">{{ $consum->observacions }}</div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed"></div>
		<div class="info_subcamp"></div>
	</td>
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{Form::submit('Editar', ['class'=>'btn btn-success'])}}
		</div>
		<div class="info_subcamp"></div>
	</td>
	{{ Form::close() }}
	<td>
		<div class="edit_form_subcamp not_displayed">
			{{Form::delete('consums/'.$consum->id, 'Eliminar', $form_parameters = array(), $button_options = array('class'=>'btn btn-danger', 'data-confirm' =>'Estàs segur que vols eliminar aquesta comunicació de la base de dades?')
                )}}
		</div>
		<div class="info_subcamp"></div>
	</td>
</tr>