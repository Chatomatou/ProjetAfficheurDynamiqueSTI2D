<?php
if(!session_start())
{
  echo '<pre style="color: red;">[+] Commencement de la sessions a echouer.</pre>';
  exit;
}

$email = $_POST['email'];
$message = $_POST['message'];
$date = date("Ymd");

$repertory = './' . $date;

if(!file_exists($repertory))
{
  if(!mkdir($repertory))
  {
    echo '<h1>Impossible de créer le dossier</h1>';
    exit;
  }
}

$file = fopen($repertory.'/contact.txt', "a");

if(!$file)
{
  echo '<h2>Impossible de créer le fichier texte</h2>';
  exit;
}

$sepator = '===============================================================' . "\r\n";

$header = "\t\t\t  ". '[ '. $date .' ]' . "\r\n";
$fmail = "Email " . $email . "\r\n";
$fmessage = $message . "\r\n";


fwrite($file, $sepator);
fwrite($file, $header);
fwrite($file, $fmail);
fwrite($file, $fmessage);

fclose($file);

header("Location: ../index.php");
?>
