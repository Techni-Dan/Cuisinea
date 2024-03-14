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

?>