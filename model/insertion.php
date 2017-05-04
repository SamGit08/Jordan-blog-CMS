<?php
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $age = $_POST['age'];
  $pseudo = $_POST['pseudo'];
  $mdp = $_POST['mdp'];

  if (isset($_POST['nom'], $_POST['prenom'], $_POST['age'], $_POST['pseudo'], $_POST['mdp'])){
    $req = $bdd->prepare("INSERT INTO `Utilisateurs` (`id`, `name`, `lastname`, `age`, `mdp`, `pseudo`) VALUES (NULL, '$prenom', '$nom', '$age', '$mdp', '$pseudo')");

    $req->execute();
    $req->closeCursor();

  }
  else
  {
    echo "<h3>Veuillez remplir tous les champs</h3>";
  }

  if($req->execute() == TRUE){
    echo "<h2>Inscription Reussi !</h2>";
  }else {
    echo '<h3>Erreur à l\'inscription<br>Recommencer</h3><br>';

    die();
  }
 ?>
