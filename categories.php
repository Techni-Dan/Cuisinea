<?php
require_once('lib/pdo.php'); 

$sql = "SELECT id, name FROM categories";
$result = $pdo->query($sql);

$categories = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row;
}

header('Content-Type: application/json');
echo json_encode($categories); 
