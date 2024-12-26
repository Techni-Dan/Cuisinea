<p align="center">
<a href="#">
		<img width="300" src="assets/images/logo-cuisinea.jpg" alt="Cuisinea">
</a>
<br><br>
</p>

[![fr](https://img.shields.io/badge/lang-fr-blue.svg)](https://github.com/Techni-Dan/Cuisinea/blob/main/README.md)
[![en](https://img.shields.io/badge/lang-en-red.svg)](https://github.com/Techni-Dan/Cuisinea/blob/main/README.en.md)

# Cuisinea

Link to the online version of the project: [Click here](https://cuisinea.technidan.com)

## Project Description

Cuisinea is a web application that allows users to share and discover delicious recipes.

Users can browse recipes by category, view detailed instructions and ingredients, and register to save their favorite recipes or add their own creations.

## Features

- Recipe list with image, title and short description.
- Detailed recipe views with ingredients, instructions and image.
- Recipe filtering & search functionality.
- User registration and login.
- Ability for registered users to add and edit recipes.

## Getting Started

1. Clone the repository:
```bash
git clone git@github.com:Techni-Dan/Cuisinea.git
```

2. Configure the database:

- Import the database schema from the [schema.sql](schema.sql) file in phpMyAdmin. Open phpMyAdmin [http://127.0.0.1/phpmyadmin/index.php?route=/](http://127.0.0.1/phpmyadmin/index.php?route=/) and select the Import tab, click the Choose File button and select the schema.sql file from your project directory /Cuisinea and then click the Import button.

- This file was written by hand and allows you to create the Cuisinea database and insert data into this database via PhpMyAdmin.
- Among other data, a user has been inserted into the database:
- **DOE John, email: test@mail.com, password: test**.

3. Run the application

- Make sure a local PHP development environment is set up.
- Start the development server and navigate to the project in your web browser.

## Dependencies

- PHP 7.2 or later
- MySQL
- PHPMailer (to send email notifications)

## Project structure

- **index.php**: The main home page.
- **recipes.php**: Displays a list of recipes.
- **recipe.php**: Displays a detailed view of a single recipe.
- **ajout_modification_recette.php**: Form to add/edit recipes.
- **templates/**: Contains the HTML template files.
- **lib/**: Contains the project logic (session.php, recipe.php, user.php, etc.).
- **assets/**: Includes images, CSS, and JavaScript files.

## Contribution

We encourage contributions! Follow the standard fork-and-pull request workflow on GitHub.

## License

This project is licensed under the MIT License.