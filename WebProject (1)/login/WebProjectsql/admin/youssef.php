<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="youssef.css">
    <link rel="stylesheet" href="aide.css">
    


    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css"
        integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <script src="empl.js" defer></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <title>Emploi</title>

</head>
<body>
<div class="page d-flex">
        <section class="sidebar">
            <nav>
                <ul>
                <li><a href=# class="logo">
            <img src="images/t2.png">
            <span class="nav-item" style="bottom: 0px;margin-left: 25px; top: 20px;">ENASH</span>
          </a></li>
        <li><a href="../WebProjectsql/dash_admin.php">
            <i class="fas fa-menorah"></i>
            <span class="nav-item">Dashboard</span>
          </a></li>
        <li><a href="../WebProjectsql/admin/youssef.php">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Creer une filiere</span>
          </a></li>
        <li><a href="../WebProjectsql/prof.php">
                      <i class="fas fa-database"></i>
                      <span class="nav-item">Creer un profeseur</span>
                    </a></li>
           <li><a href="../WebProjectsql/etudiant.php">
                      <i class="fas fa-database"></i>
                      <span class="nav-item">Creer compte etudiant</span>
                    </a></li>
          
        <li><a href="login/logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a></li>
                </ul>
              </nav>
        </section>
        <div class="content w-full">
         <!-- NAVBAR -->
            <navx>
                <i class='bx bx-menu toggle-sidebar'></i>
                <form action="#">
                    <div class="form-group">
                        <input type="text" placeholder="Search...">
                        <i class='bx bx-search icon'></i>
                    </div>
                </form>
                <a href="#" class="nav-link" style="width: 0px">
                    <i class='bx bxs-bell icon'></i>
                    <span class="badge">5</span>
                </a>
                <a href="#" class="nav-link" style="width: 0px">
                    <i class='bx bxs-message-square-dots icon'></i>
                    <span class="badge">8</span>
                </a>
                <span class="divider"></span>
                <div class="profile">
                    <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                        alt="">
                    <ul class="profile-link">
                        <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
                        <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
                        <li><a href="#"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
                    </ul>
                </div>
            </navx>
            <!-- NAVBAR -->
            <?php
            //vérifier que le bouton ajouter a bien été cliqué
            if(isset($_POST['buttonsub'])){
                //extraction des informations envoyé dans des variables par la methode POST
                extract($_POST);
                //verifier que tous les champs ont été remplis
                if(isset($nomfl)  && isset($nbrmdl)) {
                     //connexion à la base de donnée
                     include_once "connexion.php";
                     //requête d'ajout
                     $req = mysqli_query($con, "INSERT INTO `fl` (`nomfl`, `nbrmdl`) VALUES ('$nomfl', '$nbrmdl')");

                     if($req){//si la requête a été effectuée avec succès , on fait une redirection
                        // header("location: youssef.php");
                     }else {//si non
                         $message = "filliere non ajouté";
                     }
     
                }else {
                    //si non
                    $message = "Veuillez remplir tous les champs !";
                }
            }
         
         ?> 
            <?php
            //vérifier que le bouton ajouter a bien été cliqué
            if(isset($_POST['choisir'])){
                //extraction des informations envoyé dans des variables par la methode POST
                extract($_POST);
                //verifier que tous les champs ont été remplis
                if(isset($id) && isset($nomfl)  && isset($nbrmdl)) {
                     //connexion à la base de donnée
                     include_once "connexion.php";
                     //requête d'ajout
                     $req = mysqli_query($con , "INSERT INTO `fl` (`id`, `nomfl`, `nbrmdl`) VALUES ('$id', '$nomfl','$nbrmdl')");
                     if($req){//si la requête a été effectuée avec succès , on fait une redirection
                         //header("location: prof.php");
                     }else {//si non
                         $message = "filliere non ajouté";
                     }
     
                }else {
                    //si non
                    $message = "Veuillez remplir tous les champs !";
                }
            }
         
         ?> 


<section class="main">

<div class="users">


</div>

<section class="attendance">
<div class="attendance-list">
<section>
<a href="#" onclick="openModalAjout()">
  <h1 id="h">Ajouter une Fillière</h1>
</a>
 <!-- Modal -->

 <div class="modal" id="myModal1">

        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="center">
                    <h1>Ajout Filliere</h1>
                    <form action="" method="post">
                        
                        <div class="txt_field">
                            <input type="text" name="nomfl" required>
                            <span></span>
                            <label>donner le nom filliere</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" required name="nbrmdl">
                            <span></span>
                            <label>donner le nombre de module</label>
                        </div>
                        
                       
                       
                        <div class="text-center">
                            <input type="submit" value="Ajouter" name="buttonsub"
                                style="padding-top: 10PX;">
                        </div>
                    </form>
                </div>
            </div>

  </div></div>
</section>
  <script>
        const modalAjout = document.getElementById("myModal1");
        const modalModif = document.getElementById("myModal2");
    
        function openModalAjout() {
            modalAjout.style.display = "block";
        }
    
        function openModalModif() {
            modalModif.style.display = "block";
        }
    
        window.onclick = function(event) {
            if (event.target == modalAjout || event.target == modalModif) {
                modalAjout.style.display = "none";
                modalModif.style.display = "none";
            }
        }
    </script>
<table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Filliere</th>
    <th>chef de departement</th>
    <th>modifier</th>
    <th>supprimer</th>
    <th>choisir coordinateur</th>
    <th>liste des module</th>
    <!--<th>presence</th>-->
  </tr>
</thead>
<tbody>
  <?php 
                //inclure la page de connexion
                include "connexion.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM fl");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore d'employé ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['id']?></td>
                            <td><?=$row['nomfl']?></td>
                            
                            <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                            <td  style="width:170px" ><a href="" class="C2"></a><?=$row['nbrmdl']?></td>

                            <!--<td ><a href="editer.php?id=<?//=$row['id']?>" class="c1"><i id="del2" class="del fa-solid fa-pen-to-square"></i></a></td>-->
                            <td>
                            <!-- Bouton "Choose" pour modifier les données -->
                            <a  style="width:10px" href="#" onclick="openModalModif(
                                '<?=$row['id']?>',
                                '<?=$row['nomfl']?>',
                                '<?=$row['nbrmdl']?>'
                            )">
                        
                                <i  id="del2" class="del fa-solid fa-pen-to-square"></i>
                            </a>

                        </td>

                            <td><a href="supprimer.php?id=<?=$row['id']?>"  target="_blank" class="c1"><i class="del fa-solid fa-trash-can"></i></a></td>
                            <td ><a href="coordinateur.php?id=<?=$row['id']?>" class="c1">coordinateur</a></td>

                          
                          <td><a href="listeModule.php?id=<?=$row['id']?>"  target="_blank" class="c1">affecter</a>
                          <a href="liste_module.php?id=<?=$row['id']?>"  target="_blank" class="c1">consulter</a></td>

                          </tr>
                        <?php
                    }
                    
                }
            ?>

  
</tbody>
</table>
</div>
</section>
<section >


       
</form>

</div>
</section>
</section>
</div>


<style>
#submit2{
color:white;
backround_color:white;
}
</style>
<?php
            // Inclure la page de connexion
            include "connexion.php";

            if (isset($_POST['choose'])) {
                $id = $_POST['id'];
                $nomfl = $_POST['nomfl'];
                $nbrmdl = $_POST['nbrmdl'];

                // Requête pour mettre à jour les données par ID
                $update = "UPDATE fl SET nomfl='$nomfl', nbrmdl='$nbrmdl' WHERE id=$id";
                $run_update = mysqli_query($con, $update);

                if ($run_update) {
                    echo "<script>
                        alert('Success! Data has been successfully updated!');
                        window.location.href = 'youssef.php';
                    </script>";
                } else {
                    echo "Data not updated";
                }
            }
?>

<!-- Modal pour la modification des données -->
<div id="modalModif" class="modal">
<div class="modal-content">
<span id="sp" onclick="closeModalModif()">&times;</span>
<div class="modal-content" id="modalModif" >
                <div class="center">
                    <h1>Ajout Filliere</h1>
                    <form method="post" >
                    <input type="hidden" id="modifId" name="id" />

                        <div class="txt_field">
                        <input type="text" id="modifFilliere" name="nomfl" required />

                            <span></span>
                            <label>filliere</label>
                        </div>
                        <div class="txt_field">
                        <input type="text" id="modifNombreModule" name="nbrmdl" required />
                            <span></span>
                            <label>nom de cfhef de departement</label>
                        </div>
                       <div class="text-center">
                            <input type="submit" value="Modifier" name="choose"
        style="padding-top: 10PX;">
                        </div>

                    </form>
                </div>
            </div>

<script>
// Fonction pour ouvrir le modal de modification avec les données
function openModalModif(id, nomfl, nbrmdl) {
document.getElementById("modifId").value = id;
document.getElementById("modifFilliere").value = nomfl;
document.getElementById("modifNombreModule").string = nbrmdl;
document.getElementById("modalModif").style.display = "block";
}

// Fonction pour fermer le modal de modification
function closeModalModif() {
document.getElementById("modalModif").style.display = "none";
}
</script>
 </div>
</div>
</body>
</html>
