@extends('layouts.master')


@section('styles')
	<link rel="stylesheet" type="text/css" href="/assets/css/flexslider.css">
@stop

@section('title')
    {{$espectacle->title}} Magatzem d'ars
@stop

@section('content')

<div class="espectacle_row_top">

    <div class="container">

    	<h2>{{$espectacle->title}}</h2>
    	<div class="row">
    		<div class="col-md-7 col-sm-12">
    			<div class="embed-responsive embed-responsive-16by9">
    				<iframe src="{{$espectacle->video}}" frameborder="0" allowfullscreen></iframe>
    			</div>
    		</div>
    		<div class="col-md-5 col-sm-12">
                <div class="row">
        			<div class="col-md-6 col-sm-6">
        		        <div class="service-item">
        		            <div class="icon">
        		                <a href="#"><i class="fa fa-ticket"></i></a>
        		            </div>
        		            <a href="#"><h4>Compra la teva entrada</h4></a>
        		            <p>L'espectacle es troba actualment al Teatreneu fins al 31/05/2015</p>
        		        </div>
        	        </div>
        	        <div class="col-md-6 col-sm-6">
        		        <div class="service-item">
        		            <div class="icon">
        		                <a href="#"><i class="fa fa-info"></i></a>
        		            </div>
        		            <a href="#"><h4>Contacta'ns</h4></a>
        		            <p>Per informació i reserves dels nostres espectacles no dubtis en posarte en contacte amb nosaltres.</p>
        		        </div>
        	        </div>
                </div>
    	    </div>
    	</div>
    </div>
</div>

<div class="espectacle_row_middle">
    <div class="container">
        <div class="col-md-9">
            <h3>Obra</h3>
            <p>{{$espectacle->obra}}</p>
        </div>
        <div class="col-md-3">
            <div class="service-item">
                <a href="{{$espectacle->dossier}}" target="_blank"><object type="image/svg+xml" data="/assets/img/pdf17.svg">Your browser does not support SVG</object>
                <h4>Dossier</h4></a>
            </div>

        </div>
    </div>
</div>
	
<div class="espectacle_row_third">
    <div class="container">

	<h3>Creació</h3>
	<p>{{$espectacle->creacio}}</p>

    </div>
</div>
	<!-- Comentaris del públic -->

<div class="espectacle_row_top">
    <div class="container">
        <h2>El públic opina...</h2>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="flexslider">
                        <ul class="slides">
                            @foreach ($espectacle->comments as $comment)
                                <li>
                                    <div class="testimonails-content">
                                        <p><em>"{{$comment->comment}}"</em></p>
                                        <h6>{{$comment->name}} - <a href="#">{{$comment->info}}</a></h6>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>

<p class="programa">
    <img src="/assets/img/logos/PROGRAMACAT-.gif" alt="Programa cat">
</p>
@stop

@section('footer')
	@include('layouts.partials.copyright')
@stop

@section('scripts')
    <script src="/assets/js/jquery.flexslider-min.js"></script>
    <script>    
    // Can also be used with $(document).ready()
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false
      });
    });
    </script>
@stop