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
                  <li><a href="index.html" class="logo">
                      <img src="images/t2.png">
                      <span class="nav-item" style="bottom: 0px;margin-left: 25px; top: 20px;">ENASH</span>
                    </a></li>
                  <li><a href="../WebProjectsql/dash_coord.php">
                      <i class="fas fa-menorah"></i>
                      <span class="nav-item">Dashboard</span>
                    </a></li>
                  <li><a href="../WebProjectsql/affect/nihal.php">
                      <i class="fas fa-comment"></i>
                      <span class="nav-item">Affecter les modules aux profs</span>
                    </a></li>
                  <li><a href="prof.php">
                      <i class="fas fa-database"></i>
                      <span class="nav-item">Professeurs</span>
                    </a></li>
                  <li><a href="Emploi.html">
                      <i class="fas fa-chart-bar"></i>
                      <span class="nav-item">Emploi Du Temps</span>
                    </a></li>
                    <li><a href="Emploipers.php">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Emploi Personnel</span>
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
            <form id="myForm" action="enp.php" method="POST">
            <label for="pays">Choisissez une filiere :</label>
            <select id="pays" name="fl">
    <option value="gi">GI</option>
    <option value="ge">GEE</option>
    <option value="gd">GD</option>
    <option value="gm">GM</option>
  </select> 
  <!-- Vos éléments de carte draggable ici -->

   <button type="submit" id="btn-sauvegarder">Sauvegarder</button>
</form>



            <div class="all">

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
                    <div class="content">
                        <div class="status" data-id="1" data-jour="Lundi" data-heure="08:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mardi" data-heure="08:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mercredi" data-heure="08:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Jeudi" data-heure="08:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>

                        <div class="status" data-id="1" data-jour="Vendredi" data-heure="08:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>

                        <div class="status" data-id="1" data-jour="Samedi" data-heure="08:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="status" data-id="1" data-jour="Lundi" data-heure="09:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mardi" data-heure="09:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mercredi" data-heure="09:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        
                            <div class="status" data-id="1" data-jour="Jeudi" data-heure="09:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                    
                        <div class="status" data-id="1" data-jour="Vendredi" data-heure="09:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>

                        <div class="status" data-id="1" data-jour="Samedi" data-heure="09:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="status" data-id="1" data-jour="Lundi" data-heure="10:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mardi" data-heure="10:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mercredi" data-heure="10:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Jeudi" data-heure="10:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Vendredi" data-heure="10:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>

                        <div class="status" data-id="1" data-jour="Samedi" data-heure="10:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="status" data-id="1" data-jour="Lundi" data-heure="14:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mardi" data-heure="14:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mercredi" data-heure="14:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Jeudi" data-heure="14:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Vendredi" data-heure="14:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="status" data-id="1" data-jour="Lundi" data-heure="15:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mardi" data-heure="15:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mercredi" data-heure="15:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Jeudi" data-heure="15:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Vendredi" data-heure="15:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="status" data-id="1" data-jour="Lundi" data-heure="16:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mardi" data-heure="16:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Mercredi" data-heure="16:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Jeudi" data-heure="16:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="status" data-id="1" data-jour="Vendredi" data-heure="16:00" ondragover="allowDrop(event)" ondrop="drop(event)"></div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                        <div class="accent-pink-gradient">
                            <div class="weekend"></div>
                        </div>
                    </div>
                </div>
                <div class="drop">

                    <div class="drop__container" data-info="Données associées" id="drop-items">
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
                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement1">
                            <div class="drop__data">
                                <img src="images/<?php echo$row['image'];?>" alt="" class="drop__img"  ondragstart="drag(event)" class="todo">
                                <div>
                                    <h1 class="drop__name"><?=$row['nom']?><?=$row['prenom']?></h1>
                                    <span class="drop__profession"><?=$row['profession']?></span>
                                </div>
                            </div>

                        </div>
                        <?php
                    }
                    
                }
            ?>

                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement2">
                            <div class="drop__data">
                                <img src="assets/img/img2.jpg" alt="" class="drop__img">
                                <div>
                                    <h1 class="drop__name">Sara Mill</h1>
                                    <span class="drop__profession">Graphic design</span>
                                </div>
                            </div>


                        </div>
                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement3">
                            <div class="drop__data">
                                <img src="assets/img/img3.jpg" alt="" class="drop__img">
                                <div>
                                    <h1 class="drop__name">Robbie Ford</h1>
                                    <span class="drop__profession">Ui/Ux design</span>
                                </div>
                            </div>


                        </div>

                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement4">
                            <div class="drop__data">
                                <img src="assets/img/img4.jpg" alt="" class="drop__img">
                                <div>
                                    <h1 class="drop__name">Jenny Lit</h1>
                                    <span class="drop__profession">Digital marketing</span>
                                </div>
                            </div>


                        </div>
                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement5">
                            <div class="drop__data">
                                <img src="assets/img/img1.jpg" alt="" class="drop__img" draggable="true" class="todo">
                                <div>
                                    <h1 class="drop__name">Clay</h1>
                                    <span class="drop__profession">Web developer</span>
                                </div>
                            </div>

                        </div>

                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement6">
                            <div class="drop__data">
                                <img src="assets/img/img2.jpg" alt="" class="drop__img">
                                <div>
                                    <h1 class="drop__name">Sara Mill</h1>
                                    <span class="drop__profession">Graphic design</span>
                                </div>
                            </div>


                        </div>
                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement7">
                            <div class="drop__data">
                                <img src="assets/img/img3.jpg" alt="" class="drop__img">
                                <div>
                                    <h1 class="drop__name">Robbie Ford</h1>
                                    <span class="drop__profession">Ui/Ux design</span>
                                </div>
                            </div>


                        </div>

                        <div class="drop__card" draggable="true" ondragstart="drag(event)" id="monElement8">
                            <div class="drop__data">
                                <img src="assets/img/img4.jpg" alt="" class="drop__img">
                                <div>
                                    <h1 class="drop__name">Jenny Lit</h1>
                                    <span class="drop__profession">Digital marketing</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div> 


        </div>
    </div>

</body>

</html>