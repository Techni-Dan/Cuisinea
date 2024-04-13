<?php

require_once('lib/pdo.php'); 

$searchTerm = $_GET['search_term'] ?? ''; 
$category = $_GET['category'] ?? ''; 

$sql = "SELECT * FROM recipes
        WHERE (? = '' OR title LIKE ? OR description LIKE ? OR ingredients LIKE ?)
        AND (? = '' OR category_id = ?)";  // Add filtering logic
;
// Préparer la requête
$stmt = $pdo->prepare($sql);
if (!$stmt) {
    echo json_encode([]); 
    exit;
}

// Lier les paramètres
$searchTermWithWildcards = '%' . $searchTerm . '%'; 
$stmt->bindParam(1, $searchTermWithWildcards, PDO::PARAM_STR); 
$stmt->bindParam(2, $searchTermWithWildcards, PDO::PARAM_STR); 
$stmt->bindParam(3, $searchTermWithWildcards, PDO::PARAM_STR); 
$stmt->bindParam(4, $searchTermWithWildcards, PDO::PARAM_STR);
$stmt->bindParam(5, $category, PDO::PARAM_STR); 
$stmt->bindParam(6, $category, PDO::PARAM_STR); 

// Exécuter la requête
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 

header('Content-Type: application/json'); 
echo json_encode($result); 
