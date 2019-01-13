<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=500, initial-scale=1">
</head>
<body>
  <h1 style="text-align: center;font-size: 3em;font-weight: bold;color:#610B0B">Envoyer une carte de voeux à vos proches</h1>

		<div class="formulaire">
        <form method="POST" action="trait.php" style="text-align: center;font-size: 2em;font-weight: bold">

         
          <label for="nom">Entrez votre Nom</label>
          <input  id="nom" type="text  name="nom"><br>
			
          <label for="prez">Message</label><br>
          <textarea id="prez" name="message"></textarea><br>
			
          <label for="email">Destinataire</label>
          <input type="email" id="email" name="email">
        
          <input type="submit" name="value">
        </form>
    

		</div>
 





</body>

</html>
<?php 
$header="MIME-Version: 1.0\r\n";
$header.='From: Rayan Gauthier <rayan.g@codeur.online>'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."/n";
$header.='Content-Transfer-Encoding: 8bit';
$email=$_POST['email'];
// $message=$_POST['message'];
$mes='
<html>
  <body>
    
   <a href="https://rayang.promo-24.codeur.online/SVG/carte1.html"><h2>Carte de voeux</h2></a><br><br>
   <div class="image">
    <img src="https://rayang.promo-24.codeur.online/SVG/img/carte.png">
    </div>
  </body>
  </html>
';
mail($email, "carte", $mes, $header );
echo $mes;

 ?>
 