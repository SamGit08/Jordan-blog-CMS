<?php

  function connexion(){
    require 'connexion.php';
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $req = $bdd->prepare("SELECT pseudo, mdp FROM `Utilisateurs` WHERE mdp = $mdp");

    $req->execute();
    $data = $req->fetch();
    $req->closeCursor();

    if (!$data) {
      echo "Veuillez vous inscrire";
    }
    else
    {
      session_start();
      $_SESSION['pseudo'] = $pseudo;
      $_SESSION ['mdp'] = $mdp;
    }
  }
  connexion();

?>
