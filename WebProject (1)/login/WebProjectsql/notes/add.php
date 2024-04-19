<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=ensah", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //adding data to the database
    if (isset($_POST['submit'])) {
        $CNE = $_POST['CNE'];
        $nom = $_POST['nom_prenom'];
        $NF = $_POST['note_finale'];
        $val = $_POST['validation'];
        $NAR = $_POST['noteAratt'];

        $requete = "INSERT INTO note(CNE,nom_prenom,note_finale,validation,noteAratt) VALUES ('$CNE','$nom','$NF','$val','$NAR')";
        $result = $con->exec($requete);
        header('location:index.php');
    }
} catch (PDOException $e) {
    echo "donnees non inserees" . $e->getMessage();
}
$con = null;
?>
