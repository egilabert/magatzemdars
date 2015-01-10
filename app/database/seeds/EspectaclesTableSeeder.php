<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EspectaclesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');

			Espectacle::create([

				'title' => 'Blancaneus i els 7 nans',
				'autor' => 'Jacob i Wilhelm Grimm',
				'adaptacio' => 'Oriol Borés',
				'durada' => 65,
				'obra' => 'Hi havia una vegada una reina molt vanitosa que preguntava cada dia al seu mirall màgic qui era la dona més bonica del món i ell sempre responia que la més bonica era Sa Majestat. Però un dia la resposta va canviar i el mirall va dir que la Blancaneu, la nova criada de la reina, era la més bonica del món. En assabentarse\'n, la reina farà tots els possibles per desfer-se de la noia, però la Blancaneu comptarà amb l\'ajuda dels set nans del bosc i l\'amor del príncep. N\'hi haurà prou per parar els peus a la reina malvada? Després de l\'èxit de "La caputxeta i el llop", MAGATZEM D\'ARS torna a adaptar un conte dels germans Grimm amb un humor fresc i dinàmic que captivarà grans i petits.',
				'creacio' => '“Blacaneus i els 7 nans” és un espectacle entranyable fet amb molt d\'amor i amb un treball interpretatiu molt acurat. Durant la representació, l\'espectador riu, s\'emociona i es sorprèn, perquè l\'adaptació de Magatzem d\'Ars aporta frescor i dinamisme a la història. S\'ha volgut apropar la posada en escena i l\'humor a l\'estil de la saga cinematogràfica “Shrek”, tot sent fidels a la filosofia del conte original. D\'altra banda, s\'ha tingut en compte els pares que, al cap i a la fi, són els que porten els nens al teatre. Per aquest motiu, també trobaran gags i acudits destinats a ells. Tant els actors com l\'equip tècnic desitgem que els espectadors gaudeixin de l\'espectacle tant com nosaltres hem gaudit desenvolupant-lo i gaudim representant-lo.',
				'escenagrafia' => 'L\'escenografia consta de dos decorats: un castell a la primera part i un bosc amb la caseta dels nans a la segona part. Es juga amb un fons base i uns elements mòbils que giraran als canvis d’escena.',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'infantil',
				'image' => '/assets/img/blancaneus.png',
				'video' => '//www.youtube.com/embed/AN8F4efeRDM',
				'dossier' => '/assets/Documents/Blancaneus - Dossier_cat.pdf'
			]);

			Espectacle::create([

				'title' => 'La Caputxeta i el llop',
				'autor' => 'Jacob i Wilhelm Grimm',
				'adaptacio' => 'Oriol Borés',
				'durada' => 60,
				'obra' => 'Hi havia una vegada una noia anomenada Caputxeta Vermella que havia de portar una cistella a la seva àvia. La cistella conté els ingredients necessaris perquè l’àvia pugui preparar un bon pastís per participar a un concurs. Tot creuant el bosc, la Caputxeta coneix un llop que l’enganyarà per ser el primer en arribar a casa de l’àvia i menjar-se tots els pastissos... i qualsevol altra cosa que trobi pel mig.',
				'creacio' => 'Quan van demanar-me portar a escena el conte de “La Caputxeta i el llop”, potser el conte que més vegades s\'ha narrat, vaig proposar-me fer una cosa divertida i fidel a la meva imaginació, tot intentant recordar com visualitzava de petit aquell conte infantil que tantes vegades havia sentit en boca de la meva mare. “La Caputxeta i el llop” és un espectacle amb una bona escenografia, funcional i pràctica, amb elements dels dibuixos animats dels anys 60 i amb unes bones interpretacions que parteixen d\'una adaptació del conte molt encertada i pròxima als nens. La unió en escena de personatges de carn i ossos i titelles, acompanyada d\'un disseny i esperit molt divertits, juntament amb una música i unes coreografies molt ben creades, aconseguim representar un espectacle ple de màgia i de detalls.',
				'escenagrafia' => 'L\'obra s\'inicia en un espai interior que representa l\'entrada d\'un bosc. A l\'espai frontal actuen els actors i a l\'espai de darrere dels arbustos grans actuen les titelles. Una vegada la Caputxeta s\'introdueix al bosc, apareixen dos arbres que donen més profunditat a l\'escenari. Una vegada arribem a la segona part del muntatge, que transcorre a la casa de l\'àvia, l\'escenari es transforma en un gran teatre.',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'infantil',
				'image' => '/assets/img/caputxeta.png',
				'video' => '//www.youtube.com/embed/K42uSaLhUcQ',
				'dossier' => '/assets/Documents/Caputxeta - Dossier_cat.pdf'
			]);

			Espectacle::create([

				'title' => 'La rateta que escombrava l’escaleta',
				'autor' => 'Fernán Caballero',
				'adaptacio' => 'Mar Colàs',
				'durada' => 60,
				'obra' => 'Hi havia una vegada una rateta que escombrava l’escaleta. La rateta era una jove bonica i encisadora, però era d’allò més despistada i li agradava ben poc treballar. Ella encara continuava somniant amb el seu príncep blau, tot i que començava a sentir-se farta d’esperar. Un bon dia, la rateta va trobar un dineret i va comprar un llacet preciós. Ben aviat, comencen a acostar-s’hi pretendents de tota mena, cadascun virtuós d’un estil musical diferent. El gall, el gos, l’ase, la cabra i el gat cantaran i ballaran per a la rateta. Qui serà l’escollit per la protagonista?',
				'creacio' => '“La rateta que escombrava l’escaleta” és un espectacle musical on la dansa juga un paper principal. Hem treballat l’adaptació del conte perquè cada animal que ve a demanar la mà a la rateta representi un estil musical del darrer segle i, per tant, sedueixin la protagonista a través del ball i del cant. A més a més, cada pretendent està acompanyat d’un cor que reforçarà l’espectacularitat dels números musicals, fent que aquest muntatge sigui un gran xou. Cinc són els pretendents i cinc són els estils. Durant el nostre recorregut musical, tractem el swing, el rock, el jazz, el disco-funky i el tango. D’altra banda, la rateta ballarà alguns números de claqué en algunes escenes. Amb aquest espectacle, Magatzem d’Ars vol oferir un gran xou per a tota la família, a la vegada que apropa el món de música i la dansa als més petits a través d’una història que és tota una lliçó d’humilitat.',
				'escenagrafia' => '',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'infantil',
				'image' => '/assets/img/rateta.png',
				'video' => '//www.youtube.com/embed/RYqrRBy1sgE',
				'dossier' => '/assets/Documents/Dossier Rateta.pdf'
			]);

			Espectacle::create([

				'title' => 'Cyrano de Bergerac',
				'autor' => 'Edmond Rostand',
				'adaptacio' => 'Albert Pueyo',
				'durada' => 70,
				'obra' => 'Cyranode Bergerac és a la vegada el guerrer més magistral i fanfarró amb l\'espasa, i el més brillant, irònic i enginyós amb la ploma. Només hi ha una sola cosa que l\'aturmenta; el seu nas desproporcionat. Per aquest motiu, ha desenvolupat una imprevisible susceptibilitat i un agut sentit del ridícul que li priven d\'intentar conquistar a la més bella de totes les dames; Roxanna.Cyranotrobarà la manera d\'expressar tot l\'amor que sent per Roxannaa través de Cristian, el soldat jove i atractiu a qui ella adora. Degut a la falta de d\'enginy poètic per part del jove, Cyranoescriurà per ell apassionades cartes d\'amor a Roxannaque el faran viure la més crua de totes les batalles.Un engany sublim i un sacrifici conscient que faran que el seu amor es vegi correspost a través d\'un altre.Només el destí i el pas del temps podran fer obrir els ulls de Roxannai revelar-li qui és el seu gran amor.Potser llavors ja serà massa tard.',
				'creacio' => 'Cyranode Bergerac, ha estat representada més de 200 vegades per tot l’estat. Posteriorment, va ser estrenada al Teatre Borràs de Barcelona amb una única representació amb gran èxit de públic i crítica. Al 2003 va guanyar el Premi Ciutat de Terrassa i també va ser representada al teatre Alegria de Terrassa amb un èxit rotund. A finals de Juny del 2004, Cyranode Bergeracva ser feta al claustre del Convent de St. Felip Neridel Barri de Gràcia, a l’aire lliure i en un espai real sense escenari. Al llarg del 2010 ha estat en cartell al Teatre Guasch de Barcelona, amb un èxit notable. Aquest és un espectacle de gran qualitat visual i d’una depurada interpretació, L’adaptació del text original realitzada pel nostre director, Albert Pueyo, i adaptada al català per Marta Fons, és d’uns 80 minuts aproximadament sense descans i manté un ritme trepidant, on els sentiments humans afloren en tot moment amb energia i convicció. L’ interpretació fuig en tot moment de quelcom teatral i encara que el text és en vers, la naturalitat és el que marca la interpretació de tots els personatges',
				'escenagrafia' => 'L\'escenografia esta composada per 3 elements mòbils provistosde rodes que permeten recrear els múltiples espais on és desenvolupa la trama de l\'obra, permeten una fluïdesa de la narració destacable',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'adult',
				'image' => '/assets/img/cyrano.png',
				'video' => '//www.youtube.com/embed/sbhOsaHlvMQ',
				'dossier' => '/assets/Documents/CYRANO DE BERGERAC 2011.pdf'
			]);

			Espectacle::create([

				'title' => 'Pell a Pell',
				'autor' => '',
				'adaptacio' => '',
				'durada' => '',
				'obra' => 'Un conegut director de teatre intenta escriure la seva obra mestra que el catapulti a la fama. Totes les seves obres no passen de ser mediocres i no troba la inspiració per fer el pas definitiu. Un bon dia de primavera coneixerà un personatge estrany que li proposarà una manera força original per escriure el seu guió definitiu. Tot es precipitarà al barrejar-se aquesta proposició amb una situació complexa amb la seva parella, que l´abocaràa acceptar la proposta del desconegut... Pell a Pell es una obra que barreja l´erotisme, la frivolitat i la comèdia a parts iguals.',
				'creacio' => 'Pell a pell és una obra a la que m’agrada batejar com a comèdia de la vida. Ingredients com la frivolitat, l´humor, la sorpresa, la dura i simple realitat i un bon grapat de sentiments produïts per les diferents situacions que provoca el text, són alguns dels ingredients d\'aquesta obra escènica. Tot el treball de direcció esta ideat per fer sentir a l´espectador, es busca potenciar el teatre d´ambients, es busca que el públic pugui gaudir d\'escenes que els hi facin aflorar des de tendresa a comprensió, passant per la majoria de sentiments humans. El teatre es art i com a tal ha de fer sentir, el que sigui, però no et pot deixar indiferent. Els proposem unes escenes quotidianes, que es compliquen a mesura que anem coneixent la realitat que amaguen els personatges, per arribar a un final contundent.',
				'escenagrafia' => '',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'adult',
				'image' => '/assets/img/pellapell.png',
				'video' => '//www.youtube.com/embed/P02ZTb3CNZQ',
				'dossier' => '/assets/Documents/DOSSIER PELL A PELL.pdf'
			]);

			Espectacle::create([

				'title' => 'La Sireneta',
				'autor' => 'Hans Christian Andersen',
				'adaptacio' => 'Oriol Borés',
				'durada' => '65',
				'obra' => 'L\'Ariel és una jove sirena que viu amb els seus amics al fons del mar. El dia del seu aniversari, la sireneta veu una nau governada pel príncep Èric i s\'enamora immediatament d\'ell. Llavors demana al seu pare, el déu Posidó, que li doni uns peus per sortir de l\'aigua i conèixer el príncep. Posidó s\'hi nega, perquè no vol que la seva filla sigui víctima de la barbàrie dels humans. La bruixa del mar ho aprofita per fer un tracte amb l\'Ariel; li donarà uns peus a canvi de la seva veu. Si abans de vint-i-quatre hores la sireneta aconsegueix un petó d\'amor del seu estimat, recuperarà la veu. Si no ho aconsegueix, la bruixa es quedarà amb la seva ànima per sempre més. Serà l\'Ariel capaç d\'enamorar el príncep Èric abans del termini sense el seu cant de sirena?',
				'creacio' => 'Aquest és un espectacle entranyable, fet amb molt d\'amor i amb un treball interpretatiu força acurat. Realment és una obra en la que podem riure i sorprendre’ns en qualsevol moment. Em volgut mostrar el conte des de un altre perspectiva, sempre mantenint la filosofia del conte original i els seus personatges. D\'altre banda, hem procurat tenir en compte que són els pares qui porten els nens al teatre, donant així un toc d’humor per als més grandets. En fi, tant els actors com tot \'equip tècnic hem gaudit preparant aquest projecte i gaudim actualment representant-lo .',
				'escenagrafia' => '',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'infantil',
				'image' => '/assets/img/lasireneta.png',
				'video' => '//www.youtube.com/embed/eHYe-sy56YQ',
				'dossier' => '/assets/Documents/DOSSIER SIRENETA.pdf'
			]);

			Espectacle::create([

				'title' => 'Heidi',
				'autor' => 'Johanna Spyri',
				'adaptacio' => 'Oriol Borés',
				'durada' => '50',
				'obra' => 'La Heidi és una nena que viu molt feliç a la muntanya al costat del seu avi. La seva tieta Dete l’enganya per anar a viure a la ciutat, però el canvi no agrada gens a la Heidi. Allà coneix la Clara, una nena que va en cadira de rodes. Totes dues es faran molt amigues i faran la vida impossible a l’estricta Srta. Rottenmeyer amb les seves entremaliadures. Tot i això, l’únic desig de la Heidi serà tornar a viure a la muntanya, envoltada d’animals i de la natura.',
				'creacio' => '“Heidi” és un espectacle entranyable fet amb molt d\'amor i amb un treball interpretatiu molt acurat. Durant la representació, l\'espectador riu, s\'emociona i es sorprèn, perquè l\'adaptació de Magatzem d\'Ars aporta frescor i dinamisme a la història. S\'ha volgut donar molta importància a la natura i a tot el que això comporta: gaudir de la companyia dels animals, estimar el nostre entorn, etc.. D\'altra banda, s\'ha tingut en compte els pares que, al cap i a la fi, són els que porten els nens al teatre. Per aquest motiu, també trobaran gags i acudits destinats a ells. Tant els actors com l\'equip tècnic desitgem que els espectadors gaudeixin de l\'espectacle tant com nosaltres hem gaudit desenvolupant-lo i gaudim representant-lo.',
				'escenagrafia' => 'Consta d\'una casa de camp que, en obrir-se, es transforma en l\'interior d\'una casa de família rica de ciutat. La casa disposa d\'una finestreta que s\'obre i per on apareix el Pitxi, un ocellet amic de la Heidi. Els laterals de la casa de camp estan decorats amb arbres, una tanca, gallines, una cadira i un tamboret. En el frontis, als laterals, hi ha uns matolls d’herba que serveixen per donar profunditat i per treure les titelles. L\'interior de la casa de família rica disposa de quadres amb ombres xineses de diferents mesures, una finestra per on apareix el gatet amb cortina, una taula, una cadira i un bagul on desar les nines.',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'infantil',
				'image' => '/assets/img/heidi.png',
				'video' => '//www.youtube.com/embed/xlh3FrLe7n4',
				'dossier' => '/assets/Documents/Heidi - Dossier_cat.pdf'
			]);

			Espectacle::create([

				'title' => 'L\'illa del tresor',
				'autor' => 'Robert Louis Stevenson',
				'adaptacio' => 'Oriol Úbeda',
				'durada' => '65',
				'obra' => 'En Jim Hawkins és un nen que somnia amb ser mariner algun dia mentre serveix gerres de rom a la taverna familiar. Una nit, en Jim rep un cofre de mans d’un vell pirata moribund. Dins del cofre hi ha un mapa que condueix a una illa remota on s’amaga el tresor del pirata més sanguinari de tots els temps... el capità Flint. A partir d’aquest moment, en Jim s’embarcarà en l’aventura més gran de la seva vida sortejant perills i traïcions de tota mena.',
				'creacio' => 'Quan se’ns va presentar l’oportunitat de fer L’Illa del Tresor, no varem dubtar ni per un moment que era una gran oportunitat per fer una part dels nostres somnis realitat. Qui no ha somiat alguna vegada en ser un pirata i navegar pel mar en busca d’aventures?  Aquest és un projecte que vàrem agafar junt amb l’Oriol Ubeda amb moltes ganes i molt de carinyo, és per això que s’ha convertit en un espectacle rodó interpretat amb molta energia i il.lusió.',
				'escenagrafia' => 'L\'escenografia consta d’un gran vaixell de fusta amb un sistema de costelles folrades amb tires de fusta de 3mm tintades de color fosc. El vaixell està construït en dues parts separades: la proa i la popa. La proa mesura 1,80 m. de llarg x un 1,50 m. d\'alt. Està fabricada amb fusta i folrada de fusta fosca en tires amb dues línies horitzontals excel·lents. A més disposa de dos marcs per a les finestres calades. Té una balconada amb la seva barana, d\'uns 25 cm. d\'alt x 90 cm. D\'ample. La popa mesura 1,80 m. d\'ample x uns 2 m. d\'alçada. També està composta per fusta i folrada en fusta fosca a tires. A més a més, el vaixell consta de tres pals de cartró, amb el seu mirador amb barana. L’attrezzo es complementa amb barrils de rom, sacs, galledes de fusta de pi antigues i diversos elements que permeten canviar les escenes amb simples moviments dels objectes. Cada part del vaixell té unes rodes que permeten el seu gir i desplaçament. Una de les parts del vaixell és una cantina per darrere i l\'altra part és el fort de l\'illa.',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'infantil',
				'image' => '/assets/img/illa.png',
				'video' => '//www.youtube.com/embed/z9S4sK_Ngw8',
				'dossier' => '/assets/Documents/Illa - Dossier_cat.pdf'
			]);

			Espectacle::create([

				'title' => 'El malalt imaginari',
				'autor' => 'Molière',
				'adaptacio' => 'Albert Pueyo',
				'durada' => '100',
				'obra' => '"El malalt imaginari" és l\'última obra que va escriure Molière, pseudònim del dramaturg i actor francès Jean-Baptiste Poquelin (1622-1673). Amb aquest text, Molière culminava una carrera artística destacada per l\'ús que en feia de la comèdia i el riure per criticar els convencionalismes de les classes benestants, que al seu parer enaltien una intel·lectualitat falsa guarnida d\'una retòrica grandiloqüent i buida de contingut. Concretament, "El malalt imaginari" ataca els metges de l\'època, molts dels quals amagaven la seva ignorància amb mentides, una situació que Molière va patir de primera mà. L\'adaptació de Magatzem d\'Ars aprofita la farsa del text original per fer un retrat satíric de la societat d\'avui dia, en la que pràcticament tothom ‒no només els de casa bona‒ fa tot el possible per mantenir unes convencions i un estil de vida incompatibles amb el signe dels temps i, des de la crisi econòmica, visiblement insostenibles. I també s\'ataca la hipocresia dels que s\'aprofiten de la credulitat i la desorientació de la gent, encara que ara la hipocresia no prové dels metges, sinó dels corruptes de les classes dirigents, dels que s\'aprofiten del poder en benefici propi, dels santons que prometen remeis miraculosos, dels endevins que escuren les butxaques dels crèduls, dels conservadors que es fan passar per progressistes i dels moralistes que només veuen la brossa a l\'ull de l\'altre. Amb l\'objectiu d\'apropar el text al públic d\'avui, s\'ha escurçat l\'obra i s\'ha concentrat l\'acció per donar-li més dinamisme. També s\'ha optat per naturalitzar les interpretacions i la posada en escena, la qual cosa és poc habitual en les representacions de les obres de Molière. A més a més, s\'ha optat per una escenografia i una estètica modernes, tot plegat per donar a l\'espectador la sensació que el text s\'ha concebut en els nostres dies.',
				'creacio' => 'En cap moment, el meu objectiu ha sigut fer una representació més d\'"El malalt imaginari". De fet, volia representar un Molière des de la naturalitat, tot barrejant conceptes com la pervivència del classicisme carca a les famílies i l\'estat actual de la nostra societat, víctima de retallades i d\'aprofitats amb poder que maneguen les nostres vides. Malauradament, això és quelcom que ha existit des dels principis de la humanitat i que ara torna a esclatar amb força. El fet de penjar tot el mobiliari amb cordes representa, evidentment, la inestabilitat per una banda i el fil del que pengen les nostres vides per l\'altra, perquè si els banquers o els polítics estiren aquest fil, ens poden deixar a la misèria. Tal i com caracteritza la nostra companyia, hem treballat amb profunditat el subtext de l\'espectacle, el recorregut dels personatges i la coherència de les interpretacions, així com els objectius que cada personatge ha d\'assolir en cadascuna de les escenes de l\'obra. Crec que el resultat és una proposta atrevida, elegant, còmica i ben mesurada, de la que em sento força orgullós. En definitiva, un espectacle digne de veure que no decebrà el públic.',
				'escenagrafia' => 'A l\'hora de dissenyar l\'escenografia de l\'espectacle, s\'ha optat per crear un espai simbòlic de gran força visual. L\'espai escènic representa la sala d\'estar de la casa de l\'Argan, on destaquen tres zones: la taula, el sofà i les tauletes amb les begudes i el telèfon. Tots els mobles estan fets de palets i estan agafats amb cordes, fent la impressió que tot el mobiliari penja del sostre. D\'aquesta manera, els elements escenogràfics expressen la inestabilitat del protagonista i de la seva vida familiar. Cal destacar que tots els elements d\'attrezzo són grocs, color considerat maleït al nostre país perquè la tradició diu que Molière va morir vestit de groc quan representava "El malalt imaginari". En canvi, els mobles estan pintats de lila, el color maleït d\'Itàlia, bressol de la Commedia dell\'Arte que tant va inspirar Molière en la creació de les seves obres. El fons és blanc per potenciar la il·luminació i destacar els actors vestits de negre.',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'adult',
				'image' => '/assets/img/malalt.png',
				'video' => '//www.youtube.com/embed/ERgmH8oFo4Y',
				'dossier' => '/assets/Documents/Malalt - Dossier_cat.pdf'
			]);

			Espectacle::create([

				'title' => 'Món obscur',
				'autor' => 'Albert Pueyo',
				'adaptacio' => 'Albert Pueyo',
				'durada' => '80',
				'obra' => 'En el món de la foscor, l\'amargor i la crueltat marquen les vides d\'en Fretz i el seu fill Jouli. Tots dos duen una existència buida de sentiments i calor humà, com tots els habitants de la foscor, però en Jouli la detesta. En Fretz ha promès al seu fill portar-lo al món de la llum un cop tinguin tot el necessari, que ho aconsegueixen assassinant els pobres incauts que van a parar a la seva llar, i ara només els cal una víctima més. Com si d\'un regal es tractés, arriben dues dones que s\'han extraviat, la Maria i la seva filla Àngels. Cap de les dues semblen ser de la zona, perquè desprenen una llum que aclareix la negror del món de la foscor. En Fretz les acull a casa per complir els seus objectius, mentre en Jouli sent una estranya sensació agradable quan sent la llum de prop. Magatzem d\'Ars presenta aquest drama poètic que tracta sobre la dificultat de posar una línia divisòria entre el bé i el mal, una frontera que sovint es desdibuixa en cadascun de nosaltres.',
				'creacio' => 'Aquest és un projecte que va néixer fa dos anys i que, fins a dia d\'avui, s\'ha anat desenvolupant sense passar-ho a paper. N\'hem parlat hores i hores, esperant l\'ocasió idònia per tirar-lo endavant. No volíem malgastar un projecte d\'aquesta envergadura sense un ajut important al darrere. La nostra empresa fa molts anys que treballa i subsisteix en un món on la majoria de companyies reben ajuts institucionals i amb les quals és molt difícil de competir per aquest motiu. Per fi hem trobat el moment per tirar endavant el nostre projecte, gràcies a la possibilitat que ofereix el premi Quim Masó, del qual en desconeixíem l\'existència. Hem tingut molt pocs dies per plasmar totes les nostres idees i probablement hi haurà coses per arranjar, encara que estem acostumats a millorar i acabar de donar forma als espectacles durant la fase d\'assaigs, que és quan aprofundim en el missatge que volem fer arribar a l\'espectador. Com a director, considero aquest espectacle tot un bombonet, perquè reuneix totes les condicions per aprofundir en el relat des de totes les disciplines: la il·luminació, l\'escenografia, la posada en escena, el maquillatge, el vestuari, la música, les interpretacions, les relacions entre els personatges. En cadascuna d\'elles es pot treballar sense límits i estic convençut que el nostre equip pot fer una gran feina que espero compartir amb tots vosaltres i el gran públic. Quant a la interpretació, la línia a seguir és la que mateixa que fa anys que perfeccionem, la recerca de la veritat a dalt de l\'escenari, perquè arribin a l\'espectador les sensacions que viuen els personatges. Cada actor haurà de treballar molt a fons el recorregut del seu personatge, les relacions que manté amb els altres personatges, així com les intencions i objectius de cada escena. Personalment, m\'agrada assajar fins a l\'extenuació, aprofitant que disposem del nostre propi espai d\'assaig i una companyia amb actors versàtils habituats a treballar d\'aquesta manera. No ens aturarem fins assolir les propostes que busquem.',
				'escenagrafia' => 'L\'espai escènic és un cementiri ple de foscor, boira i fulles seques, que simbòlicament representa la casa d\'en Fretz i en Jouli. Al voltant hi ha arbres negres sense fulles, amb branques recargolades. Al centre de l\'escenari hi ha un panteó mòbil que serveix per crear espais i ampliar-los o disminuir-los segons les necessitats de cada escena. Diverses làpides i tombes de diferents grandàries omplen l\'escenari, havent-hi de dos tipus: unes serveixen per decorar i omplir l\'espai, les altres fan la funció de mobiliari. Per tant, tenim dues quatre tombes-taüt que fan de llits, una tomba que fa de tocador i una altra que fa de taulell. El ciclorama de fons permet tenyir l\'espai amb diverses intensitats de blau, per il·luminar l\'escena mantenint la sensació de foscor. A més a més, els llums han de fer una funció narrativa: mentre en Fretz i en Jouli estan representats amb blaus foscs, la Maria i l\'Àngels tenyeixen l\'espai amb blaus clars. Quan les dones estan soles hi molta claredat, quan es troben amb un dels homes n\'hi ha menys, quan el dos homes es troben amb una de les dones és encara més fosc, i així successivament. D\'aquesta manera, es mostra quin poder té la llum d\'elles en cada moment.',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'adult',
				'image' => '/assets/img/obscur.png',
				'video' => '',
				'dossier' => '/assets/Documents/Obscur - Dossier_cat.pdf'
			]);

			Espectacle::create([

				'title' => 'Aquí no hi ha qui s’entengui',
				'autor' => '',
				'adaptacio' => '',
				'durada' => '',
				'obra' => '',
				'creacio' => '',
				'escenagrafia' => '',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'adult',
				'image' => '/assets/img/cartell_no_hi_ha.jpg',
				'video' => '',
				'dossier' => ''
			]);

			/*Espectacle::create([

				'title' => 'La casa de Bernarda Alba',
				'autor' => '',
				'adaptacio' => '',
				'durada' => '',
				'obra' => '',
				'creacio' => '',
				'escenagrafia' => '',
				'pressupost' => $faker->numberBetween($min = 300, $max = 9000),
				'tipus' => 'adult',
				'image' => '',
				'video' => '',
				'dossier' => ''
			]);*/

	}

}