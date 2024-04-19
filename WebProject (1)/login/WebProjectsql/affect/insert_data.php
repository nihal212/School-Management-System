<?php
include_once "connexion.php";

// Vérifier si les données sont présentes dans la requête POST
if (isset($_POST['data']) && isset($_POST['professeur']) && isset($_POST['module'])) {
    // Récupérer les données depuis la requête POST
    $data = $_POST['data'];
    $professeur = $_POST['professeur'];
    $module = $_POST['module'];

    // Effectuer ici les validations et les opérations nécessaires sur les données
    
    // Insérer les données dans la base de données
    $query = "INSERT INTO modu_prof (professeur, module) VALUES ('$professeur','$module')";

    // Exécuter la requête SQL
    if (mysqli_query($con, $query)) {
        echo "Données insérées avec succès.";
    } else {
        echo "Erreur lors de l'insertion des données : " . mysqli_error($con);
    }
} else {
    echo "Aucune donnée reçue.";
}
?>
