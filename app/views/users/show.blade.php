@extends('layouts.master')


@section('title')
	{{$user->name}}
@stop

@section('content')

<div class="container col-md-6 col-md-offset-3">

	<h2>{{$user->name}}</h2>

	<p>
		Created at: {{$user->created_at}}
	</p>
	<p>
		email: {{$user->email}}
	</p>

</div>

@stop

@section('footer')
	@include('layouts.partials.copyright')
@stop