<div class="container">

	<div class="row">
		<div class="consum col-md-6">
			<div class="main_table">
				<div class="row">
				
				<div class="dropdown">
				<big>Comunicacions</big>
				{{ Form::open([
	        		'method' => 'GET',
	        		'role' => 'search',
	            	//'url' => '/clients/'
	        	]) }}

	        	<div class="input-group-btn">
                {{ Form::select('search_key', array(
                  '0' => 'Avui', 
                  '1' => 'Aquesta setmana',
                  '2' => 'Aquest mes',
                  '3' => 'Aquest any',
                  ), null,['class'=>'form-control btn btn-default dropdown-toggle', 'required' => 'required']); 
                }} 
				{{ Form::close() }}
				<big class="pull-right">{{ count($user->consums)}} comunicacions</big>
				</div>
				</div>

				@if (count($user->consums)==0)
					
					<p>No s'han generat comunicacions en aquest període</p>

				@else 
					<table class="table">
						<thead>
							<tr>
								<th>Tipus</th>
								<th>Data</th>
								<th>Observacions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($user->comunicacions as $comunicacio)
								<tr class='clickableRow' data-url="#">
									<td>{{ $comunicacio->tipus }}</td>
									<td>{{ $comunicacio->hora_progamada->diffForHumans() }}</td>
									<td>{{ $comunicacio->observacions }}</td>
								</tr>
							@endforeach
						</tbody> 
					</table>

				@endif
				<div class="text-center">
					{{--$client->appends(Request::except('page'))->links()--}}
				</div>
			</div>
		</div>
	
	
		<div class="consum col-md-1">
			
		</div>

		<div class="incidencies col-md-5">
			<div class="main_table">
				<div class="row">
				
				<div class="dropdown">
				<big>Consums generats</big>
				  <button class="btn btn-default dropdown-toggle" type="button" id="FiltreConsums" data-toggle="dropdown" aria-expanded="true">
				    Període
				    <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu" role="menu" aria-labelledby="FiltreConsums">
				  	<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Avui</a></li>
				    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aquesta setmana</a></li>
				    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aquest mes</a></li>
				    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aquest any</a></li>
				    <li role="presentation" class="divider"></li>
				    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Període personalitzat</a></li>
				  </ul>
				<big class="pull-right">Total: {{money($user->consums->sum('preu'))}}</big>
				</div>
				</div>

				@if (count($user->consums)==0)
					
					<p>No s'han generat ventes en aquest període</p>

				@else 
					
					<table class="table">
						<thead>
							<tr>
								<th>Producte</th>
								<th>Data</th>
								<th>Import</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($user->consums as $consums)
								<tr class='clickableRow' data-url="#">
									<td>{{ $consums->producte }}</td>
									<td>{{ $consums->created_at->diffForHumans() }}</td>
									<td class="text-right">{{ money($consums->preu) }}</td>
								</tr>
							@endforeach
						</tbody> 
					</table>

				@endif
				
	
			</div>
		</div>

	</div>

</div>