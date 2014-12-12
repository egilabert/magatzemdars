@extends('layouts.master')


@section('title')
	Lloguer de sales al Magatzem d'Ars
@stop



@section('content')

<div class="container">
	<div class="row sales">
		<h1>Estàs buscant local per a les teves classes, assajos, xerrades...</h1>
		<p>
		Totes les nostres sales disposen de sostres alts, calefacció, ventilació exterior, equip de música complet i possibilitat per endollar múltiples aparells electrònics, lavabos, vestidor masculí i femení amb dutxes, guixetes amb clau i espai per emmagatzematge del vostre material. 
		</p>

		@foreach ($sales as $sala)
			<div class="col-md-6 col-sm-12">
				<a href="/sales/{{$sala->id}}">
				<div class="shadow1">
					<div class="sales fons_sala_{{$sala->sala}}">
						Sala {{$sala->sala}}
					</div>
				</div>
			</a>
			</div>
		@endforeach
	</div>
	@include('layouts.partials.informat')
</div>
@stop

@section('footer')
	@include('layouts.partials.copyright')
@stop