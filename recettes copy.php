<?php
require_once('lib/recipe.php');
include('templates/header.php');

$recipes = getRecipes($pdo);
?>

<div class="row align-items-center py-5">
  <h1>Liste des recettes</h1>
  <div class="col-lg-6">
    <h2>Filtrer les recettes</h2>
  </div>
  <div class="col-lg-6">
    <h3>Categories :</h3>
    <select class="category-filter mb-3" id="category-filter">
      <option value="">Toutes les categories</option>
    </select>
    <form action="search.php" method="GET">
      <input class="form-control" type="text" name="search_term" id="search-bar" placeholder="Rechercher des recettes...  🔍" aria-label="Rechercher des recettes..." aria-describedby="basic-addon2">
    </form>
  </div>
</div>

<div class="row">
  <div class="recipe-results">
  </div>
</div>
<div id="existing-recipes-container" class="row">
  <?php foreach ($recipes as $key => $recipe) {
    include('templates/recipe_partial.php');
  } ?>
</div>

<?php
include('templates/footer.php');
?>