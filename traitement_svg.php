<?php 
$header="MIME-Version: 1.0\r\n";
$header.='From: Rayan Gauthier <rayan.g@codeur.online>'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."/n";
$header.='Content-Transfer-Encoding: 8bit';
$destinataire=$_POST['destinataire'];

var_dump($_POST);


$message='
<html>

  <body>

    <h1 style="text-align:center;
      font-size:2em;
      font-weight:bold">
    
    Carte de voeux</h1>

    <a href="https://rayang.promo-24.codeur.online/SVG/carte1.html">Lien vers la carte de voeux</a>
    <img src="https://rayang.promo-24.codeur.online/SVG/img/carte.png">
  </body>
  </html>
';
mail($destinataire, "carte", $message, $header );
echo $message;
 ?>
