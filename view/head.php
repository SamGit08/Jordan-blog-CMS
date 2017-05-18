<?php
session_start();
  require '../view/link.php';
  require '../model/model.php';
 ?>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php?page=main.php">Accueil</a></li>
          <li><a href="#">Prochaines sorties</a></li>
          <li><a href="index.php?page=personnalisation.php">Personnalisation</a></li>
          <?php
            $pseudo = $_POST['pseudo'];
            $mdp = $_POST['mdp'];
            if(isset($_POST['pseudo'], $_POST['mdp'])){
              connecte();
            }else{
              echo '<li><a href="inscription.php">Inscription</a></li>
               <li><form class="" action="../controller/index.php?page=main.php" method="post">
               <input type="text" name="pseudo" value="" placeholder="pseudo">
               <input type="password" name="mdp" value="" placeholder="mot de passe">
               <input class="button" type="submit" name="submit" value="connexion">
               </form></li>';
            }
           ?>
        </ul>
      </nav>
    </header>
    <?php require $_GET['page']; ?>
</body>
