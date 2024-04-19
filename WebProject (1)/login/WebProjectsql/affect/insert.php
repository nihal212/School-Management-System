<?php
// Récupérer les données envoyées par la requête AJAX
@$name = $_POST['name'];
@$surname = $_POST['surname'];

// Effectuer les opérations pour enregistrer les données dans la base de données
// Remplacez les lignes suivantes par votre code spécifique à votre base de données

// Exemple en utilisant PDO (MySQL)
$dsn = 'mysql:host=localhost;dbname=ensah';
$username = 'root';
$password = 'YES';

try {
    $pdo = new PDO($dsn, $username, $password);
    
    // Préparer et exécuter la requête SQL pour insérer les données dans la table appropriée
    $stmt = $pdo->prepare("INSERT INTO module_professeur (name, surname) VALUES (?, ?)");
    $stmt->execute([$name, $surname]);
    
    // Fermer la connexion à la base de données
    $pdo = null;
    
    // Répondre au client avec succès
    echo "Data saved successfully!";
} catch (PDOException $e) {
    // Gérer les erreurs de connexion à la base de données ou d'exécution de la requête
    echo "Error: " . $e->getMessage();
}
?>
