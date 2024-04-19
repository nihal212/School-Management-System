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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Professeur</title>
</head>

<body>
    <div class="modal" id="myModal2">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="center">
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
                            <input type="text" name="profession" value="<?=$row['Filliere']?>" required>
                            <span></span>
                            <label>Filiere</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="iprofession" value="<?=$row['email']?>" required>
                            <span></span>
                            <label>Email</label>
                        </div>
                        <div class="txt_field">
                            <input type="text" name="Nationalite" value="<?=$row['Nationalite']?>" required>
                            <span></span>
                            <label>Date Naissance</label>
                        </div>
                       
                        <div class="text-center">
                            <input type="submit" value="Ajouter" name="buttonmod" style="padding-top: 10PX;">
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
        <li><a href=# class="logo">
            <img src="images/t2.png">
            <span class="nav-item" style="bottom: 0px;margin-left: 25px; top: 20px;">ENASH</span>
          </a></li>
        <li><a href="../WebProjectsql/dash_prof.php">
            <i class="fas fa-menorah"></i>
            <span class="nav-item">Dashboard</span>
          </a></li>
        <li><a href="../WebProjectsql/Emploipers.php">

            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Emploi Du Temps Personnel</span>
          </a></li>
        <li><a href="../WebProjectsql/notes/index.php">
                      <i class="fas fa-database"></i>
                      <span class="nav-item">Notes</span>
                    </a></li>
           <li><a href="../WebProjectsql/module/index.php">
                      <i class="fas fa-database"></i>
                      <span class="nav-item">Consulter les modules</span>
                    </a></li>
                    <li><a href="../WebProjectsql/consulte_etudiant.php">
                      <i class="fas fa-database"></i>
                      <span class="nav-item">Consulter les etudiants</span>
                    </a></li>
        <li><a href="../logout.php" class="logout">
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

                    window.onclick = function (event) {
                        if (event.target == modalAjout || event.target == modalModif) {
                            modalAjout.style.display = "none";
                            modalModif.style.display = "none";
                        }
                    }
                </script>
            </div>

            <div class="containerr">

                <!-- Table -->
                <section class="attendance">
                    <div class="attendance-list">
                      <h1 style="color: black; padding-left: 5px;"> Liste Etudiants :</h1>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Filliere</th>
                            <th>Email</th>
                            <th>Date Naissance</th>
    
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                            //inclure la page de connexion
                            include_once "connexion.php";
                            //requête pour afficher la liste des employés
                            $req = mysqli_query($con , "SELECT * FROM etudiant");
                            if(mysqli_num_rows($req) == 0){
                                //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                                echo "Il n'y a pas encore d'employé ajouter !" ;
                                
                            }else {
                                //si non , affichons la liste de tous les employés
                                while($row=mysqli_fetch_assoc($req)){
                                    ?>
                                    <tr>
                                        <td><?=$row['id']?></td>
                                        <td><?=$row['nom']?></td>
                                        <td><?=$row['prenom']?></td>
                                        <td><?=$row['Filliere']?></td>
                                        <td><?=$row['email']?></td>
                                        <td><?=$row['dtn']?></td>
                                        <!--Nous alons mettre l'id de chaque employé dans ce lien -->
                    
                                    </tr>
                                    <?php
                                }
                                
                            }
                        ?>
                         
             
                       
                       </tbody>
                      </table>
                    </div>
                  </section>


            </div>
        </div>



</body>

</html>