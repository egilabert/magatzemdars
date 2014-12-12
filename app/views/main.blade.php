@extends('layouts.master')


@section('title')
	Benvinguts al Magatzem d'ars
@stop



@section('content')

@if (Auth::guest()) 
	<div class="container">
		<div class="row">
			<div class="col-md-8 main1">
				@include('layouts.partials.carousel')
			</div>
			<div class="col-md-4 mainside">
				<div class="main2">
					<img src="/assets/img/proves3.jpg" alt="Proves de imatges">
				</div>
				<div class="baixes">
					<div class="col-md-6 main3">
						<div class="service-item">
		    		        <div class="icon">
		    		            <a href="#"><i class="fa fa-ticket"></i></a>
		    		        </div>
		    		        <a href="#"><h4>Compra entrades</h4></a>
		    		        <!--<p>Estigues al dia de totes les activitats de Magatzem d'Ars</p>-->
		    		    </div>
					</div>
					<div class="col-md-6 main4">
						<div class="service-item">
		    		        <div class="icon">
		    		            <a href="subscribe"><i class="fa fa-newspaper-o"></i></a>
		    		        </div>
		    		        <a href="subscribe"><h4>Subscriu-te</h4></a>
		    		        <!--<p>Estigues al dia de totes les activitats de Magatzem d'Ars</p>-->
		    		    </div>
					</div>
				</div>
			</div>
		</div>
	</div>

@else
<div class="landing">
	<h1>Benvingut {{Auth::user()->name}}</h1>
</div>


@endif



@stop

@section('footer')
	@include('layouts.partials.copyright')
@stop

