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
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column justify-content-between min-vh-100 snippet-body">

  <div class="container">
    <nav class="navbar navbar-expand-lg bg-ligth text-white py-3 mb-4 border-bottom" data-bs-theme="light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php" title="Accueil">
          <img src="assets/images/logo-cuisinea-horizontal.jpg" alt="logo Cuisinea" width="250">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav ms-auto">
            <?php foreach ($mainMenu as $key => $value) { ?>
              <li class="nav-item"><a href="<?= $key ?>" class="nav-link px-2 <?php if ($currentPage === $key) {
                                                                                echo 'active';
                                                                              } ?>"><?= $value ?></a></li>
            <?php } ?>
          </ul>
          <?php if (!isset($_SESSION['user'])) { ?>
            <a href="login.php" class="btn btn-outline-primary me-2">Se connecter</a>
            <a href="inscription.php" class="btn btn-outline-primary me-2">S'inscrire</a>
          <?php } else { ?>
            <a href="logout.php" class="btn btn-primary">Se déconnecter</a>
          <?php } ?>
        </div>
      </div>
    </nav>
  </div>
  <div class="flex-grow-1">
    <div class="container">