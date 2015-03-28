@extends('layouts.master')


@section('title')
	Contacta amb Magatzem d'Ars
@stop



@section('content')
<div class="row text-center">
<div class="col-md-6 col-md-offset-3">
	<h3>Contacta amb nosaltres</h3>
	
	<p>Direcció: Albert Pueyo</p>
	Contacta'ns a <a href="mailto:albertpueyo@magatzemdars.com">albertpueyo@magatzemdars.com</a>
	<p>Per fer reserves o més informació: <a href="tel:+34629788005">629 788 005</a></p>
	<p>Producció: Oriol Borés</p>
	Contacta'ns a <a href="mailto:oriolbores@magatzemdars.com">oriolbores@magatzemdars.com</a>
	<p>Per fer reserves o més informació: <a href="tel:+34606880101">606 880 101</a></p>
	<hr>
	<div id="map_canvas"></div>
	<br>
	<h4>Magatzem d’Ars, Escola de Teatre</h4>
	<p>c/Atenes 27, 08006</p>
	<p>Barcelona</p>
	<p>Telèfon: 932 541 283</p>
	<p>Mail: <a href="mailto:escola@magatzemdars.com">escola@magatzemdars.com</a></p>
	<hr>
	<p>Metro L3 Lesseps</p>
	<p>FGC Pàdua</p>
	<p>Autobusos: 22, 74</p>
</div>
</div>
@stop

@section('footer')
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
	  function initialize() {
	  	var mapCanvas = document.getElementById('map_canvas');
	  	var mapOptions = {
	      center: new google.maps.LatLng(41.403907, 2.140886),
	      zoom: 17,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    }
    	var map = new google.maps.Map(mapCanvas, mapOptions);

    	var marker = new google.maps.Marker({
		    position: new google.maps.LatLng(41.403907, 2.140886),
		    map: map,
		    title:"Magatzem d'Ars"
		});
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
	</script>
@stop

