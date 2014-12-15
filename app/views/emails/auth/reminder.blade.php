<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div class="row">
			<img src="/assets/img/logos/magatzemdars.jpg" alt="Magatzem d'ars">
		</div>
		<div class="row">
			<h2>Cambi de Password</h2>

			<div>
				Per a cambiar el password, clica en el link i completa el formulari: {{ URL::to('password/reset', array($token)) }}.<br/>
				<br>
				Aquest enllaç quedarà desactivat en {{ Config::get('auth.reminder.expire', 60) }} minuts.
			</div>
		</div>
		<p>Moltes gràcies!</p>

		MAGATZEM D'ARS
	</body>
</html>
