  <?php use Laracasts\Utilities\JavaScript\Facades\JavaScript; ?> 

@extends('layouts.master')

@section('title')
	Benvingut a Magatzems d'Ars
@stop

@section('styles')
	<link rel="stylesheet" type="text/css" href="/assets/css/db_clients.css">
@stop

@section('content')

	@include('clients.partials.clien_details_top_frame')

	<div class="container">
		<h1>

			{{ $client->name }} | 
			<small>{{$client->location }}</small>
			<smallest>{{$client->type->tipus}}</smallest>
			<div class="pull-right">{{ number_format( $client->consums->sum('preu'), 2, ",", "." ) }}€</div>
		</h1> 

		<hr>

		<div class="row fitxa">
			<div class="col-md-2">
				<div class="profile_foto">
					<img src="/assets/img/{{$client->picture}}" alt="{{$client->name}}">
				</div>
				<small>{{ link_to_route('clients.edit', 'Editar', $client->id) }}</small>
			</div>
			<div class="col-md-10">
				<div class="profile_info">
					<div class="bio">
						<p>
							<smallest>Persona de contacte:</smallest> {{$client->contact_name}} {{$client->contact_familyname}}
							<smallest>Telèfons de contacte: </smallest>
								@if (! $client->phone1==0)
									<a href="tel:+34{{$client->phone1}}"> {{$client->phone1}}</a>  
								@endif
								@if (! $client->phone2==0)
								| <a href="tel:+34{{$client->phone2}}">{{$client->phone2}}</a>
								@endif
						</p>
						<p>
							<smallest>Emails de contacte: </smallest>
								@if (! $client->email1=='')
								<a href="mailto:{{$client->email1}}"> {{$client->email1}}</a> 
								@endif
								@if (! $client->email2=='')
								| <a href="mailto:{{$client->email2}}">{{$client->email2}}</a>
								@endif
						</p>
						<p>
							<smallest>Adreça de contacte:</smallest> {{$client->address}}, 
							<smallest>Codi postal:</smallest> 
								@if (! $client->cp==0)
									{{$client->cp}}
								@endif
						</p>
						<p>
							<smallest>Ciutat:</smallest> {{$client->location}}, <smallest>País: </smallest> {{$client->country}}
						</p>
						<p>
							<smallest>Referència:</smallest> {{$client->ref}}
							<smallest>Sector:</smallest> {{$client->sector->sector}}</p>
						<p>
							<?php use Carbon\Carbon; ?>
							<smallest>Últim contacte:</smallest> 
								@if ($client->getLastContact() == Carbon::parse('0000-00-00 00:00:00'))
								Mai
								@else
								{{$client->last_contact_at}}
								@endif
							<smallest>Última venta:</smallest> 
								@if ($client->getLastContract() == Carbon::parse('0000-00-00 00:00:00'))
								Mai
								@else
								{{$client->last_contract_at}}
								@endif
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				@include('layouts.partials.tabs')
			</div>
		</div>

	</div>

	<div class="summary">
			
	</div>



	@if (Session::has('flash_notification.message'))
		<?php

			$myvalue = Session::get('flash_notification.message');
			$arr = explode(' ',trim($myvalue));
			Javascript::put(['tab' => $arr[1]]);
		?>
	@endif

@stop

@section('scripts')
	<script>
		$('#myTab a').click(function (e) {
		  e.preventDefault()
		  $(this).tab('show')
		})
	</script>
@stop

@section('footer')
@stop
