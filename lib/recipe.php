<?php
/*
$recipes = [
  ["title" => "Mousse au chocolat", "description" => "La mousse au chocolat est un dessert dont la composition traditionnelle comporte au minimum du chocolat et du blanc d'œuf, monté en neige. Elle peut parfois être agrémentée de jaune d’œuf, de sucre ou de crème montée, d'épices ou de zestes d'agrumes", "image" => "1-chocolate-au-mousse.jpg"],
  ["title" => "Gratin dauphinois", "description" => "Le gratin dauphinois ou pommes de terre à la dauphinoise est un plat gratiné traditionnel de la cuisine française, d'origine dauphinoise, à base de pommes de terre et de lait. Ce plat est connu en Amérique du Nord comme « au gratin style potatoes » ou « pommes de terre au gratin ».", "image" => "2-gratin-dauphinois.jpg"],
  ["title" => "Salade de chèvre", "description" => "Une salade de chèvre chaud est une recette de cuisine de salade composée, de la cuisine française, à base de salade et de fromage au lait de chèvre chaud, servie sur des tranches de pain", "image" => "3-salade.jpg"]
];*/



function getRecipeById(PDO $pdo, int $id)
{
  $query = $pdo->prepare("SELECT * FROM recipes Where id = :id");
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();
  return $query->fetch();
}

function getRecipeImage(string|null $image)
{
  if ($image === null) {
    return _ASSETS_IMG_PATH_ . 'recipe_default.jpg';
  } else {
    return _RECIPES_IMG_PATH_ . $image;
  }
}

function getRecipes(PDO $pdo, int $limit = null)
{
  //$sql = 'SELECT * FROM recipes ORDER BY id DESC';
  $sql = 'SELECT * FROM recipes ORDER BY RAND() DESC';
  if ($limit) {
    $sql .= ' LIMIT :limit';
  }

  $query = $pdo->prepare($sql);
  if ($limit) {
    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
  }
  $query->execute();
  //var_dump($sql);
  return $query->fetchAll();
}
