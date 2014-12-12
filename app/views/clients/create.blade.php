@extends('layouts.master')

@section('title')
	Introduir un nou client Magatzems d'Ars
@stop

@section('styles')
	<link rel="stylesheet" type="text/css" href="/assets/css/db_clients.css">
@stop

@section('content')

	<div class="container">
		<h1>
			{{ Form::open(array(
				'method' => 'POST',
				'route'	=> 'clients.store',
				'role'=> 'form'
			)) }}
    		<div class="form-group">
    			<div class="row">
    				<div class="col-md-5">
					{{ Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Nom del nou client...', 'required' => 'required']); }} 
					{{ errors_for('name', $errors)}}
					</div>
					<div class="col-md-4">
					<small>
						{{ Form::text('location', null, ['class'=>'form-control', 'placeholder' => 'Ciutat...', 'required' => 'required']); }}
						{{ errors_for('location', $errors)}}
					</small>
					</div>
					<div class="col-md-3">
					<small>
						{{ Form::select('type_id', array(
							'1' => 'Ajuntament', 
							'2' => 'Casa de colònies',
							'3' => 'Companyia',
							'4' => 'Empresa',
							'5' => 'Entitat',
							'6' => 'Escola',
							'7' => 'Persona',
							'8' => 'Programador',
							'9' => 'Teatre',
							'10' => 'Treballador'
							), null,['class'=>'form-control', 'required' => 'required']); }}
					</small>
					</div>
				</div>
			</div>
		</h1> 

		<hr>

		<div class="row fitxa">
			<div class="col-md-2">
				<div class="profile_foto">
					<img src="/assets/img/utils/client.jpg" alt="imatge client">
				</div>
			</div>
			<div class="col-md-10">
				<div class="profile_info">
					<div class="bio">
							<small>Persona de contacte:</small> 
								<div class="row">
									<div class="col-md-4">
										{{ Form::text('contact_name', null, ['class'=>'form-control', 'placeholder' => 'Nom ...', 'required' => 'required']); }} 
										{{ errors_for('contact_name', $errors)}}
									</div>
									<div class="col-md-4">
										{{Form::text('contact_familyname', null, ['class'=>'form-control', 'placeholder' => 'Cognom...', 'required' => 'required']); }}
										{{ errors_for('contact_familyname', $errors)}}
									</div>
								</div>
							<small>Telèfons de contacte: </small>
								<div class="row">
									<div class="col-md-4">
										{{ Form::text('phone1', null, ['class'=>'form-control', 'placeholder' => 'Telèfon...', 'required' => 'required']); }}
										{{ errors_for('phone1', $errors)}}
									</div>
									<div class="col-md-4">
										{{ Form::text('phone2', null, ['class'=>'form-control', 'placeholder' => 'Telèfon alternatiu...']); }}
										{{ errors_for('phone2', $errors)}}
									</div>
								</div>
							<small>Emails de contacte: </small>
								<div class="row">
									<div class="col-md-4">
										{{ Form::email('email1', null, ['class'=>'form-control', 'placeholder' => 'Email...', 'required' => 'required']); }}
										{{ errors_for('email1', $errors)}}
									</div>
									<div class="col-md-4">
										{{ Form::email('email2', null, ['class'=>'form-control', 'placeholder' => 'Email alternatiu...']); }}
										{{ errors_for('email2', $errors)}}
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
									<small>Adreça de contacte:</small> 
										{{ Form::text('address', null, ['class'=>'form-control', 'placeholder' => 'Adreça...']); }}
										{{ errors_for('address', $errors)}}
									</div>
									<div class="col-md-3">
									<small>Codi postal:</small> 
										{{ Form::text('cp', null, ['class'=>'form-control', 'placeholder' => 'Codi postal...']); }}
										{{ errors_for('cp', $errors)}}
									</div>
									<div class="col-md-3">
									<small>País: </small>
										{{ Form::text('country', null, ['class'=>'form-control', 'placeholder' => 'País...']); }}
										{{ errors_for('country', $errors)}}
									</div>
								</div>
							<div class="row">
								<div class="col-md-4">
									<small>Referència:</small> 
									{{ Form::text('ref', null, ['class'=>'form-control', 'placeholder' => 'DNI / NIF / CIF...']); }}
									{{ errors_for('ref', $errors)}}
								</div>
								<div class="col-md-4"> 
									<small>Sector:</small> 
									{{ Form::select('sector_id', array(
										'1' => 'Aeronáutica - Aeroespacial y Defensa', 
										'2' => 'Agricultura - Ganadería - Pesca y Jardinería',
										'3' => 'Alimentación y Bebidas - Productos y Servicios',
										'4' => 'Arte y Cultura',
										'5' => 'Artes Gráficas, Papel y Cartón, Envases y Embalajes',
										'6' => 'Automoción - Automóviles - Autocaravanas y Motos',
										'7' => 'Automoción - Vehículos Industriales',
										'8' => 'Comercio y Servicios- Artículos, Productos, Reparación y Servicios',
										'9' => 'Construcción y Actividades Diversas',
										'10' => 'Deportes, Ocio, Espectáculos, Eventos, Servicios Culturales y Plataformas Online',
										'11' => 'Educación - Enseñanza - Guarderías y ludotecas',
										'12' => 'Electricidad - Electrónica y alta Tecnología',
										'13' => 'Energía e Industrias de Energía de Electricidad, Gas y Agua',
										'14' => 'Estética y Cuidado Personal - Equipamiento, Productos y Servicios',
										'15' => 'Hostelería y Turismo - Hoteles - Restaurantes - Viajes',
										'16' => 'Informática - Internet - Multimedia - Fotografía - Imagen y Sonido',
										'17' => 'Ingeniería',
										'18' => 'Inmobiliarias - Inmobiliarios',
										'19' => 'Madera y Mueble - Productos y Servicios',
										'20' => 'Maquinaria y Herramientas, Motores, Componentes, Equipamiento e Industrias Automotriz',
										'21' => 'Medio Ambiente - Maquinaria y Servicios',
										'22' => 'Metal - Metalurgia y Siderometalúrgia',
										'23' => 'Minerales Metálicos y no Metálicos',
										'24' => 'Minería e Industrias Extractivas',
										'25' => 'Naval - Construcción, Productos y Servicios Portuarios',
										'26' => 'Obras Públicas - Maquinaria, Productos y Servicios',
										'27' => 'Organismos Oficiales, Administraciones Púbicas y Ayuntamientos',
										'28' => 'Profesionales Colegiados y Autónomos',
										'29' => 'Química, Petroquímica, Caucho y Plástico',
										'30' => 'Sanidad, Especialidades Médicas, Clínicas, Servicios Sociales y Equipamientos',
										'31' => 'Seguridad y Mantenimiento',
										'32' => 'Servicios Empresariales',
										'33' => 'Servicios Técnicos de Reparación y Mantenimiento',
										'34' => 'Stock de Maquinaria, Herramientas y Productos',
										'35' => 'Suministros Industriales',
										'36' => 'Tecnología de Procesos y Sistemas',
										'37' => 'Telecomunicaciones',
										'38' => 'Textil y Piel - Calzado y Marroquinería - Productos - Fabricación y Confección',
										'39' => 'Transporte y Logística',
										), null,['class'=>'form-control','style'=>'', 'required' => 'required']); }}
									{{ errors_for('sector', $errors)}}
								</div>
							</div>
					</div>
				</div>
			</div>
			<div class="row">
				{{--@include('layouts.partials.tabs')--}}
			</div>
		</div>
		<div class="row">
			{{Form::submit('Registra', ['class'=>'btn btn-success pull-right'])}}
		</div>
	</div>

	{{ Form::close() }}

	<div class="summary">
			
	</div>

@stop

@section('scripts')

@stop

@section('footer')
	{{-- @include('layouts.partials.copyright') --}}
@stop