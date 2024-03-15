<div class="col-md-4">
  <div class="card">
    <img src="<?= _RECIPES_IMG_PATH_ . $recipe['image'] ?>" class="card-img-top" alt="<?= $recipe['title'] ?>">
    <div class="card-body">
      <h4 class="card-title"><?= $recipe['title'] ?></h4>
      <p class="card-text"><?= $recipe['description'] ?></p>
      <a href="recette.php?id=<?=$key ?>" class="btn btn-primary">Voir la recette</a>
    </div>
  </div>
</div>