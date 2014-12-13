@extends('layouts.master')

@section('styles')
@stop

@section('title')
    Lloguer de Sala {{$sale->sala}} de Magatzem d'ars
@stop

@section('content')
	<div class="container">
		<div class="row">
			<h1>Sala {{$sale->sala}}</h1>
			<div class="row sala_show">
				<div class="col-md-6">
					<h3>{{$sale->info}}</h3>
					@if ($sale->sala == 'Actes')
						<h3>La sala també és ideal per presentar espectacles o concerts de petit format. </h3>
					@endif
					<p>	
						<div class="service-item">
				    	    <div class="icon">
				    	        <a href="mailto:oriolbores@magatzemdars.com"><i class="fa fa-info"></i></a>
				    	    </div>
				    	        <a href="mailto:oriolbores@magatzemdars.com"><h4>Informa't</h4></a>
				    	        <!--<p>Estigues al dia de totes les activitats de Magatzem d'Ars</p>-->
				    	</div>
					</p>
					<p>
						Recordem que totes les nostres sales disposen de sostres alts, calefacció, ventilació exterior, equip de música complet i possibilitat per endollar múltiples aparells electrònics, lavabos, vestidor masculí i femení amb dutxes, guixetes amb clau i espai per emmagatzematge del vostre material.
					</p>
				</div>
				<div class="col-md-6">
					<img src={{$sale->foto1}} alt="Sala {{$sale->sala}}">
				</div>
			</div>
		</div>
		

	</div>
	

@stop

@section('footer')
@stop

@section('scripts')
  
@stop