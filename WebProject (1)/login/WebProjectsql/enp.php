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
$dbname = 'prof';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die('Erreur de connexion à la base de données : ' . $conn->connect_error);
}
$sqlDelete = "DELETE FROM professeurs WHERE heure IS NULL";
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
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
