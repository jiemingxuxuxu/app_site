<!DOCTYPE html>
<html>

<head>
<title>TESTARISQ - Accueil</title> 
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/AccueilAutorite_style.php"/>
</head>

<body>

	<!-- Header -->
	<?php include("php/header.php"); ?>
	
	<div class="divpage">

		<h2 class="bienvenue">
			<?php
			$Personne_Prenom = 'Utilisateur' ;
			echo 'Bienvenue ' . $Personne_Prenom . ' !';
			?>
		</h2>

		<div class="heurelieu">

			<h1 id="heure">

			<?php
			date_default_timezone_set("Europe/Paris");
			echo date('H') . ':' . date('i') ;
			/* heure donnée par le PHP affichée en premier, avant d'être remplacée par l'heure actualisée chargée par le JS */
			?>

			</h1>
			

			<h1 id="lieu">

			<!--localisation par défaut, déterminée à partir de l'adresse ip-->
			<!--
			<?php
			try {
				if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { //Si l'utilisateur utilise un proxy
				    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
				} 
				else {
				    $ip = $_SERVER['REMOTE_ADDR'];
				}
				$details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
				echo $details->city;
			} 
			catch (Exception $e) {}
			?>
			La partie PHP fonctionnera sur un vrai serveur mais ne fonctionne pas en local-->

			</h1>

		</div>

		<div class="modes">

			<!-- Panneau pour lancer le test -->

			<div class="mode test"> 

				<header>
					<a href="#">Mode Test<img class="switch_button" src="img/switch_button.png" alt="switch_button" href="#"/></a>
				</header>

				<form> 
					<div class="champ">
						<label for="identifiant">Identifiant du conducteur :</label><br>
						<input type="text" id="identifiant" name="identifiant"><br>
					</div>
					<div class="bouton">
						<input type="submit" value="Démarrer le test"><br>
					</div>
				</form>

			</div>

			<!-- Panneau pour lancer une recherche -->

			<div class="mode recherche">

				<header>
					<a href="#">Mode Recherche<img class="switch_button" src="img/switch_button.png" alt="switch_button" href="#"/></a>
				</header>

				<form> 
					<div class="champ">
						<label for="recherche">Identifiant ou nom du conducteur :</label><br>
						<input type="text" id="recherche" name="recherche"><br>
					</div>
					<div class="bouton">
						<input type="submit" value="Chercher l'utilisateur"><br>
					</div>
				</form>

			</div>
			

		</div>

	</div>


	<script type="text/javascript" src="js/AccueilAutorite.js"></script> 

</body>

</html>