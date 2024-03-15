<?php

$pdo = new PDO('mysql:dbname=Cuisinea;host=localhost;charset=utf8mb4', 'root', '');

$id = $_GET['id'];
$query = $pdo->prepare("SELECT * FROM users Where id =$id");
$query->execute();
$result = $query->fetch();

var_dump($result);

// http://127.0.0.1/Cuisinea/test.php?id=1;DELETE FROM users;