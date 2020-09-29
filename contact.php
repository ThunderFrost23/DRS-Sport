<!DOCTYPE html>
<html lang="fr">

  <head>
    <!--Titre-->
    <title>DRS Sport-Galerie</title>
    <meta charset="UTF-8">
    <!--Lien vers le CSS-->
    <link rel="stylesheet" type="text/css" href="contact.css"/>
    <link rel="stylesheet" type="text/css" href="barrenav.css"/>
  </head> 

  <body>
    <!--Couleur du titre et création de la classe "title"-->
    <div class= "title">DRS Sport</div>

  <!--Création de la classe "button"-->
    <?php 
      include("barrenav.php");
    ?>
  

            <h2>Contact</h2>

<div class="container">
  <form>
  <div class="critereForm">
 
      <label for="fname"> <div class="espaceCritere"> Nom: </div>
      <input type="text" id="fname" name="nom" placeholder="Votre nom..">
      </label>

  </div>
  <div class="critereForm">
      <label for="lname"> <div class="espaceCritere">Prénom:</div>
      <input type="text" id="lname" name="prenom" placeholder="Votre prénom..">

    </label>
  </div>
  <div class="critereForm">
      <label for="email"> <div class="espaceCritere">Email:</div>
      <input type="email" id="email" name="email" placeholder="Votre Email..">
    </label>
  </div>
  <div class="critereForm">
    
      <label for="num"> <div class="espaceCritere">Numéro:</div>
      <input type="text" id="num" name="numéro" placeholder="Votre Numéro..">
    </label>
  </div>
  <div class="critereForm">

      <label id="subject">Sujet:</label>
    
      <textarea id="Sujet" name="sujet" placeholder="Votre problème(s).." style="height:200px"></textarea>
  </div>

    <input type="submit" value="Submit">


  </form>
</div>

<div class="contact">
  <p>Contacter nous  si nécessaire au :
   <strong>06.92.95.02.55</strong></p>
   <p>N'hésitez pas à faire un petit tour sur nos réseaux sociaux !</p>

    <div class="blocImg">
     <button class="icn">
      <a href="https://www.facebook.com/">
        <img src="imageweb/facebook-icone.png" width="90%">
      </a>
     </button>
     <button class="icn">
      <a href="https://www.instagram.com/">
        <img src="imageweb/logo-instagram.png" width="90%">
      </a>
     </button>
     <button class="icn">
      <a href="https://www.twitter.com/">
        <img src="imageweb/icone-twitter.jpg" width="90%">
      </a>
     </button>
    </div>


</div>  
