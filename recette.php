<?php
require_once('lib/recipe.php');
include('templates/header.php');
require_once('lib/tools.php');

//var_dump($_GET['id']);
//$id = $_GET['id'];

//var_dump($recipes[$id]);

$id = (int)$_GET['id'];
$recipe = getRecipeById($pdo, $id);
//var_dump($recipe);

if ($recipe) {
  $ingridients = linesToArray($recipe['ingredients']);
  $instructions = linesToArray($recipe['instructions']);
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="<?=getRecipeImage($recipe['image']); ?>" class="d-block mx-lg-auto img-fluid" alt="<?= $recipe['title']?>" width="700" height="500" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $recipe['title']?></h1>
    <p class="lead"><?= $recipe['description']?></p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      
    </div>
  </div>
</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <h2>Ingrédients</h2>
  <ul class="list-group">
    <?php foreach ($ingridients as $key => $ingridiant) { ?>
      <li class="list-group-item"><?=$ingridiant; ?></li>
    <?php } ?>
  </ul>
</div>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <h2>Instruction</h2>
  <ol class="list-group list-group-numbered">
    <?php foreach ($instructions as $key => $instruction) { ?>
      <li class="list-group-item"><?=$instruction; ?></li>
    <?php } ?>
  </ol>
</div>
<?php } else { ?>
  <div class="row text-center">
  <h1>Recette introuvable</h1>
  </div>
<?php } ?>
<?php
include('templates/footer.php');
?>