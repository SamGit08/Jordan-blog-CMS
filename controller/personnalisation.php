
  <body>
    <main>
      <section>
        <?php articles(); ?>
      </section>
        <div class="soumission">
          <h4>Titre de l'article</h4>
          <input type="text" name="titre" value="">
          <div ng-app="" ng-controller="Controleur">
            <textarea id="com" name="commentaires" ng-model="texte" ng-change="changement()"></textarea>
            <p>Caractères restants: {{nb - n}}</p>
            <input type="submit" name="" value="soumettre">
          </div>
        </div>
      </section>
    </main>
  <?php require '../view/foot.php'; ?>
