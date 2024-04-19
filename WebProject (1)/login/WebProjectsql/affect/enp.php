<?php
@$name = $_POST['name'];
@$profession = $_POST['profession'];
@$heure = $_POST['heure'];
@$jour = $_POST['jour'];
@$fl= $_POST['pays'];

// Connexion à la base de données
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ensah';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Erreur de connexion à la base de données : ' . $conn->connect_error);
}
/*$sqlDelete = "DELETE FROM professeurs WHERE heure IS NULL";
if ($conn->query($sqlDelete) === FALSE) {
  echo 'Erreur lors de la suppression des lignes avec heure NULL : ' . $conn->error;
  exit;
}
// Insertion des données dans la table appropriée (ex. 'professeurs')
$sql = "INSERT INTO professeurs (nom, profession, heure, jour,fl) VALUES ('$name', '$profession', '$heure', '$jour','$fl')";
$nnl = "DELETE FROM professeurs WHERE heure IS NULL";
if ($conn->query($sql) === TRUE and $conn->query($nnl) === TRUE) {
  echo 'Les informations ont été stockées avec succès.';
  header('location:Emploi.php');
} else {
  echo 'Erreur lors du stockage des informations : ' . $conn->error;
}*/

include_once "connexion.php";

// Vérifier si des données ont été envoyées via la méthode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données envoyées
   // @$nom = $_POST['nom'];
  //  @$prenom = $_POST['prenom'];

    // Vérifier si les données sont non vides
    if (!empty($nom) && !empty($prenom)) {
        // Échapper les caractères spéciaux pour éviter les injections SQL
        $name = mysqli_real_escape_string($conn, $name);
        $prenom = mysqli_real_escape_string($conn, $prenom);

        // Construire la requête d'insertion
        $insertQuery = "INSERT INTO module_professeur (nom, prenom) VALUES ('$name', '$prenom')";

        // Exécuter la requête d'insertion
        $insertResult = mysqli_query($conn, $insertQuery);

        if ($insertResult) {
            // Les données ont été insérées avec succès
            echo "Données insérées avec succès";
        } else {
            // Une erreur s'est produite lors de l'insertion des données
            echo "Erreur lors de l'insertion des données : " . mysqli_error($conn);
        }
    } else {
        // Les données envoyées sont incomplètes
        echo "Veuillez fournir un nom et un prénom";
    }
}



// Fermeture de la connexion à la base de données

$conn->close();
?>
