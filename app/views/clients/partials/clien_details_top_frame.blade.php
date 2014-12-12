<div class="barra_clients">
	<div class="container">
		<div class="row">
			<a href="#" type="button" class="btn btn-success btn-sm" id="comunicacions">+ Comunicació</a>
			<a href="#" type="button" class="btn btn-success btn-sm" id="consums">+ Consum</a>
			<a href="#" type="button" class="btn btn-success btn-sm" id="incidencies">+ Incidència</a>
			<a href="#" type="button" class="btn btn-success btn-sm" id="observacions">+ Observació</a>
			<div class="col-md-1 pull-right">
				<a href="/clients/create" type="button" class="btn btn-success btn-sm pull-right">+ Client</a>
			</div>
			<div class="col-md-1 pull-right">
			{{Form::delete('clients/'.$client->id, 'Eliminar', $form_parameters = array(), $button_options = array('class'=>'btn btn-danger btn-sm', 'data-confirm' =>'Estàs segur que vols eliminar aquest client de la base de dades?')
                )}}
            </div>
		</div>
	</div>
</div>

