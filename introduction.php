<?php

// Ceci affiche un message à l'ecran
/*
  Ligne 1
  Ligne 2
*/
echo 'Bonjour<br><br>';
$age = 16;
echo $age;
echo '<br><br>';

$age = 20;
echo $age;
echo '<br><br>';

// Une constant n'est défini qu'une seul fois
define("_APP_VERSION_", "1.2.6");
echo _APP_VERSION_;
echo '<br><br>';

// On test l'âge. Si l'âge est supérieur à 18, on affiche un message, sinon un autre mezssage
if ($age >= 18) {
  echo 'adulte';
} elseif ($age >= 13) {
  echo 'ado';
} else {
  echo 'enfant';
}
echo '<br><br>';

$numJour = 3;

switch ($numJour) {
  case 1:
    echo "Lundi";
    break;
  case 2:
    echo "Mardi";
    break;
  case 3:
    echo "Mercredi";
    break;
  case 4:
    echo "Jeudi";
    break;
  case 5:
    echo "Vendredi";
    break;
  case 6:
    echo "Samedi";
    break;
  case 7:
    echo "Dimanche";
    break;
  default:
    echo "Numéro de jour invalide";
}
echo '<br><br>';

echo "Age :  $age ans"; // les guilime " permet d'inserer de variables
echo '<br><br>';
echo 'L\'age : $age ans'; // les guilime ' ne permet pas d'inserer de variables
echo '<br><br>';

echo 'Bonjour ' . 'tout le monde';
echo '<br><br>';
echo 'Age : '. $age . ' ans';
echo '<br><br>';

echo `test`;
echo '<br><br>';

// Tableau simple
$fruits = array("Bannane", "Orange", "Pomme");
echo $fruits[0]; // Affiche "Banane"
echo '<br><br>';
$fruits2 =["Mangue", "Raisin"];
var_dump($fruits2);
echo '<br><br>';


// Tablea associatif
$utilisateur = ["nom" => "Dupond", "prenom" => "Jean", "age" => 26];
echo $utilisateur["nom"].' '.$utilisateur["prenom"].' '.$utilisateur["age"].' ans'; // Affiche "Dupond Jean 26 ans"


echo '<br><br>';

$utilisateurs = [
  ["nom" => "Dupond", "prenom" => "Jean", "age" => 26],
  ["nom" => "Martin", "prenom" => "Rose", "age" => 35],
  ["nom" => "Doe", "prenom" => "Jane", "age" => 31]
];
echo $utilisateurs[2]["nom"].' '.$utilisateurs[2]["prenom"].' '.$utilisateurs[2]["age"].' ans'; // Affiche "Doe Jane 31 ans"
echo '<br><br>';
var_dump($utilisateurs[0]);
echo '<br><br>';
var_dump($utilisateurs);
echo '<br><br>';

foreach ($utilisateurs as $key => $value) {
  echo $key.' '.$value['nom'].' '.$value['prenom'].' '.$value['age'].' ans<br>';
}
echo '<br><br>Boucle for<br>';

for ($i = 1; $i <= 10; $i++) {
  echo "$i ";
}

echo '<br><br>Boucle While<br>';


$j = 1;
while ($j <+ 10) {
  echo "$j ";
  $j++;
}
echo '<br><br>';

echo "<strong>include</strong> n'affiche pas d'erreur si erreur<br>";
echo "include once = include juste une fois<br>";
echo "require = fatal error si erreur -> conseilé<br>";
echo "require once = require une seul fois<br>";
echo '<br><br>';









?>