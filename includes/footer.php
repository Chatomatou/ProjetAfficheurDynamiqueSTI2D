<?php

function footer($path)
{
  echo '
  <footer>

    <div class="social_network">
      <h4>RÉSEAUX SOCIAUX</h4>
      <ol>
          <li>
            <a target="_blank" href="https://fr-fr.facebook.com/Lycée-Colbert-Tourcoing-officiel-265187623499450/" title="Allez sur Facebook"><img src="'. $path[0] .'" alt="FACEBOOK"></a>
          </li>
          <li>
            <a target="_blank" href="https://twitter.com/lyceecolbert?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Fwww.lyceecolbert-tg.org%2F" title="Allez sur mon twiiter"><img src="'. $path[1] .'" alt="TWIITER"></a>
          </li>
          <li>
            <a target="_blank" href="http://www.lyceecolbert-tg.org/" title="Allez sur le server discord"><img src="'. $path[2]  .'" alt="COLBERT"></a>
          </li>
          <li>
            <a target="_blank" href="https://www.youtube.com/watch?v=dN6-kfaZ84g" title="Vidéo grand lille TV"><img src="'. $path[3]  .'" alt="YOUTUBE"></a>
          </li>

      </ol>
    </div>

  </footer>';
}
?>
