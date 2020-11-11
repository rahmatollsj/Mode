<?php
  require "./includes/config.php";
  require "./includes/debug.php";
  require "./includes/functions.php";
  
  // Si l'utilisateur entre un nom de page...
  if(isset($_GET['page'])){
    // On ajoute le chemin d'accès et l'extansion au nom pour pouvoir y accéder.
    $filename = './pages/' .$_GET['page']. '.php';
    // On vérifie si cette page existe.
    if(file_exists($filename)){
      // On dirige l'utilisateur vers cette page.
      require './pages/' .$_GET['page']. '.php';
    }
    else{
      // On dirige vers la page 404 qui indique qu'il y aune erreur.
      header('Location: 404.html');
    }
  }
  else{
    // Si l'utilisateur n'a rien écrit dans URL, on le dirige vers la page principal du site.
    require './pages/home.php';
  }
?>
