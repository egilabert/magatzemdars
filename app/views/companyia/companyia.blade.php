@extends('layouts.master')


@section('title')
	Companyia Magatzem d'Ars
@stop



@section('content')

<div class="padding_row">
	<div class="container">
		<div class="col-md-3 col-xs-6">
			<a href="#qui_som" id="qui_som_link">
				<div class="shadow1">
					<div class="content fons5">
						Qui som
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-xs-6">
			<a href="#com_neix" id="com_neix_link">
				<div class="shadow1">
					<div class="content fons6">
						Com neix
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-xs-6">
			<a href="#trajectoria" id="trajectoria_link">
				<div class="shadow1">
					<div class="content fons7">
						Trajectoria
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-3 col-xs-6">
			<a href="#reconeixements" id="reconeixements_link">
				<div class="shadow1">
					<div class="content fons8">
						Reconeixements
					</div>
				</div>
			</a>
		</div>
	</div>
</div>


<div class="text-center">

	<div id="qui_som" class="middles not_displayed">
		<div class="">
			@include('companyia.partials.equip')
			<div class="container">
				<div class="cv not_displayed ">
					<h3>Pepito Grillo</h3>
					<p>Nascut a Barcelona.... Magatzem d´Ars és una empresa que s’ha creat a partir de l’ esforç i del treball de moltes persones que han col•laborat en aquest projecte i que segueix creixent a pas lent però ferm dins del món artístic. Un grup de persones mogudes per l’amor al teatre i que ha hagut de moure’s a pas de formiga, creixent en relació directa al seu treball. Amb això volem deixar clar que realitzem tots els treballs amb el màxim de cura i que l’únic que tenim, i que ens ha fet créixer, és la feina ben feta que ens a consolidat allà on hem anat</p>
				</div>
			</div>
			@include('layouts.partials.informat')
		</div>
	</div>
		
	<div id="com_neix" class="middles not_displayed">
		<div class="container">
			@include('companyia.partials.com_neix')
			@include('layouts.partials.informat')
		</div>
	</div>

	<div id="trajectoria" class="middles not_displayed">
		<div class="container">
			@include('companyia.partials.trajectoria')
			@include('layouts.partials.informat')
		</div>
	</div>

	<div id="reconeixements" class="middles not_displayed">
		<div class="container reconeixements">
			@include('companyia.partials.reconeixements')
			@include('layouts.partials.informat')
		</div>
	</div>

</div>

@include('layouts.partials.contact_subscribe')



@stop

@section('footer')
	@include('layouts.partials.copyright')
@stop