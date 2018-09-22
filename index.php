<?php
session_start();

if(!isset($_SESSION['admin']))
  $_SESSION['admin'] = 0;

?>
<!DOCTYPE html>

<html lang="fr">
  <head>

    <title>Afficheur Dynamique : Acceuil</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="fonts/fonts.css">
     <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/footer.css">

    <link rel="shortcut icon" href="pictures/sti2d_ico.ico">

    <!-- Inclure le fichier script js pour connexion admin-->

    <script>

    function _on()
    {
      document.getElementById("login-form-contact").style.top = "0px";
    }
    function _off()
    {
      document.getElementById("login-form-contact").style.top = "-380px";
    }

    </script>
    <script src="app.js" type="text/javascript"></script>

    <style>
    /*********************************************/
#PresentationProjet
{
	clear: both;
  background-color: #2c2c54;
}

#PresentationProjet ol li
{
	list-style: none;
	display: inline-block;
  margin-top: 22px;
}

#PresentationProjet h2
{
	text-shadow: 2px 2px 2px black;
	color: #f1c40f;
	font-size: 24px;
	text-align: center;
}
#PresentationProjet p
{
	color: #000;
	text-shadow: 2px 2px 2px black;
	font-size: 18px;
	margin-top: 10px;
	text-align: center;
}
.present1
{
	background-image: url("pictures/colbert.jpg");
	border: solid;
	width: 350px;
	height: 223px;
}
.present1 div
{
	height: 223px;
	width: calc(350px/2);
	background-color: rgba(255, 255, 255, 0.9);
}
#p2
{
	position: relative;
	bottom: 20px;
	margin-left: 150px;
}
.present2
{

	background-image: url("pictures/participant.png");
	background-size: cover;

	border: solid;
	width: 350px;
	height: 223px;
}
.present2 div
{

	height: 223px;
	width: calc(350px/2);
	background-color: rgba(255, 255, 255, 0.9);
}
/*******************************************/
.present-project
{
    margin: 70px auto;
    display: inline-block;

    position: relative; /* postulat de départ */
    left: 10%; /* à 50%/50% du parent référent */
 }
.samuel
{
    margin: 5px 40%;
    text-align: center;
    width: 60px;
    height: 60px;
    border-radius: 30px;
}
.jounayd
{
    margin: 5px 40%;
    width: 60px;
    height: 60px;
    border-radius: 30px;
}
.present-project  p
{
    font-size: 15px;
    font-family: cursive;
    padding: 7px;
}
.present-project li:first-child
{
    list-style: none;
    background-color: #6a89cc;
    width: 300px;
    height: 200px;
    float: right;
    margin-left: 5px;

    position: relative;
    left: 60%;
}
.sam
{
    height: 200px;

    list-style: none;
    background-color: #6a89cc;
    width: 300px;
    float: right;

    position: relative;
    left: 50%;

}
/******************************************************/
#login-form-contact
{
  position: absolute;
  width: 640px;
  height: 300px;
  right: 25%;
  top: -500px;
  background-color: #222;
}
#login-form-contact h2
{
    text-align: center;
    font-family: sans-serif;
    padding: 10px;
    color: #ffffff;
}
#login-form-contact label
{
     font-size: 18px;
    font-style: normal;
    font-family: sans-serif;
    margin: 10px 5px;
    color: #dfe4ea;
}
#login-form-contact input[id="email"]
{
    font-family: inherit;
    font-size: 18px;
    margin-left: 8px;
    width: 400px;
    text-align: center;
    padding: 7px;
 }
 #login-form-contact input[id="email"]:focus
 {
     transition: 0.2s;
     border-style: solid;
     border-color: #467fbf;
     border-width: 1.5px;
     box-shadow: 0px 0px 0px 0.2rem rgba(70,127,191,0.25);

 }
#login-form-contact textarea
{
    -webkit-box-shadow: 0px 0px 0px 0.2rem rgba(70,127,191,0.25);
    padding: 15px;
    font-size: 18px;
    width: 585px;
    margin: 10px 10px;
}
#login-form-contact input[type="submit"]
{
    background-color: #3d72af;
    border-color: #3d72af;
    color: white;
    font-weight: bold;
    padding: 8px;
    margin: 0 42%;
    cursor: pointer;
}
#login-form-contact input[type="submit"]:hover
{
    transition: 0.3s;
    box-shadow: 0px 0px 0px 0.2rem rgba(70,127,191,0.25);
}
#login-form-contact img
{
    margin-left: 50px;
	margin-top: 10px;
	width: 32px;
	height: 32px;
    float: right;
}
    </style>
  </head>

  <body>
    <?php
    include('includes/header.php'); // Inclus du code php qui correspond a l'header de la page

    $path_no_admin = array('index.php', 'message/message.php', '#', '#');
    $path_admin = array('index.php', 'message/message.php', '#', 'login/disconnect.php');

      // Affiche se deconnecter ou se connecter selon le status de l'utilisateur
    if($_SESSION['admin'] == 1)
      header_admin($path_admin, 'pictures/logo_sin.png');
    else
      header_no_admin($path_no_admin, 'pictures/logo_sin.png');
    ?>


    <div id="login-form-contact">
          <h2>Formulaire de contacte</h2>
           <img src="pictures/croix_rouge.png" alt="close" onclick="_off()">
          <form method="POST" action="contact/contact.php">
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="@gmail.com" name="email" required="required">

            <textarea placeholder="Votre message" cols="80" rows="5" name="message"></textarea>

            <input type="submit" value="Envoyer">
          </form>
    </div>



    <div id="login-form">
      <h2>Formulaire de connexion</h2>

      <form method="POST" action="login/login.php">
        <label for="login">Nom d'utilisateur</label>
        <input id="login" type="text" placeholder="Nom d'utilisateur..." name="username" required="required">

        <label for="password">Mot de passe</label>
        <input id="password" type="password" placeholder="Mot de passe..." name="password" required="required">

        <input type="submit" value="Se connecter">
      </form>
      <img src="pictures/close.png" alt="close" onclick="off()">
    </div>

    <section class="form-message">
        <div>
          <h2>nouveau message</h2>

            <form>
              <ul>
                <li>
                  <label for="autor">Autor : </label>
                  <input type="text" name="message_autor">
                </li>

                <li>
                  <label for="date_message">La date : </label>
                  <input type="text" id="date_message" name="date">
                </li>

                <li>

                  <label id="subject">Sujet : </label>
                  <select name="subject" id="subject">
                    <option value="absent">Proffesseur Absent</option>
                    <option value="announcement">Nouvelle & Rappels</option>
                    <option value="others">Autres</option>
                  </select>
                </li>

                <li>
                  <label for="message">Message : </label>
                  <textarea name="message">Votre message ...</textarea>
                </li>

                <li>
                  <label for="priority">Priorité du message</label>
                  <input type="range" min="0" max="3" step="1">
                </li>

            </form>
          </div>
      </section>


    <!-- Diaporama -->
    <section id="animation_pictures">
  			<div class="slider">
  				<div class="slides">
  					<div class="slide"><img class="slide_picture" src="pictures/1.jpg" alt="1"></div>
  					<div class="slide"><img class="slide_picture" src="pictures/2.jpg" alt="2"></div>
  					<div class="slide"><img class="slide_picture" src="pictures/3.jpg" alt="3"></div>
  				</div>
  			</div>
  	</section>
    <!-- FIN DIAPORAMA -->

    <!-- Présentation du projet -->

    <section id="PresentationProjet">
    <div class="wrapper">
      <ol>
        <li>
          <div class="present1">
            <div>
              <h2>Le Projet</h2>
              <p>
                Le projet consiste, a faciliter
                la consultation des événements
                concernant la vie scolaire .
              </p>
            </div>
          </div>
        </li>
          <li id="p2">
            <div class="present2">
              <div>
                <h2>Participant</h2>
                <p>
                  Les pariticpant a se projet sont,
                  Samuel Biczo et Hamdoud Jounayd
                </p>
              </div>
            </div>
          </li>
        </ol>
      </div>
    </section>

  <section class="present-project">
    <ul>
      <li>
          <img class="jounayd" src="pictures/raspberry.jpg" alt="photo">
          <p>
              J'ai du gerer, la partis des capteur, toutes l'éléctronique,
              et faire le programme, pour que l'écran s'eteigne lorsque
              personne est entrain de consulter la méteo ou les message .
          </p>
      </li>
      <li class="sam">
        <img class="samuel" src="pictures/html-css-js-php-mysql.png" alt="photo">
        <p>
            Le projet, consiste a crée un afficheur dynamique,
            a fin de faciliter, la consultation des événement
            par rapport a la vie scolaire . Tout cela
            a partir d'un site web .
        </p>
      </li>
    </ul>
  </section>

    <?php
    include("includes/footer.php");

    $pic_path = array('pictures/facebook-flat.png', 'pictures/twiiter.png', 'pictures/logo_colbert.png', 'pictures/youtube-flat.png');
    footer($pic_path);
    ?>

  </body>
</htmL>
