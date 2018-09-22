<?php

function header_no_admin($path_ling, $path_image)
{
  echo
  '<header>
    <img class="logo_sin_pic" src="'. $path_image .'" alt="logo STI2D" width="128" height="128">
    <div id="header" class="wrapper">
      <h1>Afficheur Dynamique <span class="point">.</span></h1>
      <p class="subtitle">Projet de terminale STI2D</p>
      <nav>
        <p>Menu de navigation</p>
        <ul>
          <li><a href="'. $path_ling[0] . '" title="Allez vers l\'acceuil">Accueil</a></li>
          <li><a href="'. $path_ling[1] .'" title="Allez vers les message">Message</a></li>
          <li><a href="'. $path_ling[2] .'" title="Nous constacter" onclick="_on()">Nous contacter</a></li>
          <li><a title="Se connecter" onclick="on()" >Se connecter</a></li>
        </ul>
      </nav>
    </div>
  </header>';
}

function header_admin($path_ling, $path_image)
{
  echo
  '<header>
    <img class="logo_sin_pic" src="'. $path_image .'" alt="logo STI2D" width="128" height="128">
    <div class="wrapper">
      <h1>Afficheur Dynamique <span class="point">.</span></h1>
      <p class="subtitle">Projet de terminale STI2D</p>
      <nav>
        <p>Menu de navigation</p>
        <ul>
          <li><a href="'. $path_ling[0] .'" title="Allez vers l\'acceuil">Accueil</a></li>
           <li><a href="'. $path_ling[1] .'" title="Allez vers les message">Message</a></li>
          <li><a href="'. $path_ling[2] .'" title="Nous constacter" onclick="_on()">Nous contacter</a></li>
          <li><a href="'. $path_ling[3] .'" title="Se Deconnecter">Se deconnecter</a></li>
        </ul>
      </nav>
    </div>
  </header>';
}
?>
