<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Envoi d'un formulaire en PHP</h1>


  <?php
var_dump($_POST);

  if(isset($_POST) && !empty($_POST['nom']) && !empty($_POST['message']) && !empty($_POST['prenom']))
  {
    extract($_POST);
    $expediteur=$_POST['email'];
    $msg=$_POST['message'];
    $message= $expediteur.' '.$msg;
    $destinataire='rayan.g@codeur.online';
    $nom = $nom.'  '.$prenom ;


    $mail=mail($destinataire, $nom, $message);
    echo $mail;





  ?>
</body>
</html>
