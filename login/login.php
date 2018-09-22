<?php
if(!session_start())
{
  echo '<pre style="color: red;">[+] Commencement de la sessions a echouer.</pre>';
  exit;
}

if(!$_SESSION['admin'])
{
    try
    {
      $pdoSQL = new PDO('mysql:host=localhost;dbname=projetsti2d;charset=utf8', 'root', '');
    }
    catch(Exception $except)
    {
      die('[+] Instance de la classe PDO échouer ' . $except->getMessage());
    }

    if(isset($_POST['username']) and isset($_POST['password']))
    {
      $username = md5($_POST['username']);
      $password = md5($_POST['password']);
    }
    else
    {
      echo '[+] Vous n\'avez pas remplis le formulaire correctement';
      echo "\n\nL'utilisateur ou le mot de passe est vide .";
      exit;
    }

    $query = 'SELECT username, password FROM administrator';
    $pdoQuery = $pdoSQL->query($query);

    while($bddArray = $pdoQuery->fetch())
    {
      if($bddArray['username'] == $username && $bddArray['password'] == $password)
      {
        $_SESSION['admin'] = 1;
        $pdoQuery->closeCursor();
        header('Location: ../index.php');
      }

    }
    echo 'Vilain pirate !';
    $pdoQuery->closeCursor();
}
else
{
  echo 'Vous êtes déja administrateur';
}
?>
