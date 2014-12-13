@extends('layouts.master')


@section('title')
	Benvinguts a Magatzem d'ars
@stop



@section('content')

@if (Auth::guest()) 

	<div class="portal">
		<div class="row">

			<div class="col-md-7 main1"></div>

			<div class="col-md-5 mainside">

					<div class="main2">
						@include('layouts.partials.carousel')
					</div>

				<div class="row row_blank">

					<div class="col-md-4 promo_3">Promo 3</div>
					<div class="col-md-4 promo_4">Promo 4</div>
					<div class="col-md-4 promo_5">Promo 5</div>

				</div>

			</div>
		</div>
		<div class="row promo_bottom">
			Promo baix
		</div>

		<div class="row text-center">
			<div class="col-md-2 col-md-offset-3 service-item">
		        <div class="icon">
		            <a href="#"><i class="fa fa-ticket"></i></a>
		        </div>
		        <a href="#"><h4>Compra entrades</h4></a>
		    </div>
			<div class="col-md-2 col-md-offset-2 service-item">
		        <div class="icon">
		            <a href="subscribe"><i class="fa fa-newspaper-o"></i></a>
		        </div>
		        <a href="subscribe"><h4>Subscriu-te</h4></a>
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
@stop

