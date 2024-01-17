
<?php
  session_start();
  if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
       $pseudo_par_defaut='admin';
       $mdp_par_defaut='admin1234';

       $pseudo_saisi=htmlspecialchars($_POST['pseudo']);
       $mdp_saisi=htmlspecialchars($_POST['mdp']);

       if($pseudo_par_defaut==$pseudo_saisi && $mdp_par_defaut==$mdp_saisi){
          $_SESSION['mdp']=$mdp_saisi;
          header('location: index.php');

       }
       else{
        echo'pseudo ou mdp incorrect';
       }
    }
    else{
        echo'veuillez replir tout les champs';
    }
  }






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>espace admin</title>
</head>
<body>
    <form action="" method="post" align="center">
        <input type="text" name="pseudo" autocomplete="off" require="require">
        <br>
        <input type="password" name="mdp" require="require">
        <br><br>
        <input type="submit" value="valider" name="valider">
    </form>
</body>
</html>