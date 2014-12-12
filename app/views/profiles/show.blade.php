@extends('layouts.master')


@section('title')
	Benvingut a Magatzems d'Ars
@stop

@section('styles')
	<link rel="stylesheet" type="text/css" href="/assets/css/dashboard.css">
@stop

@section('content')

	<div class="container">

		<h1>{{$user->name }} <small>{{$user->profile->rol }}</small> | <small>{{$user->profile->location }}</small><smallest>{{$user->roles->first()->name}}</smallest></h1> 
		<hr>
		<div class="row">
			<div class="col-md-2">
				<div class="profile_foto">
					<img src="/assets/img/{{$user->profile->foto}}" alt="{{$user->profile->username}}">
				</div>
			</div>
			<div class="col-md-10">
				<div class="profile_info">
					<div class="bio">
						{{$user->profile->bio }}
					</div>
				</div>
				<div class="text-right"><p><a href="{{$user->profile->link1 }}" target="blank"><i class="fa fa-facebook fa-2x"></i></a></p></div>
			</div>
		</div>

		@if ($user->isCurrent())
			{{ link_to_route('profiles.edit', 'Edita el perfil', $user->username) }}
		@endif
		
		<hr>

	</div>

	<div class="">
			@include('profiles.partials.summary')
	</div>

@stop

@section('scripts')
	
@stop

@section('footer')
	{{-- @include('layouts.partials.copyright') --}}
@stop


