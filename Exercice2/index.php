<?
$username = "kone";
setcookie("username", $username, time() + (86400 * 30), "/"); // 86400 = nombre de secondes dans un jour<?php

if(isset($_COOKIE['username'])) {
  $username = $_COOKIE['username'];
  if($username == "kone") {
    echo "Connexion réussie!";
  } else {
    echo "Nom d'utilisateur incorrect.";
  }
} else {
  echo "Aucun cookie trouvé.";
}
?>