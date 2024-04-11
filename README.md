<p align="center">
<a href="#">
		<img width="300" src="assets/images/logo-cuisinea.jpg" alt="Cuisinea">
</a>
<br><br>
</p>

# Cuisinea

Lien vers la version en ligne du projet: [Cliquez ici](https://cuisinea.technidan.com)

## Description du projet

Cuisinea est une application web qui permet aux utilisateurs de partager et de découvrir de délicieuses recettes. 

Les utilisateurs peuvent parcourir les recettes par catégorie, afficher des instructions détaillées et des ingrédients, et s'inscrire pour enregistrer leurs recettes préférées ou ajouter leurs propres créations.

## Fonctionnalités

- Liste de recettes avec image, titre et brève description.
- Vues de recettes détaillées avec ingrédients, instructions et image.
- Fonctionnalité de recherche de recettes (implémentation future).
- Enregistrement et connexion des utilisateurs.
- Possibilité pour les utilisateurs enregistrés d'ajouter et de modifier des recettes.

## Démarrage

1. Cloner le dépôt:
```bash
git clone git@github.com:Techni-Dan/Cuisinea.git 
```

2. Configurer la base de données:

- Importez le schéma de la base de données à partir du fichier [schema.sql](schema.sql) dans phpMyAdmin: [http://127.0.0.1/phpmyadmin/index.php?route=/](http://127.0.0.1/phpmyadmin/index.php?route=/).

3. Exécuter l'application

- Assurez-vous qu'un environnement de développement PHP local est configuré.
- Démarrez le serveur de développement et accédez au projet dans votre navigateur web.

## Dépendances

- PHP 7.2 ou version ultérieure
- MySQL
- PHPMailer (pour envoyer des notifications par email)

## Structure du projet

- **index.php**: La page d'accueil principale.
- **recettes.php**: Affiche une liste de recettes.
- **recette.php**: Affiche une vue détaillée d'une seule recette.
- **ajout_modification_recette.php**: Formulaire pour ajouter/modifier des recettes.
- **templates/**: Contient les fichiers de template HTML.
- **lib/**: Contient la logique du projet (session.php, recipe.php, user.php, etc.).
- **assets/**: Inclut les images, les fichiers CSS et JavaScript.

## Contribution

Nous encourageons les contributions ! Suivez le flux de travail standard de fork-and-pull request sur GitHub.

## Licence

Ce projet est sous licence MIT.