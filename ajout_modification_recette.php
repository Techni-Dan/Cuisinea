<?php

include('templates/header.php');
if (!isset($_SESSION['user'])) {
  header('location: login.php');
}
require_once('lib/recipe.php');
require_once('lib/tools.php');
require_once('lib/category.php');
//var_dump($_POST);

//var_dump($_SERVER);
$errors = [];
$messages = [];

$recipe = [
  'title' => '',
  'description' => '',
  'ingredients' => '',
  'instructions' => '',
  'category_id' => '',
];

$categories = getCategories($pdo);

if (isset($_POST['saveRecipe'])) {
  //var_dump($_FILES['file']);
  $fileName = null;
  // Si un fichier a été envoyé
  if (isset($_FILES['file']['tmp_name']) && $_FILES['file']['tmp_name'] != '') {
    // la methode getImageSize va retourner false si le fichier n'est pas une image
    $checkImage = getimagesize($_FILES['file']['tmp_name']);
    if ($checkImage !== false) {
      // Si c'est une image on traite
      $fileName = uniqid() . '-' . slugify($_FILES['file']['name']);
      move_uploaded_file($_FILES['file']['tmp_name'], _RECIPES_IMG_PATH_ . $fileName);
    } else {
      // Sinon on affiche un message d'erreur
      $errors[] = "Le fichier doit étre une image";
    }
  }

  if (!$errors) {
    $res = saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], $fileName);

    if ($res) {
      $messages[] = 'La recette a bien été sauvegardée';
    } else {
      $errors[] = 'La recette n\'a pas été sauvgardée';
    }
  }

  $recipe = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'ingredients' => $_POST['ingredients'],
    'instructions' => $_POST['instructions'],
    'category_id' => $_POST['category'],
  ];
}
//var_dump($_SESSION['user']);
if (isset($_SESSION['user'])) {
  // This code block will execute only if the user role is 'admin' -- in the future


?>

  <h1>Ajouiter une recette</h1>

  <?php foreach ($messages as $message) { ?>
    <div class="alert alert-success">
      <?= $message; ?>
    </div>
  <?php } ?>

  <?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger">
      <?= $error; ?>
    </div>
  <?php } ?>

  <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-lable">Titre</label>
      <input type="text" name="title" id="title" class="form-control" value="<?= $recipe['title']; ?>">
    </div>
    <div class="mb-3">
      <label for="description" class="form-lable">Description</label>
      <textarea name="description" id="description" cols="30" rows="5" class="form-control"><?= $recipe['description']; ?></textarea>
    </div>
    <div class="mb-3">
      <label for="ingredients" class="form-lable">Ingredients</label>
      <textarea name="ingredients" id="ingredients" cols="30" rows="5" class="form-control"><?= $recipe['ingredients']; ?></textarea>
    </div>
    <div class="mb-3">
      <label for="instructions" class="form-lable">Instructions</label>
      <textarea name="instructions" id="instructions" cols="30" rows="5" class="form-control"><?= $recipe['instructions']; ?></textarea>
    </div>
    <div class="mb-3">
      <label for="category" class="form-lable">Catégorie</label>
      <select name="category" id="category" class="form-select">
        <?php foreach ($categories as $category) { ?>
          <option value="<?= $category['id']; ?>" <?php if ($recipe['category_id'] == $category['id']) {
                                                    echo 'selected="selected"';
                                                  } ?>><?= $category['name']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="file" class="form-lable">Image</label>
      <input type="file" name="file" id="file">
    </div>
    <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">
  </form>
<?php } else { ?>
  <p>You are not an admin.</p>
<?php } ?>

<?php
include('templates/footer.php');
?>