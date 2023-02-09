<?php
//ouverture de la session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//ic on verifi si la session est vide
if (isset($_SESSION['username'])) {
  $_SESSION['username'] = '';
}

//validation du formulaire
if (isset($_POST["submit"])) {
  // affection d'une valeur a la  $_SESSION['username']  er affichage du message $succes_message
  $_SESSION['username'] = $_POST["nom"];
  $success_message = " Bienvenue " . $_SESSION['username'];
}
}
?>

<!--debut de formulaire -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">
    <label for="">Nom</label>
    <input type="text" name="nom" id="nom">
    <BUtton type="submit " name="submit">Connexion</BUtton>
    <BUtton type="reset " name="logout">Deconnexion</BUtton>
  </form>
  <!--fin de formulaire -->

  <?php

  // <!--debut de la session destroy -->
  session_destroy();
  //ic on verifi si la session est vide
  if (isset($_SESSION['username'])) {
    $_SESSION['username'] = '';
  }

  //deconnexion de l'utilisateur
  if (isset($_POST["logout"])) {
    // affection d'une valeur a la  $_SESSION['username']  er affichage du message $succes_message
    header("Refresh:0");
    exit;
  }
  ?>



  <!-- affichage du message de succes -->
  <?php if (isset($success_message)) : ?>
    <p style="color: orange;"><?php echo $success_message; ?></p>
  <?php endif; ?>

</body>

