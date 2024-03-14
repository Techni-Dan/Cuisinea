<?php
define('_RECIPES_IMG_PATH_', 'uploads/recipes/');

$recipes = [
  ["title" => "Mousse au chocolat", "description" => "La mousse au chocolat est un dessert dont la composition traditionnelle comporte au minimum du chocolat et du blanc d'œuf, monté en neige. Elle peut parfois être agrémentée de jaune d’œuf, de sucre ou de crème montée, d'épices ou de zestes d'agrumes", "image" => "1-chocolate-au-mousse.jpg"],
  ["title" => "Gratin dauphinois", "description" => "Le gratin dauphinois ou pommes de terre à la dauphinoise est un plat gratiné traditionnel de la cuisine française, d'origine dauphinoise, à base de pommes de terre et de lait. Ce plat est connu en Amérique du Nord comme « au gratin style potatoes » ou « pommes de terre au gratin ».", "image" => "2-gratin-dauphinois.jpg"],
  ["title" => "Salade de chèvre", "description" => "Une salade de chèvre chaud est une recette de cuisine de salade composée, de la cuisine française, à base de salade et de fromage au lait de chèvre chaud, servie sur des tranches de pain", "image" => "3-salade.jpg"]
];
include('templates/header.php');
?>

<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
  <div class="col-10 col-sm-8 col-lg-6">
    <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="logo Cuisinea" width="700" loading="lazy">
  </div>
  <div class="col-lg-6">
    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Cuisinea - Recettes de cuisine</h1>
    <p class="lead">Retrouvez toutes nos idées recettes de plats complets. Recettes faciles, originales, uniques, pas chères </p>
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
      <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recettes</button>
    </div>
  </div>
</div>

<div class="row">
  <?php foreach ($recipes as $key => $recipe) { ?>
    <div class="col-md-4">
      <div class="card">
        <img src="<?= _RECIPES_IMG_PATH_ . $recipe['image'] ?>" class="card-img-top" alt="<?= $recipe['title'] ?>">
        <div class="card-body">
          <h5 class="card-title"><?= $recipe['title'] ?></h5>
          <p class="card-text"><?= $recipe['description'] ?></p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

  <?php } ?>
</div>

<?php

include('templates/footer.php');

?>