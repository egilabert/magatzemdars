@extends('layouts.master')


@section('title')
	Col·laborem amb empreses
@stop



@section('content')


<div class="padding_row">
	<div class="container">
		<div class="col-md-3 col-xs-6">
			<a href="#animacio" id="animacio_link">
				<div class="shadow1">
					<div class="content fons1">
						Animacions
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-xs-6">
			<a href="#teamBuilding" id="teamBuilding_link">
				<div class="shadow1">
					<div class="content fons2">
						Team Buildings
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-xs-6">
			<a href="#soparsEmpreses" id="soparsEmpreses_link">
				<div class="shadow1">
					<div class="content fons3">
						Sopars d’empresa
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-xs-6">
			<a href="#espectacleAMida" id="espectacleAMida_link">
				<div class="shadow1">
					<div class="content fons4">
						Espectacles a mida
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="text-center">

	<div id="animacio" class="middles not_displayed">

		<div class="container">
				<h2>Animacions</h2>
					<p>
						Necessites un actor? A Magatzem d’Ars posa a la teva disposició un gran ventall de perfils, edats i característiques que s’adapten a la teva idea. Un cambrer fals per animar un sopar, un presentador per a un producte, un animador per algún acte? Ens adaptem al que necessitis i si no tens molt clara la idea del que vols fer, t’assessorem.
					</p>
				<p>	
					@include('layouts.partials.informat')
				</p>	
		</div>
	</div>

	<div id="teamBuilding" class="middles not_displayed">

		<div class="container">
				<h2>Team Buildings</h2>
				<p>
					T’ajudem a covertir el teu equip humà en un equip d’alt rendiment. 
					L’essencia del treball en grup és que el teu equip és converteixi en el protagonista de l’activitat, que col•labori, que s’entengui, que s’arrisqui, que s’equivoqui i que es corregeixi. Han de gaudir de l’experiència de fer un viatge junts, els servirà perquè es coneguin i confiin els uns amb els altres.
					Perquè sabem que no és el mateix fer un trajecte junts on tot va segons el pla previst o fer un trajecte on ens passaran multitud de coses que haurem de resoldre si volem seguir avançant. Segur que quan arribes al destí, l’opinió que tens de la persona que t’ha ajudat a arribar-hi és molt més positiva que en començar la marxa.
					El nostre equip d’empreses posa a la vostra disposició diferents activitats predefinides i que sabem que funcionen perfectament, però si ho creieu necessari podem fer un estudi previ del vostre equip i preparar una activitat completament adaptada a les vostres necessitats i al vostre pressupost.
					Tota l’activitat pedagògica serà creada per la nostra psicòloga i el nostre analista en relacions laborals i de la part pràctica  se n’encarregarà el nostre equip artistic que és qui millor pot aportar el toc de joc, de fantasia i de diversió que és el que fa únics en aquest sector.
				</p>
				<p>	
					@include('layouts.partials.informat')
				</p>
		</div>
	</div>
		
	<div id="soparsEmpreses" class="middles not_displayed">
		<div class="container">
				<h2>Sopars d’empresa</h2>
				<p>
					No facis el que fa tothom. Organitza una festa inoblidable de principi a fi on
					tu i el teu equip sereu els protagonistes d’una experiència que mai abans heu viscut, o simplement demana’ns que afegim al vostre sopar d’empresa un toc diferent. 
				</p>
				<p>	
					@include('layouts.partials.informat')
				</p>
		</div>
	</div>

	<div id="espectacleAMida" class="middles not_displayed">
		<div class="container">
				<h2>Espectacles a mida</h2>
				<p>
					Què necessites? Tens una idea i no saps com dur-la a terme? Demana’ns el que vulguis i et presentarem la nostra idea, el projecte i un pressupost. A Magatzem d’Ars tenim 30 anys d’experiència organitzant visites teatralitzades, festes sorpresa, inauguracions, tallers, presentacions, casaments… Així que tu manes!
				</p>
				<p>	
					@include('layouts.partials.informat')
				</p>
		</div>
	</div>
</div>

@include('layouts.partials.contact_subscribe')

</div>

@stop

@section('footer')
	@include('layouts.partials.copyright')
@stop