<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <?php

         //connexion à la base de donnée
          include_once "connexion.php";
         //on récupère le id dans le lien
          $id = $_POST['id'];
          //requête pour afficher les infos d'un employé
          $req = mysqli_query($con , "SELECT * FROM prof WHERE id = $id");
          $row = mysqli_fetch_assoc($req);


       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['buttonmod'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($nom) && isset($prenom)  && isset($profession) && isset($iprofession) && isset($Nationalite) && isset($ville)){
               //requête de modification
               $req = mysqli_query($con, "UPDATE prof SET nom = '$nom' , prenom = '$prenom' , age = '$age', profession ='$profession', iprofession = '$iprofession', Nationalite ='$Nationalite',ville = '$ville' WHERE id = $id");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                   // header("location: index.php");
                }else {//si non
                    $message = "prof non modifié";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
  <a href="delete.php?id=<?=$row['id']?>" target="_blank" class="info__social-link" onclick="openModal()">
                                <span class="info__social-icon">
                                    <i class="ri-delete-bin-2-fill"></i>
                                </span>
                            </a>
            <div class="modal" id="myModalm">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="center">
                                <h1>Modifier Professeurs</h1>
                                <p class="erreur_message">
                                    <?php 
                                    // si la variable message existe , affichons son contenu
                                    if(isset($message)){
                                        echo $message;
                                    }
                                    ?>
                        
                                </p>
                                <form action="" method="post">
                                    <div class="txt_field">
                                        <input type="text" name="nom" value="<?=$row['nom']?>" required>
                                        <span></span>
                                        <label>Nom</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="prenom" value="<?=$row['prenom']?>" required>
                                        <span></span>
                                        <label>Prenom</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="profession" value="<?=$row['profession']?>" required>
                                        <span></span>
                                        <label>Profession</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="iprofession" value="<?=$row['iprofession']?>" required>
                                        <span></span>
                                        <label>Specialte</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="Nationalite" value="<?=$row['Nationalite']?>" required>
                                        <span></span>
                                        <label>Nationalite</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="ville" value="<?=$row['ville']?>" required>
                                        <span></span>
                                        <label>Ville</label>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Ajouter" name="buttonmod" style="padding-top: 10PX;">
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
        </div>        
 </section>


                <script>
                    const modalm = document.getElementById("myModalm");
                    function openModalm() {
                        document.getElementById("myModalm").style.display = "block";
                    }
                    
                    window.onclick = function(event) {
                    if (event.target == modal) {
                    modal.style.display = "none";
                    }
                    }
                    
                    </script>
            </div>


</body>
</html>