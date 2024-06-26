<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="emploi.css" />


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
        <div class="content w-full" style="flex:1;">
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

            <script>
                window.onload = function () {
                    document.getElementById("download")
                        .addEventListener("click", () => {
                            const invoice = this.document.getElementById("timetable");
                            console.log(timetable);
                            console.log(window);
                            var opt = {
                                margin: 1,
                                filename: 'mon_horaire.pdf',
                                image: {type: 'jpeg', quality: 1, dpi: 300},
                                html2canvas: { scale: 10 },
                                jsPDF: { unit: 'mm', format: 'Legal', orientation: 'landscape' }
                            };
                            html2pdf().from(timetable).set(opt).save();
                        })
                }




            </script>
            <button id="download">Télécharger</button>
            <div class="timetable" id="timetable">
                <div class="week-names">
                    <div>Lundi</div>
                    <div>Mardi</div>
                    <div>Mercredi</div>
                    <div>Jeudi</div>
                    <div>Vendredi</div>
        
                    <div class="weekend">Samedi</div>
                    <div class="weekend">Dimanche</div>
                </div>
                <div class="time-interval">
                    <div>8:30 - 9:30</div>
                    <div>9:30 - 10:30</div>
                    <div>10:30 - 12:30</div>
                    <div>14:30 - 15:30</div>
                    <div>15:30 - 16:30</div>
                    <div>16:30 - 18:30</div>
                </div>
                <?php 
                //inclure la page de connexion
                include_once "profemploiconnexion.php";
                ?>
               
                <div class="content">
                  
                <?php
                unset($rowi);
        $req = mysqli_query($con, "SELECT * FROM professeurs WHERE heure='8' AND nom='Dadi' AND jour='Lundi'");
        $row = mysqli_fetch_assoc($req);
        
       
        ?>
        
<div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
        
        <?php
        unset($rowi);
        $req = mysqli_query($con, "SELECT * FROM professeurs WHERE heure='8' AND nom='Dadi' AND jour='Mardi'");
        $row = mysqli_fetch_assoc($req);
        
        ?>
        
<div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
        
        <?php
        unset($rowi);
        $req = mysqli_query($con, "SELECT * FROM professeurs WHERE heure='8' AND nom='Dadi' AND jour='Mercredi'");
        $row = mysqli_fetch_assoc($req);
        
        ?>
        
<div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
        
        <?php
        unset($rowi);
$req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='8' and nom='Dadi' and jour='Jeudi'");
$row = mysqli_fetch_assoc($req);

?>
<div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>

                    <?php
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='8' and nom='Dadi'and jour='Vendredi'");
                    $row=mysqli_fetch_assoc($req);
                    unset($rowi);
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    $rowi = null; // Réinitialise la variable $rowi à null
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='8' and nom='Dadi'and jour='Samedi'");
                    $row=mysqli_fetch_assoc($req)
                    
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='9' and nom='Dadi'and jour='Lundi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='9' and nom='Dadi'and jour='Mardi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='9' and nom='Dadi'and jour='Mercredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='9' and nom='Dadi'and jour='Jeudi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='9' and nom='Dadi'and jour='Vendredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='9' and nom='Dadi'and jour='Samedi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                    <div class="status">
       <div class="drop__card">
           <div class="drop__data">
               <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
               <?php
               if (!empty($row['profession'])) {
                   $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                   $rowi = mysqli_fetch_assoc($reqi);
               }
               ?>
   
               <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
               <?php
               if (isset($rowi['image']) && !empty($rowi['image'])) {
                   echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
               } else {
                   echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
               }
               ?>
   
               <div>
                   <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                   <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
               </div>
           </div>
       </div>
   </div>
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='10' and nom='Dadi'and jour='Lundi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='10' and nom='Dadi'and jour='Mardi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='10' and nom='Dadi'and jour='Mercredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='10' and nom='Dadi'and jour='Jeudi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='10' and nom='Dadi'and jour='Vendredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='10' and nom='Dadi'and jour='Samedi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='14' and nom='Dadi'and jour='Lundi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='14' and nom='Dadi'and jour='Mardi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='14' and nom='Dadi'and jour='Mercredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='14' and nom='Dadi'and jour='Jeudi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='14' and nom='Dadi'and jour='Vendredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='15' and nom='Dadi'and jour='Lundi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='15' and nom='Dadi'and jour='Mardi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='15' and nom='Dadi'and jour='Mercredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='15' and nom='Dadi'and jour='Jeudi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='15' and nom='Dadi'and jour='Vendredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='16' and nom='Dadi'and jour='Lundi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='16' and nom='Dadi'and jour='Mardi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='16' and nom='Dadi'and jour='Mercredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='16' and nom='Dadi'and jour='Jeudi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <?php
                    unset($rowi);
                    $req = mysqli_query($con , "SELECT * FROM professeurs WHERE heure='16' and nom='Dadi'and jour='Vendredi'");
                    $row=mysqli_fetch_assoc($req)
                    ?>
                 <div class="status">
    <div class="drop__card">
        <div class="drop__data">
            <!-- j'ai mis le code pour obtenir l'image depuis la base de données en commentaire -->
            <?php
            if (!empty($row['profession'])) {
                $reqi = mysqli_query($con, "SELECT * FROM card_activation WHERE nom='" . $row['profession'] . "'");
                $rowi = mysqli_fetch_assoc($reqi);
            }
            ?>

            <!-- <img src="assets/img/js.png" alt="" class="drop__img"> -->
            <?php
            if (isset($rowi['image']) && !empty($rowi['image'])) {
                echo '<img src="upload_images/' . $rowi['image'] . '" alt="" class="drop__img">';
            } else {
                echo '<img src="assets/img/annuler.png" alt="" class="drop__img">';
            }
            ?>

            <div>
                <h1 class="drop__name"><?php if (isset($row['fl'])) {echo '<h3>' . $row['fl'] . '</h3>';} else {echo '';}?></h1>
                <span class="drop__profession"><?php if (isset($row['fl'])) {echo '<h3>' . $row['profession'] . '</h3>';} else {echo '';}?></span>
            </div>
        </div>
    </div>
</div>
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                    <div class="accent-pink-gradient">
                        <div class="weekend"></div>
                    </div>
                </div>
            </div>



            


        </div>
    </div>

</body>

</html>