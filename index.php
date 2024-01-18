
<?php
session_start();
if(!$_SESSION['mdp']){
    header('location:connexion.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="membre.php">voir les membres</a>
</body>
</html>