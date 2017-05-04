<?php
  require 'connexion.php';

  function connexion(){
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $req = $bdd->prepare("SELECT pseudo, mdp FROM `Utilisateurs` WHERE mdp = $mdp");

    $req->execute();
    $data = $req->fetch();
    $req->closeCursor();

    if (!$data) {
      echo "Utilisateur inconnu !";
    }
    else
    {
      session_start();
      $_SESSION['pseudo'] = $pseudo;
      $_SESSION ['mdp'] = $mdp;
    }
  }
  connexion();

// selection des commentaires de l'article
// SELECT Commentaire FROM `Commentaires`, `Articles` WHERE idArt = 1
?>
