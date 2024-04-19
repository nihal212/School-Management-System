<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="framework.css" />
    <link rel="stylesheet" href="card.css" />
    <link rel="stylesheet" href="search.css" />
    <link rel="stylesheet" href="buttonstyle.css" />
    <link rel="stylesheet" href="modal.css" />

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
    <script src="script.js" defer></script>
    <script src="main.js" defer></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Professeur</title>

</head>

<body>
<div class="modal "  id="update_modal<?php echo $fetch['user_id']?>" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="center">
                    <h1>Modifier Professeurs</h1>
                   
                    <form method="POST" action="">
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
                            <input type="submit" value="Ajouter" name="edit" style="padding-top: 10PX;">
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </div> 


    


    <div class="page d-flex">
        <section class="sidebar">
        <nav>
      <ul>
        <li><a href="index.html" class="logo">
            <img src="images/t2.png">
            <span class="nav-item" style="bottom: 0px;margin-left: 25px; top: 20px;">ENASH</span>
          </a></li>
        <li><a href="index.html">
            <i class="fas fa-menorah"></i>
            <span class="nav-item">Dashboard</span>
          </a></li>
        <li><a href="fl.php">
            <i class="fas fa-comment"></i>
            <span class="nav-item">Etudiants</span>
          </a></li>
        <li><a href="prof.php">
            <i class="fas fa-database"></i>
            <span class="nav-item">Professeurs</span>
          </a></li>
        <li><a href="Emploi.html">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Emploi Du Temps</span>
          </a></li>
        <li><a href="#">
            <i class="fas fa-cog"></i>
            <span class="nav-item">Setting</span>
          </a></li>

        <li><a href="#" class="logout">
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

            <div class="containerss">
                <form action="https://www.google.com/search" class="search" id="search-bar">
                    <input type="search" placeholder="Type something..." name="q" class="search__input">

                    <div class="search__button" id="search-button">
                        <i class="ri-search-2-line search__icon"></i>
                        <i class="ri-close-line search__close"></i>
                    </div>
                </form>
                <section>
                                 
                        
                        <?php
                        //vérifier que le bouton ajouter a bien été cliqué
                        if(isset($_POST['buttonsubb'])){
                            //extraction des informations envoyé dans des variables par la methode POST
                            extract($_POST);
                            //verifier que tous les champs ont été remplis
                            if(isset($nom) && isset($prenom)  && isset($profession) && isset($iprofession) && isset($Nationalite) && isset($ville)){
                                 //connexion à la base de donnée
                                 include_once "connexion.php";
                                 //requête d'ajout
                                 $req = mysqli_query($con , "INSERT INTO `prof` (`nom`, `prenom`, `profession`, `iprofession`, `Nationalite`, `ville`) VALUES ('$nom', '$prenom','$profession','$iprofession','$Nationalite','$ville')");
                                 if($req){//si la requête a été effectuée avec succès , on fait une redirection
                                     //header("location: prof.php");
                                 }else {//si non
                                     $message = "Employé non ajouté";
                                 }
                 
                            }else {
                                //si non
                                $message = "Veuillez remplir tous les champs !";
                            }
                        }
                     
                     ?> 




                <a href="#" class="buttonn" onclick="openModalAjout()">
                    <span class="buttonn__text">
                        Ajouter Professeur
                    </span>
                    <img src="img/cone.png" alt="" class="buttonn__cone">
                    <img src="img/torus.png" alt="" class="buttonn__torus">
                    <img src="img/icosahedron.png" alt="" class="buttonn__icosahedron">
                    <img src="img/sphere.png" alt="" class="buttonn__sphere">
                </a>
                <!-- Modal -->
                <div class="modal" id="myModal1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="center">
                                <h1>Ajout Professeurs</h1>
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
                                        <input type="text" name="nom" required>
                                        <span></span>
                                        <label>Nom</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="prenom" required>
                                        <span></span>
                                        <label>Prenom</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="profession" required>
                                        <span></span>
                                        <label>Profession</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="iprofession" required>
                                        <span></span>
                                        <label>Specialte</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="Nationalite" required>
                                        <span></span>
                                        <label>Nationalite</label>
                                    </div>
                                    <div class="txt_field">
                                        <input type="text" name="ville" required>
                                        <span></span>
                                        <label>Ville</label>
                                    </div>
                                    <div class="text-center">
                                        <input type="submit" value="Ajouter" name="buttonsubb" style="padding-top: 10PX;">
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
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
            </div>

            <!--End Start Search + Ajout BUTTON -->

            <!-- Start The Cards -->
            <div class="containerr">
                <?php 
                //inclure la page de connexion
                include_once "connexion.php";
                //requête pour afficher la liste des employés
                $req = mysqli_query($con , "SELECT * FROM prof");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore de Professeur ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while($row=mysqli_fetch_assoc($req)){
                        ?>


                <!-- Card -->
                <div class="cardd">
                    <div class="card__border">
                        <div class="card__perfil">
                            <img src="images/perfil.png" alt="card image" class="card__img">
                        </div>
                    </div>

                    <h3 class="card__name">
                        <?=$row['nom']?>
                        <?=$row['prenom']?>
                    </h3>
                    <span class="card__profession">
                        <?=$row['profession']?>
                    </span>

                    <!-- Card info -->
                    <div class="info">
                        <div class="info__icon">
                            <i class="ri-information-line"></i>
                        </div>

                        <div class="info__border">
                            <div class="info__perfil">
                                <img src="images/perfil.png" alt="card image" class="info__img">
                            </div>
                        </div>

                        <div class="info__data">
                            <h3 class="info__name">
                                <?=$row['nom']?>
                                <?=$row['prenom']?>
                            </h3>
                            <span class="info__profession">
                                <?=$row['iprofession']?>
                            </span>
                            <span class="info__location">
                                <?=$row['Nationalite']?>
                                <?=$row['ville']?>
                            </span>
                        </div>

                        <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                        <div class="info__social">
                            <a href="message.php?id=<?=$row['id']?>" target="_blank" class="info__social-link">
                                <span class="info__social-icon">
                                    <i class="ri-profile-fill"></i>

                                </span>
                            </a>
                           
                            <section>
                            <a href="prophile.php?id=<?=$row['id']?>"  class="info__social-link"  >
                             <span class="info__social-icon">
                                <i class="ri-pencil-fill"></i>
                             </span>
                             

                           
                            </a>
         
                    </section>
                     

           


                            <a href="delete.php?id=<?=$row['id']?>" target="_blank" class="info__social-link" >
                                <span class="info__social-icon">
                                    <i class="ri-delete-bin-2-fill"></i>
                                </span>
                               
                            </a>
                            
                        </div>
                    </div>
                   </div>

                <?php
                    }
                    
                }
            ?>

                <!-- End The Cards -->
            </div>

        </div>

</body>

</html>