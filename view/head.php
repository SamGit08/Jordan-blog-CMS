<?php
  require '../view/link.php';
 ?>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#">Prochaines sorties</a></li>
          <li><a href="personnalisation.php">Personnalisation</a></li>
          <li><a href='inscription.php'>Inscription</a></li>
          <li><form class="" action='../controller/index.php' method='post'>
          <input type='text' name='pseudo' value="" placeholder='pseudo'>
          <input type='password' name='mdp' value="" placeholder='mot de passe'>
          <input class='button' type='submit' name='submit' value='connexion'>
          </form></li>
          <?php
            echo $_SESSION['pseudo']." Bienvenue";
           ?>
        </ul>
      </nav>
    </header>
</body>
