<?php
  function connecte(){
      require 'connexion.php';

      $req = $bdd->prepare("SELECT pseudo, mdp FROM `Utilisateurs` WHERE mdp = :mdp AND pseudo = :pseudo");

      $req->execute(array('pseudo' => $_POST['pseudo'],
      'mdp' => $_POST['mdp']));

      $user = $req->fetch();
      if (!$user){
        echo '<li><a href="inscription.php">Inscription</a></li>
         <li><form class="" action="../controller/index.php?page=main.php" method="post">
         <input type="text" name="pseudo" value="" placeholder="pseudo">
         <input type="password" name="mdp" value="" placeholder="mot de passe">
         <input class="button" type="submit" name="submit" value="connexion">
         </form></li><br>';
         echo '<p>Utilisateur non reconnu !</p>';
      }else{
        session_start();
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['mdp'] = $user['mdp'];
        echo '<li>Bonjour '.$_SESSION['pseudo'].'</li>';
      }
    }

    function articles(){
        require 'connexion.php';

        $req = $bdd->prepare("SELECT * FROM `Articles`");

        $req->execute();

        while ($article = $req->fetch()) {
          echo '
              <div class="art">
                <img src="'.$article['photoArt'].'" alt="">
                <div class="texte">
                  <h2>'.$article['titreArt'].'</h2>
                  <p>'.$article['textArt'].'.</p>
                </div>
              </div>';
          }
    }
