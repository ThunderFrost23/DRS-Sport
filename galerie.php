<!DOCTYPE html>
<html lang="fr">

	<head>
		<!--Titre-->
		<title>DRS Sport-Galerie</title>
		<meta charset="UTF-8">
		<!--Lien vers le CSS-->
		<link rel="stylesheet" type="text/css" href="galerie.css"/>
		<link rel="stylesheet" type="text/css" href="barrenav.css"/>
	</head>	

	<body>
		<!--Couleur du titre et création de la classe "title"-->
		<div class= "title">DRS Sport</div>

		<!--Création de la classe "button"-->
		<?php 
			include("barrenav.php");
		?>


	
		<!--Description de la page galerie-->
		<h1 style= "color: silver;">Galerie</h1>
		<h3 style= "color: silver;">Ici, vous pouvez retrouver nos différents véhicules en vente.
			(Vous pouvez ainsi cliquer sur l'image pour voir l'intérieur du véhicule)</h3>

		<h4 class="filtre" style="color: silver;">Filtre de recherche</h4>

		<div>
			<label for="marque">Marque : </label>
			<select name="choix_marque" id="marque">
				<option value="">--Choix de la marque--</option>
				<option value="Renault">Renault</option>
				<option value="Peugeot">Peugeot</option>
				<option value="Citroën">Citroën</option>
				<option value="Volkswagen">Volkswagen</option>	
				<option value="Audi">Audi</option>										
				<option value="Alfa Roméo">Alfa Roméo</option>
				<option value="BMW">BMW</option>
				<option value="Ford">Ford</option>	
				<option value="Mercedes">Mercedes</option>				
				<option value="Toyota">Toyota</option>	
				<option value="Nissan">Nissan</option>	
				<option value="Land Rover">Land Rover</option>								
			</select>

			<label for="carburant">Type de carburant : </label>
			<select name="choix_carburant" id="carburant">
				<option value="">--Choix du carburant--</option>
				<option value="Essence">Essence</option>
				<option value="Diesel">Diesel</option>
				<option value="Hybride">Hybride</option>
			</select>

			<label for="prix">Prix : </label>
			<select name="choix_prix" id="prix">
				<option value="">--Choix du prix--</option>
				<option value="20-30">20 000 à 30 000 €</option>
				<option value="30-50">30 000 à 50 000 €</option>
				<option value="50-100">50 000 à 100 000 €</option>
				<option value="100-150">100 000 à 150 000 €</option>
				<option value="150-200">150 000 à 200 000 €</option>
				<option value="200-250">200 000 à 250 000 €</option>
			</select>
			
			<input type="submit" id="rechercher" value="Recherche">		
		</div>

		<br>

				<!--Insertion des véhicules-->
			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Peugeot 208 Gt Line 1.6 BlueHDi 120 S&S GT LINE 5P</h4>

				<a href="imageweb/Peugeot208gtline/peugeotint.jpg"> 
					<img src="imageweb/Peugeot208gtline/peugeotav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 5 portes, 5 places assises</li>
						<li>Motorisation: Diesel</li>
						<li>Puissance Fiscale: 6CV</li>
						<li>Moteur: 4 cylindres en ligne, 8 soupapes</li>
						<li>Puissance: 120 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Mécanique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 190 km/h</li>
						<li>0 à 100 km/h: 9,4 sec</li>
						<li><b>Prix: 22 400 €</b></li>
					</ul>

					<img src="imageweb/Peugeot208gtline/logopeugeot.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>

	
			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Volkswagen Golf GTI Clubsport</h4>

				<a href="imageweb/VolkswagenGolfGTIClubsport/volkswagenint.jpg"> 
					<img src="imageweb/VolkswagenGolfGTIClubsport/volkswagenav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 3 portes, 5 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 16 CV</li>
						<li>Moteur: 4 cylindres en lignes, 16 soupapes</li>
						<li>Puissance: 265 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Mécanique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 250 km/h</li>
						<li>0 à 100 km/h: 5,9 sec</li>
						<li><b>Prix: 40 300 €</b></li>
					</ul>

					<img src="imageweb/VolkswagenGolfGTIClubsport/volklogo.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Renault Megane 4 RS IV 1.8 T 280 18CV RS</h4>

				<a href="imageweb/RenaultMeganeRS/renaultint.jpeg"> 
					<img src="imageweb/RenaultMeganeRS/renaultav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 3 portes, 5 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 18 CV</li>
						<li>Moteur: 4 cylindres en lignes, 16 soupapes</li>
						<li>Puissance: 280 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Mécanique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 255 km/h</li>
						<li>0 à 100 km/h: 5,8 sec</li>
						<li><b>Prix: 38 300 €</b></li>
					</ul>

					<img src="imageweb/RenaultMeganeRS/logorenault.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Citroën DS3 Racing 1.6</h4>

				<a href="imageweb/CitroënDS3Racing/citroenint.jpg"> 
					<img src="imageweb/CitroënDS3Racing/citroenav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 3 portes, 5 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 12 CV</li>
						<li>Moteur: 4 cylindres en lignes, 16 soupapes</li>
						<li>Puissance: 202 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Mécanique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 235 km/h</li>
						<li>0 à 100 km/h: 6,5 sec</li>
						<li><b>Prix: 31 200 €</b></li>
					</ul>

					<img src="imageweb/CitroënDS3Racing/logocitroen.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Audi A1 (2E GENERATION) SPORTBACK II 40 TFSI 200 S LINE S TRONIC 6</h4>

				<a href="imageweb/AudiA1Sportback/audiint.jpeg"> 
					<img src="imageweb/AudiA1Sportback/audiav.jpeg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 5 portes, 5 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 11 CV</li>
						<li>Moteur: 4 cylindres en ligne, 16 soupapes</li>
						<li>Puissance: 200 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Automatique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 235 km/h</li>
						<li>0 à 100 km/h: 6,5 sec</li>
						<li><b>Prix: 33 380 €</b></li>
					</ul>

					<img src="imageweb/AudiA1Sportback/logoaudi.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>BMW I8 1.5 HYBRID 374 BVA6</h4>

				<a href="imageweb/BMWI8/bmwi8int.jpg"> 
					<img src="imageweb/BMWI8/bmwi8av.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 2 portes, 4 places assises</li>
						<li>Motorisation: Hybride rechargeable Essence-Electrique</li>
						<li>Puissance Fiscale: 11 CV</li>
						<li>Moteur: 3 cylindres en ligne, 12 soupapes + moteur électrique</li>
						<li>Puissance: 374 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Automatique à 6 rapports</li>
						<li>Roues motrices: 4x4</li>
						<li>Vitesse Maxi: 250 km/h</li>
						<li>0 à 100 km/h: 4,4 sec</li>
						<li><b>Prix: 142 050 €</b></li>
					</ul>

					<img src="imageweb/BMWI8/logobmw.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Volkswagen Polo 6 GTI VI 2.0 TSI 200 GTI DSG6</h4>

				<a href="imageweb/VolkswagenPoloGTI/volkswagenint.jpg"> 
					<img src="imageweb/VolkswagenPoloGTI/volkswagenav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 5 portes, 5 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 11 CV</li>
						<li>Moteur: 4 cylindres en lignes, 16 soupapes</li>
						<li>Puissance: 200 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Automatique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 238 km/h</li>
						<li>0 à 100 km/h: 6,7 sec</li>
						<li><b>Prix: 29 890 €</b></li>
					</ul>

					<img src="imageweb/VolkswagenPoloGTI/volklogo.png"
					alt="logo">

			</div>
			<!-- ======================================== -->			


			<br>
	

			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Alfa Romeo Giulia 2 Quadrifoglio II 2.9 V6 510 41CV QUADRIFOGLIO AT8</h4>

				<a href="imageweb/AlfaRomeoGiuliaQuadrifoglio/alfaint.jpg"> 
					<img src="imageweb/AlfaRomeoGiuliaQuadrifoglio/alfaav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 4 portes, 4 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 41 CV</li>
						<li>Moteur: 6 cylindres en V, 24 soupapes</li>
						<li>Puissance: 510 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Automatique à 8 rapports</li>
						<li>Roues motrices: Arrière</li>
						<li>Vitesse Maxi: 307 km/h</li>
						<li>0 à 100 km/h: 3,9 sec</li>
						<li><b>Prix: 84 900 €</b></li>
					</ul>

					<img src="imageweb/AlfaRomeoGiuliaQuadrifoglio/logoalfa.png"
					alt="logo">

			</div>
			<!-- ======================================== --


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Toyota Supra MKV 3.0 TURBO 340 GR PACK PREMIUM</h4>

				<a href="imageweb/ToyotaSupra/toyotaint.jpg"> 
					<img src="imageweb/ToyotaSupra/toyotaav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 2 portes, 2 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 23 CV</li>
						<li>Moteur: 6 cylindres en ligne, 24 soupapes</li>
						<li>Puissance: 340 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Automatique à 8 rapports</li>
						<li>Roues motrices: Arrière</li>
						<li>Vitesse Maxi: 250 km/h</li>
						<li>0 à 100 km/h: 4,3 sec</li>
						<li><b>Prix: 67 900 €</b></li>
					</ul>

					<img src="imageweb/ToyotaSupra/logotoyota.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Renault Clio 4 RS IV 1.6 TURBO 220 RS 18 EDC</h4>

				<a href="imageweb/RenaultClioRS/renaultint.jpg"> 
					<img src="imageweb/RenaultClioRS/renaultav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 5 portes, 5 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 12 CV</li>
						<li>Moteur: 4 cylindres en ligne, 16 soupapes</li>
						<li>Puissance: 220 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Automatique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 235 km/h</li>
						<li>0 à 100 km/h: 6,6 sec</li>
						<li><b>Prix: 30 900 €</b></li>
					</ul>

					<img src="imageweb/RenaultClioRS/logorenault.png"
					alt="logo">

			</div>
			<!-- ======================================== -->


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Volkswagen Scirocco 2 R II 2.0 TSI 280 R DSG6</h4>

				<a href="imageweb/VolkswagenSciroccoR/volkswagenint.jpeg"> 
					<img src="imageweb/VolkswagenSciroccoR/volkswagenav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 3 portes, 4 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 18 CV</li>
						<li>Moteur: 4 cylindres en lignes, 16 soupapes</li>
						<li>Puissance: 280 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Automatique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 250 km/h</li>
						<li>0 à 100 km/h: 5,5 sec</li>
						<li><b>Prix: 42 530 €</b></li>
					</ul>

					<img src="imageweb/VolkswagenSciroccoR/volklogo.png"
					alt="logo">

			</div>
			<!-- ======================================== -->	


			<br>


			<!-- ======================================== -->
			<div class="contenueVoiture">
				<h4>Peugeot 308 GTi 1.6 PURETECH 263 S&S GTI</h4>

				<a href="imageweb/Peugeot308GTi/peugeotint.jpeg"> 
					<img src="imageweb/Peugeot308GTi/peugeotav.jpg" alt="imageweb">
				</a>

					<ul>
						<li>Nombre de portes/places: 5 portes, 5 places assises</li>
						<li>Motorisation: Essence</li>
						<li>Puissance Fiscale: 16 CV</li>
						<li>Moteur: 4 cylindres en ligne, 16 soupapes</li>
						<li>Puissance: 262 ch</li>
						<li>Type de suralimentation: Turbo</li>
						<li>Boîte de vitesse, Nombre de rapports: Mécanique à 6 rapports</li>
						<li>Roues motrices: Avant</li>
						<li>Vitesse Maxi: 250 km/h</li>
						<li>0 à 100 km/h: 6 sec</li>
						<li><b>Prix: 39 100 €</b></li>
					</ul>

					<img src="imageweb/Peugeot308GTi/logopeugeot.png"
					alt="logo">

			</div>
			<!-- ======================================== -->
