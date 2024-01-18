<?php
  session_start();
  if(!empty($_SESSION)){
    header('location:connexion.php');

    $bdd= new PDO('mysql:host=localhost;dbname=admin','root','');
  }

  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage memebres</title>
  </head>
  <body>
    
  </body>
  </html>


