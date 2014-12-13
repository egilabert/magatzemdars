@extends('layouts.master')


@section('title')
	Clients de Magatzem d'Ars
@stop

@section('styles')
	<link rel="stylesheet" href="/assets/css/db_clients.css">
@stop

@section('content')
	
		@include('layouts.partials.clients_content_frame_top')

		<div class="">
			<div class="side_bar">
				
			</div>

			<div class="main_table">
				<table class="table">
					<thead>
						<tr class=".clickableRow" data-url="/">
							<th>{{sort_clients_by('name','Nom')}}</th>
							<th>{{sort_clients_by('type_id','Tipus')}}</th>
							<th>{{sort_clients_by('contact_name','Nom contacte')}}</th>
							<th>{{sort_clients_by('contact_familyname','Cognom')}}</th>
							<th>{{sort_clients_by('email1','Email')}}</th>
							<th>{{sort_clients_by('phone1','Telèfon')}}</th>
							<th>{{sort_clients_by('location','Ciutat')}}</th>
							<th>{{sort_clients_by('last_contact_at','Últim contacte')}}</th>
							<th>{{sort_clients_by('last_contract_at','Últim contracte')}}</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($clients as $client)
							@include('layouts.partials.client_info_partial')
						@endforeach
					</tbody>

				</table>
				<div class="text-center">
						{{$clients->appends(Request::except('page'))->links()}}
				</div>
			</div>
		</div>	
	
@stop

@section('footer')
@stop