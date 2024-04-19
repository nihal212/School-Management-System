<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Profile</title>
  <link rel="stylesheet" href="pro.css" />
  <script src="profile.js" defer></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>My Profile</title>
  
</head>

<body>
<?php

//connexion à la base de donnée
 include_once "connexion.php";
//on récupère le id dans le lien
 $id = $_GET['id'];
 //requête pour afficher les infos d'un employé
 $req = mysqli_query($con , "SELECT * FROM prof WHERE id = $id");
 $row = mysqli_fetch_assoc($req);


//vérifier que le bouton modifier a bien été cliqué
if(isset($_POST['edit'])){
  //extraction des informations envoyé dans des variables par la methode POST
  extract($_POST);
  //verifier que tous les champs ont été remplis
  if(isset($_POST['nom'])){
      //requête de modification
      $req = mysqli_query($con, "UPDATE prof SET nom = '$nom' , prenom = '$prenom' , profession ='$profession', Nationalite ='$Nationalite',ville = '$ville' WHERE id = $id");
       if($req){//si la requête a été effectuée avec succès , on fait une redirection
           header("location: prof.php");
       }else {//si non
           $message = "Employé non modifié";
       }

  }
  else {
      //si non
     $message = "Veuillez remplir tous les champs !";
  }
}

?>
    <div class="all">
      <!-- sidebar -->
      <section class="sidebar">
        <div class="navs">
          <ul>
            <li><a href="index.html" class="logo">
                <img src="images/t2.png">
                <span class="nav-item" style="bottom: 0px;margin-left: 25px; top: 20px;">ENASH</span>
              </a></li>
            <li><a href="#">
                <i class="fas fa-menorah"></i>
                <span class="nav-item">Dashboard</span>
              </a></li>
            <li><a href="#">
                <i class="fas fa-comment"></i>
                <span class="nav-item">Etudiants</span>
              </a></li>
            <li><a href="prof.html">
                <i class="fas fa-database"></i>
                <span class="nav-item">Professeurs</span>
              </a></li>
            <li><a href="#">
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
        </div>
      </section>
      <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
          <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
              href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">User profile</a>
            <!-- Form -->
            <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
              <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <input class="form-control" placeholder="Search" type="text">
                </div>
              </div>
            </form>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
              <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <div class="media align-items-center">
                    <span class="avatar avatar-sm rounded-circle">
                      <img alt="Image placeholder"
                        src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                    </span>
                    <div class="media-body ml-2 d-none d-lg-block">
                      <span class="mb-0 text-sm  font-weight-bold"><?=$row['nom']?> <?=$row['prenom']?></span>
                    </div>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                  <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-single-02"></i>
                    <span>My profile</span>
                  </a>
                  <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-settings-gear-65"></i>
                    <span>Settings</span>
                  </a>
                  <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-calendar-grid-58"></i>
                    <span>Activity</span>
                  </a>
                  <a href="../examples/profile.html" class="dropdown-item">
                    <i class="ni ni-support-16"></i>
                    <span>Support</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#!" class="dropdown-item">
                    <i class="ni ni-user-run"></i>
                    <span>Logout</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
          style="min-height: 600px; background-image: url(https://raw.githubusercontent.com/creativetimofficial/argon-dashboard/gh-pages/assets-old/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
          <!-- Mask -->
          <span class="mask bg-gradient-default opacity-8"></span>
          <!-- Header container -->
          <div class="container-fluid d-flex align-items-center">
            <div class="row">
              <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white">Hello <?=$row['nom']?></h1>
                <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with
                  your work and manage your projects or assigned tasks</p>
                  <button class="btn btn-info" type="submit" form="mon-formulaire" name="edit">editx</button>
               <!-- <a href="#" onclick="document.getElementById('mon-formulaire').submit()"  name="edit" form="mon-formulaire" >Edit profile</a>-->
              </div>
            </div>
          </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
          <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
              <div class="card card-profile shadow">
                <div class="row justify-content-center">
                  <div class="col-lg-3 order-lg-2">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg"
                          class="rounded-circle">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                  <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                    <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                  </div>
                </div>
                <div class="card-body pt-0 pt-md-4">
                  <div class="row">
                    <div class="col">
                      <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                        <div>
                          <span class="heading">22</span>
                          <span class="description">Cours</span>
                        </div>
                        <div>
                          <span class="heading">3</span>
                          <span class="description">Classe</span>
                        </div>
                        <div>
                          <span class="heading">89</span>
                          <span class="description">Comments</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <h3>
                    <?=$row['nom']?> <?=$row['prenom']?><span class="font-weight-light">, <?=$row['age']?></span>
                    </h3>
                    <div class="h5 font-weight-300">
                      <i class="ni location_pin mr-2"></i><?=$row['Nationalite']?>, <?=$row['ville']?>
                    </div>
                    <div class="h5 mt-4">
                      <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                    </div>
                    <div>
                      <i class="ni education_hat mr-2"></i>University of ENASH
                    </div>
                    <hr class="my-4">
                    <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and
                      records all of his own music.</p>
                    <a href="#">Linkedin</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 order-xl-1">
              <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <h3 class="mb-0">My account</h3>
                      <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
                    </div>
                    <div class="col-4 text-right">
                      <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form id="mon-formulaire" action="" method="POST">
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-username">Nom</label>
                            <input type="text" id="input-username" class="form-control form-control-alternative"
                              placeholder="Username" value="<?=$row['nom']?>">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label class="form-control-label" for="input-email">Email address</label>
                            <input type="email" id="input-email" class="form-control form-control-alternative"
                              placeholder="email@example.com" value="<?=$row['email']?>">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-first-name">Prenom</label>
                            <input type="text" id="input-first-name" class="form-control form-control-alternative"
                              placeholder="prenom" value="<?=$row['prenom']?>">
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-last-name">Profession</label>
                            <input type="text" id="input-last-name" class="form-control form-control-alternative"
                              placeholder="Profession" value="<?=$row['profession']?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4">
                    <!-- Address -->
                    <h6 class="heading-small text-muted mb-4">Contact information</h6>
                    <div class="pl-lg-4">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-address">Address</label>
                            <input id="input-address" class="form-control form-control-alternative"
                              placeholder="Home Address" value="<?=$row['Address']?>"
                              type="text">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-city">Ville</label>
                            <input type="text" id="input-city" class="form-control form-control-alternative"
                              placeholder="Ville" value="<?=$row['ville']?>">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group focused">
                            <label class="form-control-label" for="input-country">Nationalite</label>
                            <input type="text" id="input-country" class="form-control form-control-alternative"
                              placeholder="Nationalite" value="<?=$row['Nationalite']?>">
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label class="form-control-label" for="input-country">Postal code</label>
                            <input type="number" id="input-postal-code" class="form-control form-control-alternative"
                              placeholder="Postal code" value="<?=$row['Pc']?>">
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-4">
                    <!-- Description -->
                    <h6 class="heading-small text-muted mb-4">About me</h6>
                    <div class="pl-lg-4">
                      <div class="form-group focused">
                        <label>About Me</label>
                        <textarea rows="4" class="form-control form-control-alternative"
                          placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                      </div>
                    </div>
                    <button class="btn btn-info" type="submit" name="edit">editx</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>

</body>

</html>