@extends('layouts.master')


@section('title')
	Escola de teatre Magatzem d'Ars
@stop



@section('content')

<div class="">
	<div class="container">
		<div class="col-md-4 col-xs-6">
			<a href="#professionals" id="professionals_link">
				<div class="shadow1">
					<div class="content fons9">
						Estudis professionals / Formació de l’actor
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-xs-6">
			<a href="#infantils" id="infantils_link">
				<div class="shadow1">
					<div class="content fons10">
						Cursos infantils “Apren jugant” 
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-xs-6">
			<a href="#juvenils" id="juvenils_link">
				<div class="shadow1">
					<div class="content fons11">
						Cursos juvenils “El teatre és més que un joc” (de 12 a 16 anys)
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-xs-6">
			<a href="#adults" id="adults_link">
				<div class="shadow1">
					<div class="content fons12">
						Cursos per adults “Muntem una companyia”
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-xs-6">
			<a href="#intensius" id="intensius_link">
				<div class="shadow1">
					<div class="content fons13">
						Intensius / Monogràfics / Tallers
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-xs-6">
			<a href="#casals" id="casals_link">
				<div class="shadow1">
					<div class="content fons14">
						Casals  i colònies d’estiu
					</div>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="text-center">
	<div id="professionals" class="middles not_displayed">
		<div class="container">
			<h2>Estudis professionals / Formació de l’actor</h2>
			<p>
				<ul>
					<li>1er any</li>
					<br>
					<p>
						Aprendràs a moure’t, a sentir, a expressar-te i a comunicar-te pel món del teatre i els seus escenaris amb les nostres classes d’interpretació, dansa, dicció, cant i concentració. L’objectiu és dedicar tot aquest curs a aconseguir donar-te una base sòlida, neta i estable perquè puguis començar a treballar qualsevol escena i/o personatge. Quan comencem a pujar a un escenari, ens costa moure’ns, parlar i comportar-nos amb normalitat. Això passa perquè entrem a un nou món on les emocions i els tabus brollen de manera descontrolada i per tant, s’ha de començar de zero: aprendre a caminar, a parlar, a comunicar, a seure a prendre un cafè, etc.
					</p>
					<br>
					<li>2on any</li>
					<br>
					<p>
						Posaràs en pràctica tot el que has treballat el 1er any i començarem a aprendre com es crea un personatge, com s’estructura la feina a fer, i com s’aprofundeix en ell per arribar a extreure’n les seves emocions i transmetre-les al públic. El nostre professorat et formarà en interpretació, cant, dansa, cos, text, dicció i càmera.
					</p>
					
					<br>
					<li>3er any</li>
					<br>
					<p>
						Un any de perfeccionament on ja s’encara el muntatge real d’un espectacle, rodarem un curtmetratge, i on es realitzaran pràctiques reals amb representacions de l’espectacle a sales de Barcelona i on coneixereu la realitat del món teatral des de les seves entranyes. 
					</p>	
				</ul>
			</p>
			<p>	
				@include('layouts.partials.informat')
				<a href="mailto:cursos@magatzemdars.com"><h4>Informa't dels cursos</h4></a>
			</p>
		</div>
	</div>

	<div id="infantils" class="middles not_displayed">
		<div class="container">
			<h2>Cursos infantils “Apren jugant” (de 5 a 11 anys)</h2>
			<p>
				<ul>
					En aquesta etapa de creixement i desenvolupament de l’infant tan important, és interessant treballar les emocions i els sentiments des d'una perspectiva integral, començant per posar nom als diversos tipus d'emocions existents, aquestes es poden treballar des de l'àrea sensorial, conectant-les amb tot allò que aquestes generen a nivell intern i l’expressió que se'n deriva; a un nivell corporal (reaccions fisiològiques), d'expressió facial (com s'expressa) i vocal (com es manifesta mitjançant l'eina de la veu). És important que comprenguin que l'individu compta amb diverses eines que connectades de la forma adequada poden transmetre missatges, intencions, actituds i accions. Així és com s'inicia la interpretació i es fa possible crear un personatge. També es treballa a partir de la imitació, el joc simbòlic, el mim, la relaxació, la lliure expressió i associació, el contacte amb l'altre, el treball en equip...tots ells recursos que permeten a l'infant anar-se alliberant i generar un espai on la creativitat i la espontaneitat siguin el punt de partida a l’hora d'endinsar-se en el món del teatre
				</ul>
			</p>
			<p>	
				@include('layouts.partials.informat')
				<a href="mailto:cursos@magatzemdars.com"><h4>Informa't dels cursos</h4></a>
			</p>
		</div>
	</div>
		
	<div id="juvenils" class="middles not_displayed">
		<div class="container">
			<h2>Cursos juvenils “El teatre és més que un joc” (de 12 a 16 anys)</h2>
			<p>
				<ul>
					En aquesta etapa ja adolescent, el noi/a té capacitat per pensar, reflexionar i posar en dubte. Les emocions i sentiments prenen matisos que abans eren desconeguts i les contradiccions, la diferenciació i la necessitat de rebelia agafen un paper més protagonista. Aprofitant aquest moment vital tan explosiu, el teatre esdevé un recurs mitjançant el qual es poden canalitzar molts dels seus dubtes, inquietuds i curiositats. En aquest sentit, la vessant comunicativa pren el relleu i es cercaran formes per expressar, per relacionar-se, i per transmetre missatges concrets. El treball en equip, la confiança en l'altre, la posada en escena de situacions, la interpretació de textos o la improvitsació seran eines útils a l'hora de fer front a l'art del teatre.
				</ul> 
			</p>
			<p>	
				@include('layouts.partials.informat')
				<a href="mailto:cursos@magatzemdars.com"><h4>Informa't dels cursos</h4></a>
			</p>
		</div>
	</div>

	<div id="adults" class="middles not_displayed">
		<div class="container">
			<h2>Cursos per adults “Muntem una companyia”</h2>
			<p>
				<ul>
					En aquesta etapa l'individu ja coneix els elements dels que disposa a l’hora d'actuar; un cos, una veu i una intenció. L'adequat equilibri entre aquests recursos és el que determina la tècnica a l’hora de dur a terme una bona interpretació. En aquesta línia, es treballaran infinitat de situacions que permetin posar en pràctica els diversos recursos per crear un personatge i escenificar una escena. Es treballa també la deshinibició, la capacitat de relacionar-se, la complicitat, i es poliran els matisos que marquen la diferència, aconseguint que les interpretacions siguin genuïnes i extraient aquell potencial que cadascú té de forma innata. Incentivem i potenciem la creació d’una companyia de teatre pròpia.
				</ul>
			</p>
			<p>	
				@include('layouts.partials.informat')
				<a href="mailto:cursos@magatzemdars.com"><h4>Informa't dels cursos</h4></a>
			</p>
		</div>
	</div>

	<div id="intensius" class="middles not_displayed">
		<div class="container">
			<h2>Intensius / Monogràfics / Tallers</h2>
			<p>
				<ul>
					<li>
						Curs d’Iniciació al Teatre, impartit per Òscar Dominguez
					</li>
					<li>
						Curs de tècnica vocal, impartit per Gemma Costa.
					</li>
					<li>
						Curs de preparació per castings, impartit per Albert Pueyo.
					</li>
				</ul>
			</p>
			<p>	
				@include('layouts.partials.informat')
				<a href="mailto:cursos@magatzemdars.com"><h4>Informa't dels cursos</h4></a>
			</p>
		</div>
	</div>

	<div id="casals" class="middles not_displayed">
		<div class="container">
			<h2>Casals  i colònies d’estiu</h2>
			<p>
				
			</p>
		<p>	
			@include('layouts.partials.informat')
			<a href="mailto:cursos@magatzemdars.com"><h4>Informa't dels cursos</h4></a>
		</p>
		</div>
	</div>
</div>

@include('layouts.partials.contact_subscribe')

@stop

@section('footer')
@stop