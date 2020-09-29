<!DOCTYPE html>
<html lang="fr">

	<head>
		<!--Titre-->
		<title>DRS Sport-Galerie</title>
		<meta charset="UTF-8">
		<!--Lien vers le CSS-->
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<link rel="stylesheet" type="text/css" href="barrenav.css"/>
	</head>	

	<body>
		<!--Couleur du titre et création de la classe "title"-->
		<div class= "title">DRS Sport</div>

	<!--Création de la classe "menu" bar nav-->
	<?php
		include("barrenav.php");
	?>
	
			<div class="container" >
				<h2>Bienvenue sur notre site DRS Sport</h2>
				<span>Nous vous proposons nos meilleurs sélections aux meilleurs prix alors n'hésitez pas !</span>
			</div>

			<hr>

			<h2 class="center">Etes-vous ?</h2>
			
			<div class="presentation">

				<img src="imageweb/i8.jpg" alt="bmwi8" width="50">
					<p><b>Plutôt branché</b> Allemand ? Elégant, futuriste avec sous le capot un aussi gros moteur ?</p>

				<img src="imageweb/must.jpg" alt="fordmustang" width="50">
					<p><b>Plutôt branché</b> Américain ? Grosse puissance sous le capot, style agressif et si élégant, tel une mustang sauvage ?</p>
				
				

			<hr>
		
					<p><b>Ou</b> bien avez-vous d'autre goût?
					<br> Peu importe ce qu'ils sont, vous trouverez votre <b>Bonheurs!</b></p>	

				 <video controls autoplay>
			  	 	<source src="imageweb/video/intro.mp4" type="video/mp4">
				 </video>
				 <br> 


			
			</div>

			<footer><p><b>PPE Project - Houry Dylan | Grondin Samuel | Lauret Ryan</b></p></footer>	
				
		</body>

</html>
