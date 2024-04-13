<?php
require_once('lib/session.php');
require_once('lib/config.php');
require_once('lib/pdo.php');

// var_dump($_SERVER['SCRIPT_NAME']);
$currentPage = basename($_SERVER['SCRIPT_NAME']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $recipe = getRecipeById($pdo, $id);

  ?>
    <title><?= $recipe['title']; ?></title>
    <meta name="Description" content="<?= substr($recipe['description'], 0, 160);; ?>">
  <?php } else { ?>
    <title><?= $currentPage; ?></title>
    <meta name="Description" content="Cuisinea - Recettes de cuisine">
  <?php } ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="assets/css/override-bootstrap.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column justify-content-between min-vh-100 snippet-body">

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="assets/images/logo-cuisinea-horizontal.jpg" alt="logo Cuisinea" width="250">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
        <?php foreach ($mainMenu as $key => $value) { ?>
          <li class="nav-item"><a href="<?= $key ?>" class="nav-link px-2 <?php if ($currentPage === $key) {
                                                                            echo 'active';
                                                                          } ?>"><?= $value ?></a></li>
        <?php } ?>
      </ul>

      <div class="col-md-3 text-end">
        <?php if (!isset($_SESSION['user'])) { ?>
          <a href="login.php" class="btn btn-outline-primary me-2">Se connecter</a>
          <a href="inscription.php" class="btn btn-outline-primary me-2">S'inscrire</a>
        <?php } else { ?>
          <a href="logout.php" class="btn btn-primary">Se déconnecter</a>
        <?php } ?>
      </div>
    </header>
  </div>
  <div class="flex-grow-1">
  <div class="container">