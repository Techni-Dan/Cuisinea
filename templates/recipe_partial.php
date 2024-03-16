<div class="col-md-4">
  <div class="card">
    <img src="<?=getRecipeImage($recipe['image']); ?>" class="card-img-top" alt="<?= $recipe['title'] ?>">
    <div class="card-body">
      <h4 class="card-title"><?= $recipe['title'] ?></h4>
      <p class="card-text"><?= substr($recipe['description'], 0, 150) ?></p>
      <a href="recette.php?id=<?=$recipe['id'] ?>" class="btn btn-primary">Voir la recette</a>
    </div>
  </div>
</div>