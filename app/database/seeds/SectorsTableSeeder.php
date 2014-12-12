<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SectorsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');

			Sector::create([
				'sector' => 'Aeronáutica - Aeroespacial y Defensa',
			]);
			Sector::create([
				'sector' => 'Agricultura - Ganadería - Pesca y Jardinería',
			]);
			Sector::create([
				'sector' => 'Alimentación y Bebidas - Productos y Servicios',
			]);
			Sector::create([
				'sector' => 'Arte y Cultura',
			]);
			Sector::create([
				'sector' => 'Artes Gráficas, Papel y Cartón, Envases y Embalajes',
			]);
			Sector::create([
				'sector' => 'Automoción - Automóviles - Autocaravanas y Motos',
			]);
			Sector::create([
				'sector' => 'Automoción - Vehículos Industriales',
			]);
			Sector::create([
				'sector' => 'Comercio y Servicios- Artículos, Productos, Reparación y Servicios',
			]);
			Sector::create([
				'sector' => 'Construcción y Actividades Diversas',
			]);
			Sector::create([
				'sector' => 'Deportes, Ocio, Espectáculos, Eventos, Servicios Culturales y Plataformas Online',
			]);
			Sector::create([
				'sector' => 'Educación - Enseñanza - Guarderías y ludotecas',
			]);
			Sector::create([
				'sector' => 'Electricidad - Electrónica y alta Tecnología',
			]);
			Sector::create([
				'sector' => 'Energía e Industrias de Energía de Electricidad, Gas y Agua',
			]);
			Sector::create([
				'sector' => 'Estética y Cuidado Personal - Equipamiento, Productos y Servicios',
			]);
			Sector::create([
				'sector' => 'Hostelería y Turismo - Hoteles - Restaurantes - Viajes',
			]);
			Sector::create([
				'sector' => 'Informática - Internet - Multimedia - Fotografía - Imagen y Sonido',
			]);
			Sector::create([
				'sector' => 'Ingeniería',
			]);
			Sector::create([
				'sector' => 'Inmobiliarias - Inmobiliarios',
			]);
			Sector::create([
				'sector' => 'Madera y Mueble - Productos y Servicios',
			]);
			Sector::create([
				'sector' => 'Maquinaria y Herramientas, Motores, Componentes, Equipamiento e Industrias Automotriz',
			]);
			Sector::create([
				'sector' => 'Medio Ambiente - Maquinaria y Servicios',
			]);
			Sector::create([
				'sector' => 'Metal - Metalurgia y Siderometalúrgia',
			]);
			Sector::create([
				'sector' => 'Minerales Metálicos y no Metálicos',
			]);
			Sector::create([
				'sector' => 'Minería e Industrias Extractivas',
			]);
			Sector::create([
				'sector' => 'Naval - Construcción, Productos y Servicios Portuarios',
			]);
			Sector::create([
				'sector' => 'Obras Públicas - Maquinaria, Productos y Servicios',
			]);
			Sector::create([
				'sector' => 'Organismos Oficiales, Administraciones Púbicas y Ayuntamientos',
			]);
			Sector::create([
				'sector' => 'Profesionales Colegiados y Autónomos',
			]);
			Sector::create([
				'sector' => 'Química, Petroquímica, Caucho y Plástico',
			]);
			Sector::create([
				'sector' => 'Sanidad, Especialidades Médicas, Clínicas, Servicios Sociales y Equipamientos',
			]);
			Sector::create([
				'sector' => 'Seguridad y Mantenimiento',
			]);
			Sector::create([
				'sector' => 'Servicios Empresariales',
			]);
			Sector::create([
				'sector' => 'Servicios Técnicos de Reparación y Mantenimiento',
			]);
			Sector::create([
				'sector' => 'Stock de Maquinaria, Herramientas y Productos',
			]);
			Sector::create([
				'sector' => 'Suministros Industriales',
			]);
			Sector::create([
				'sector' => 'Tecnología de Procesos y Sistemas',
			]);
			Sector::create([
				'sector' => 'Telecomunicaciones',
			]);
			Sector::create([
				'sector' => 'Textil y Piel - Calzado y Marroquinería - Productos - Fabricación y Confección',
			]);
			Sector::create([
				'sector' => 'Transporte y Logística',
			]);
	}

}