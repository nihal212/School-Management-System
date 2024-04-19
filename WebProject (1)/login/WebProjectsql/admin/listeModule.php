<?php
include "connexion.php";
$id = $_GET['id'];

@$ch = $_POST["ch"];
@$valider = $_POST["valider"];

if(isset($valider) && is_array($ch)){
    // Fusionnez les valeurs du tableau en une seule chaîne de caractères séparée par une virgule
    $nom_module = implode(",", $ch);

    // Utilisez la fonction mysqli_real_escape_string pour échapper les caractères spéciaux dans la valeur de $nom_module
    $nom_module = mysqli_real_escape_string($con, $nom_module);

    // Exécutez la requête en utilisant des guillemets simples autour de $nom_module pour la valeur de chaîne
    $req = mysqli_query($con, "INSERT INTO `module` (`id`, `nom_module`, `semestre`) VALUES ($id, '$nom_module', 'S1')");
    header("location: youssef.php"); 
}
?>

<?php
include "connexion.php";
$id = $_GET['id'];

@$ch = $_POST["ch"];
@$valider = $_POST["valider"];

if(isset($valider) && is_array($ch)){
    // Parcourez les modules sélectionnés et insérez-les individuellement dans la table "module"
    foreach($ch as $module){
        // Utilisez la fonction mysqli_real_escape_string pour échapper les caractères spéciaux dans la valeur du module
        $module = mysqli_real_escape_string($con, $module);

        // Exécutez la requête pour insérer le module dans la table "module"
        $req = mysqli_query($con, "INSERT INTO `module` (`id`, `nom_module`, `semestre`) VALUES ($id, '$module', 'S1')");
    }
    header("location: youssef.php"); 
}
?>



<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Dropdown Select Menu</title><!-- CSS -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="page1.css" />


<!-- Fontawesome CDN Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Dropdown Select Menu</title><!-- CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="page2.css">

<!-- Fontawesome CDN Link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    
    <div class="container" style="position:relative;  top:0px; bottom:50px; left:400px;">
        <div class="select-btn">
            <span class="btn-text">Selectioner les modules pour cette filliere</span>
            <span class="arrow-dwn">
                <i class="fa-solid fa-chevron-down"></i>
            </span>
        </div>
       
        <form action="" method="post" class="list-items">
            <?php
            include 'connexion.php';        // First List - id_departement='i1'
            $query = "SELECT nom FROM card_activation ";
            $result = mysqli_query($con, $query);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
            ?>
                
                    <span class="checkbox">
                        
<input type="checkbox" name="ch[]" value="<?= $row['nom'] ?>">                  
  </span>
                    <span class="item-text"><?= $row['nom'] ?></span>
                    <br>
               
            <?php
                }
            }
            ?>  
            <?php
            if(isset($_POST['exit2'])){ 
  header("location: youssef.php");
}?> 
             
              <div class="text-center">
                          
                          <input type="submit" value="envoyer" name="valider" style=" position:relative;padding-bottom:40px; margin-bottom:40px; top:30px;bottom:30px; height:40px;">
                      </div> 
                      
                      <div class="text-center">
                            <input type="submit" value="exit" name="exit2" style="padding-top: 10PX; width:130px; height:50px;background-color:red; position:relative; top:10px; left:120px; bottom:60px;">
                        </div>
            </form>
         </div>


    <!-- JavaScript -->
    <script src="js/script.js"></script>
  