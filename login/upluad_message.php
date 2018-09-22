<?php


$autor = htmlspecialchars($_POST['text_autor']); // L'auteur du message
$grade = htmlspecialchars($_POST['grade']); // Le niveau d'importance du message
$date = htmlspecialchars($_POST["td_date"]); // La date
$message = htmlspecialchars($_POST["message"]); // Le message
$subject = htmlspecialchars($_POST['subject']); // Sujet



try
{
  $bdd = new PDO("mysql:host=localhost;dbname=projetsti2d;charset=utf8", "root", "");
}
catch(Exception $errror)
{
  die("Impossibe d'acceder a la base de données ". $error->getMessage());
  exit;
}

if(empty($autor) || empty($grade) || empty($date) || empty($message) || empty($subject))
{
  header("Location: ../message/message.php");
}

$query = $bdd->prepare("INSERT INTO message(autor, grade, date, subject, message) VALUES(?, ?, ?, ?, ?)");

print_r(array($autor, $grade, $date, $message, $subject));

$query->execute(array($autor, $grade, $date, $subject, $message));
header("Location: ../message/message.php");
?>
