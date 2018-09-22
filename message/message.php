<?php

if(!session_start())
{
  echo '<pre style="color: red;">[+] Commencement de la sessions a echouer.</pre>';
  exit;
}

function meteo_html()
{
  echo '
  <!-- widget meteo -->
<div id="widget_3da8baf7dbf63e710f6e75921bbca896">
<span id="l_3da8baf7dbf63e710f6e75921bbca896"><a href="http://www.mymeteo.info/r/tourcoing_c">Tourcoing pr&eacute;visions</a></span>
<script type="text/javascript">
(function() {
  var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
  my.src = "https://services.my-meteo.com/widget/js_design?ville=22350&format=petit-horizontal&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=10&fond=3&masque=3&x=476&y=80&d=0&id=3da8baf7dbf63e710f6e75921bbca896";
  var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>
<!-- widget meteo -->
  ';
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>

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

    <title>Afficheur Dynamique : Message</title>
    <meta charset="utf-8">

    <?php
    if(!$_SESSION['admin'])
    {
      echo '<meta http-equiv="refresh" content="5" >';     // s'occupe du rafraichissement automatique
    }
    ?>
     <link rel="stylesheet" href="../fonts/fonts.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">

    <link rel="stylesheet" href="message.css">

    <style>
    nav{
        margin-top: 7px;
    }

    #message
    {
      border-style: solid;
      border-radius: 10px;
      border-color: #2d3436;
      margin: 35px auto;
      background-color: #EEEE;
      width: 800px;
     }
    #message h2
    {
      color: #2d3436;
      text-align: center;
      width: 200px;
      margin: 0 auto;
      padding: 10px;
    }
    .separator_section
    {
      margin: 0 auto;
      color: #0984e3;
      border-style: solid;
      border-radius: 5px;
      border-width: 3px;
      width: 300px;

    }
    #message h3
    {
      font-style: arial;
      text-transform: uppercase;
      color: #555;
      margin-left: 3px;
      margin-top: 3px;
      padding: 4px;
    }



    #message div div
    {
      padding: 10px;
      margin-top: 10px;
    }



    #widget_3da8baf7dbf63e710f6e75921bbca896
    {
      margin: 0 auto;
      width: 600px;

    }
    /******************************************************/
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
    /************************************************/
    .important
    {
      color: red;
      background-color: #2f3640;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
      padding: 5px;

      font-family: sans-serif;
      font-size: 15px;
     }
    .information
    {
      color: #D980FA;
      background-color: #2c2c54;
      padding: 5px;
      font-family: sans-serif;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;

      font-size: 15px;
     }
    .less
    {
      color: #FFF;
      background-color: #18dcff;
      padding: 5px;
      font-family: sans-serif;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
       font-family: sans-serif;
      font-size: 15px;
     }
    </style>

    <!-- Inclure le fichier script js pour connexion admin-->
    <script src="../app.js" type="text/javascript"></script>
  </head>

  <body>
    <?php
      include("../includes/header.php");

      $path_no_admin = array('../index.php', 'message.php', '#', '');
      $path_admin = array('../index.php', 'message.php', '#', '../login/disconnect.php');


      if($_SESSION['admin'])
        header_admin($path_admin, '../pictures/logo_sin.png');
      else
        header_no_admin($path_no_admin, '../pictures/logo_sin.png');
    ?>

    <div id="login-form-contact">
          <h2>Formulaire de contacte</h2>
           <img src="../pictures/croix_rouge.png" alt="close" onclick="_off()">
          <form method="POST" action="../contact/contact.php">
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="@gmail.com" name="email" required="required">

            <textarea placeholder="Votre message" cols="80" rows="5" name="message"></textarea>

            <input type="submit" value="Envoyer">
          </form>
    </div>



    <div id="login-form">
      <h2>Formulaire de connexion</h2>

      <form method="POST" action="../login/login.php">
        <label for="login">Nom d'utilisateur</label>
        <input id="login" type="text" placeholder="Nom d'utilisateur..." name="username" required="required">

        <label for="password">Mot de passe</label>
        <input id="password" type="password" placeholder="Mot de passe..." name="password" required="required">

        <input type="submit" value="Se connecter">
      </form>
      <img src="../pictures/close.png" alt="close" onclick="off()">
    </div>


    <?php if($_SESSION['admin'])
    echo '
    <section id="form-upluad">

        <div>
          <h2>formulaire upluad </h2>
        </div>
        <hr>
        <form method="post" action="../login/upluad_message.php">
          <input placeholder="Auteur du message" id="autor_text" type="text" required size="60" name="text_autor">

          <span>min</span><input type="range" min="1" max="3" step="1" name="grade"><span>max</span>

          <input type="date" name="td_date">

          <select name="subject">
            <option value="absent">Absence de proffesseur</option>
            <option value="annoncement">Annonce des nouvelle</option>
            <option value="event">Evénements</option>
          </select>

          <textarea placeholder="Votre message" cols="80" rows="5" name="message"></textarea>

          <input type="submit" value="Envoyer">
        </form>

    </section>';

    ?>

    <?php

      $important = '<p class="important"><[+++]>';
      $info = '<p class="information">![++]';
      $less_message = '<p class="less">[+]';
    ?>

    <section id="message">
      <h2>LES MESSAGE</h2>
      <hr class="separator_section">
      <div id="absent">
          <h3>Proffesseur Absent</h3>

          <div class="content_message">
            <?php
            try{
                $bdd = new PDO("mysql:host=localhost;dbname=projetsti2d;charset=utf8", "root", "");
              }catch(Exception $error){
                  die("Impossibe d'acceder a la base de données ". $error->getMessage());
            }

            $request = $bdd->query('SELECT * FROM message WHERE subject LIKE \'absent%\' ORDER BY ID DESC');

            while($data = $request->fetch())
            {
              switch($data['grade'])
              {
                case 1:
                  echo $less_message, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
                case 2:
                  echo $info, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
                case 3:
                  echo $important, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
              }
            }
            $request->closeCursor();
            ?>
          </div>
      </div>

      <hr class="seprator">

      <div id="annoucement_news">
        <h3>Annoncement des nouvelles</h3>

        <div class="content_message">
            <?php
            $request = $bdd->query('SELECT * FROM message WHERE subject LIKE \'annoncement%\' ORDER BY ID DESC');

            while($data = $request->fetch())
            {
              switch($data['grade'])
              {
                case 1:
                  echo $less_message, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
                case 2:
                  echo $info, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
                case 3:
                  echo $important, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
              }
            }
            $request->closeCursor();
            ?>

        </div>
      </div>

      <hr class="seprator">

      <div id="event">
        <h3>Les évènements</h3>

        <div class="content_message">
         <?php
            $request = $bdd->query('SELECT * FROM message WHERE subject LIKE \'event%\' ORDER BY ID DESC');

            while($data = $request->fetch())
            {
              switch($data['grade'])
              {
                case 1:
                  echo $less_message, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
                case 2:
                  echo $info, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
                case 3:
                  echo $important, '<span> ', $data['autor'], ' </span> le <em>', $data['date'], '</em> : ', $data['message'], '</p>';
                  break;
              }
            }
            $request->closeCursor();
            ?>
        </div>
        <?php
          meteo_html();
        ?>
      </div>

     </section>


    <?php
    include("../includes/footer.php");

    $pic_path = array('../pictures/facebook-flat.png', '../pictures/twiiter.png', '../pictures/logo_colbert.png', '../pictures/youtube-flat.png');

    footer($pic_path);
    ?>
  </body>
</html>
