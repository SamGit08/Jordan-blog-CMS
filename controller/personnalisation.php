<!DOCTYPE html>
<html ng-app="comApp">
  <?php require '../view/head.php'; ?>
  <body>
    <main>
      <section class="article">
        <img src="../view/Images/nikeid.jpg" alt="">
        <div class="texte">
        <h2>Titre Article</h2>
        <h3>Nom Utilisateur</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </section>
      <div class="commentaires">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <section class="edition">
        <div class="soumission">
          <h4>Commentaire</h4>
          <textarea name="commentaires"></textarea>
          <div ng-controller="comCtrl" class="com">
            <p>Caractères restants: {{com}}</p>
            <input type="submit" name="" value="commenter">
          </div>
        </div>
        <div class="soumission">
          <h4>Titre de l'article</h4>
          <input type="text" name="titre" value="">
          <textarea name="commentaires"></textarea>
          <div ng-controller="comCtrl" class="com">
            <p>Caractères restants: {{com}}</p>
            <input type="submit" name="" value="soumettre">
          </div>
        </div>
      </section>
    </main>
  <?php require '../view/foot.php'; ?>
  </body>
</html>
