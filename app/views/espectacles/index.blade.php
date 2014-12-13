@extends('layouts.master')


@section('title')
	Espectacles de Magatzem d'ars
@stop

@section('content')

<div class="container">

	@foreach ($espectacles as $espectacle)
		<div class="col-md-4 col-sm-6 mix creative illustration">
		    <div class="work-item">
		        <div class="image-holder">
		            <img src={{$espectacle->image}} alt="">
		            <div class="overlay">
		                <a href="espectacles/{{$espectacle->id}}" data-rel="lightbox">
		     		    	<i class="fa fa-search"> més info...</i>
		                </a>
		            </div>
		        </div>
		        <a href="/espectacles/{{$espectacle->id}}"><h4>{{$espectacle->title}}</h4></a>
		        <span>{{$espectacle->autor}}</span>
		    </div>
		</div>
	@endforeach
</div>
@stop

@section('footer')
@stop