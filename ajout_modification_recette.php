<?php
require_once('lib/recipe.php');
include('templates/header.php');
require_once('lib/tools.php');

//var_dump($_POST);

//var_dump($_SERVER);

if (isset($_POST['saveRecipe'])) {
  $res = saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], null);
  var_dump($res);
}
?>


<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-lable">Titre</label>
    <input type="text" name="title" id="title" class="form-control">
  </div>
  <div class="mb-3">
    <label for="description" class="form-lable">Description</label>
    <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="ingredients" class="form-lable">Ingredients</label>
    <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="instructions" class="form-lable">Instructions</label>
    <textarea name="instructions" id="instructions" cols="30" rows="5" class="form-control"></textarea>
  </div>
  <div class="mb-3">
    <label for="category" class="form-lable">Catégorie</label>
    <select name="category" id="category" class="form-select">
      <option value="1">Entrée</option>
      <option value="2">Plat</option>
      <option value="3">Dessert</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="file" class="form-lable">Image</label>
    <input type="file" name="file" id="file">
  </div>
  <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">
</form>


<?php
include('templates/footer.php');
?>