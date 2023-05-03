<?php $title = "Accueil" ?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Bienvenue sur la page d'accueil</h1>
    <p>Kro bien!</p>
  </div>
</div>

<?php if ($bag['current_user'] ?? null): ?>
  <div class="container text-center">
    <h1>Chercher des copains</h1>
    <form class="sp-2" role="search" action="<?= route('users/search') ?>">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Rechercher un copain" name="q">
      </div>
      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
    </form>
  </div>
<?php endif; ?>
