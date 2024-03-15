<?php

$pdo = new PDO('mysql:dbname=Cuisinea;host=localhost;charset=utf8mb4', 'root', '');

$id = (int)$_GET['id'];
$query = $pdo->prepare("SELECT * FROM users Where id = :id");
$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->execute();
$result = $query->fetch();

var_dump($result);
