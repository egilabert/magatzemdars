@extends('layouts.master')


@section('title')
	Treballadors de Magatzem d'Ars
@stop

@section('content')

<div class="container">

	<?php //dd($users->toArray()); ?>
	@foreach ($users as $user)
		<div class="col-md-3 col-sm-6 mix creative illustration">
		    <div class="work-item">
		        <div class="image-holder">
		            <img src="assets/img/{{$user->profile->foto}}" alt="">
		            <div class="overlay">
		                <a href="/{{$user->username}}" data-rel="lightbox">
		     		    	<i class="fa fa-search"> més info...</i>
		                </a>
		            </div>
		        </div>
		        <a href="/{{$user->username}}"><h4>{{$user->name}}</h4></a>
		        <span>{{$user->autor}}</span>
		    </div>
		</div>
	@endforeach
</div>

@stop

@section('footer')
@stop