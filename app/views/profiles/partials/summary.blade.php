<div class="container">

	<div class="row">
		<div class="consum col-md-6">
			
				<div class="row">
					<div class="col-md-4"><big>Comunicacions</big></div>
					<div class="col-md-4">
						<div class="dropdown">
							
								{{ Form::open([
					        		'method' => 'GET',
					        		'role' => 'search',
					            	'route' => ['profiles.show', 'id' => $user->username],
					            	'id' => 'acumulats'
					        	]) }}

				        	<div class="input-group-btn">
				                {{ Form::select('com_filter', array(
				                  '0' => 'Avui', 
				                  '1' => 'Aquesta setmana',
				                  '2' => 'Aquest mes',
				                  '3' => 'Aquest any',
				                  '4' => 'Següent setmana',
				                  '5' => 'Següent mes',
				                  ), null,['class'=>'form-control btn btn-default dropdown-toggle', 'required' => 'required', 'id'=>'com_filter']); 
				                }} 
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<big class="pull-right">{{ count($user->comunicacions)}} comunicacions</big>
					</div>
				</div>
				<div class="row">
					@if (count($user->comunicacions)==0)
						
						<p>No s'han generat comunicacions en aquest període</p>

					@else 
					<div class="main_table">
						<table class="table">
							<thead>
								<tr>
									<th>Tipus</th>
									<th>Data</th>
									<th>Client</th>
									<th>Observacions</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($user->comunicacions as $comunicacio)
									<tr class='clickableRow' data-url="#">
										<td>{{ $comunicacio->tipus }}</td>
										<td>{{ $comunicacio->hora_progamada }}</td>
										<td>{{ $comunicacio->comunicable->name }}</td>
										<td>{{ $comunicacio->observacions }}</td>
									</tr>
								@endforeach
							</tbody> 
						</table>
					</div>
					@endif
					<div class="text-center">
						{{--$client->appends(Request::except('page'))->links()--}}
					</div>
				</div>
		</div>
	
	
		<div class="consum col-md-1">
			
		</div>

		<div class="incidencies col-md-5">
			<div class="row">
				<div class="col-md-5"><big>Consums generats</big></div>
				<div class="col-md-4">
					<div class="dropdown">
						
			        	<div class="input-group-btn">
			                {{ Form::select('con_filter', array(
			                  '0' => 'Avui', 
			                  '1' => 'Aquesta setmana',
			                  '2' => 'Aquest mes',
			                  '3' => 'Aquest any',
			                  ), null,['class'=>'form-control btn btn-default dropdown-toggle', 'required' => 'required', 'id'=>'con_filter']); 
			                }} 
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<big class="pull-right">Total: {{money($user->consums->sum('preu'))}}</big>
				</div>
			</div>
			<div class="row">
				@if (count($user->consums)==0)
					
					<p>No s'han generat consums en aquest període</p>

				@else 
				<div class="main_table">
					<table class="table">
						<thead>
							<tr>
								<th>Producte</th>
								<th>Data</th>
								<th>Client</th>
								<th>Import</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($user->consums as $consum)
								<tr class='clickableRow' data-url="#">
									<td>{{ $consum->producte }}</td>
									<td>{{ $consum->created_at }}</td>
									<td>{{ $consum->consumible->name }}</td>
									<td class="text-right">{{ money($consum->preu) }}</td>
								</tr>
							@endforeach
						</tbody> 
					</table>
				</div>
				@endif
				<div class="text-center">
					{{--$client->appends(Request::except('page'))->links()--}}
				</div>
			</div>

		</div>

		
		

	</div>
	<div class="row">
		{{ Form::submit('Veure dades', ['class'=>'btn btn-primary']) }}
		{{ Form::close() }}
	</div>
	<div class="feed"></div>
	<?php Javascript::put(['com_filter' => Request::get('com_filter'), 'con_filter' => Request::get('con_filter')])?>
</div>