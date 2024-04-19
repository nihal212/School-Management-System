<?php
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

// if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'professeur') {
//     // Rediriger vers une page d'erreur ou vers la page de connexion
//     header('Location: index.php');
//     exit();
// }

// Le code pour l'espace du prof
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="framework.css" />
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
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <title>Home</title>
</head>

<body>

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
          
        <li><a href="../logout.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a></li>
      </ul>
    </nav>
  </section>

  <div class="content">


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
        <img
          src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
          alt="">
        <ul class="profile-link">
          <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
          <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
          <li><a href="#"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
        </ul>
      </div>
    </navx>
    <!-- NAVBAR -->




    <main class="main">
      <div class="card">
        <img class="fille" src="images/Studying-bro.png">


        <div class="titre" style="margin-left: 0px;margin-right: 50px;">



          <h1 style="margin-bottom: 0px;">Ensah Panel</h1>

          <h1 style="margin-top: 15px;">BONJOUR MR. <?php echo $_SESSION['role']; ?></h1>

        </div>


        <img class="puzzle" src="images/Logic-amico.png">

      </div>
      <div class="card">
        <i class="fa fa-solid fa-calendar-minus" style="padding-right: 20px;"></i>
        <div class="calendar">
          <h3 style="margin-bottom: 5px;">Change Period</h3>

          <p class="date" style="margin-top: 0px;">Jan 20th-Feb8th 2022</p>
        </div>
        <i class="fa-solid fa-sort-down" style="margin-left: 190px;margin-top: 10px;"></i>
      </div>
      <div class="card">
        <i class="fg fa-solid fa-user-graduate" style=" margin-top: 20px;padding-left: 25px;padding-top: 15px;"></i>
        <div class="nbr1">
          <h3>8,999</h3>
          <p class="nn" style="margin-left: 9px;margin-bottom: 0px; margin-top: 20px;">0,5%</p>
        </div>
        <p class="te" style="margin-top: 0px;margin-bottom: 20px;">Total Etudiants</p>
      </div>

      <div class="card">
        <i class="fg fa-solid fa-user-tie" style=" margin-top: 20px;padding-left: 25px;padding-top: 15px;"></i>
        <div class="nbr1">
          <h3>120</h3>
          <p class="rr" style="margin-left: 9px;margin-bottom: 0px; margin-top: 20px;">-5%</p>
        </div>
        <p class="te" style="margin-top: 0px;margin-bottom: 20px;">Total Profs</p>
      </div>
      <div class="card">
        <img class="resh" src="images/User research-bro.png">
        <p class="NP" style="margin-top: 0px;margin-bottom: 0px;">P.UML</p>
        <p class="vc" style="margin-top: 10px;">Vacataire</p>

      </div>
      <div class="card">
        <i class="fg fa-solid fa-award" style=" margin-top: 20px;padding-left: 25px;padding-top: 15px;"></i>
        <div class="nbr1">
          <h3>50</h3>
          <p class="nn" style="margin-left: 9px;margin-bottom: 0px; margin-top: 20px;">6%</p>
        </div>
        <p class="te" style="margin-top: 0px;margin-bottom: 20px;">Evenements</p>
      </div>
      <div class="card">
        <i class="fg fa-solid fa-school" style=" margin-top: 20px;padding-left: 12px;padding-top: 15px;"></i>
        <div class="nbr1">
          <h3>30</h3>
          <p class="nn" style="margin-left: 9px;margin-bottom: 0px; margin-top: 20px;">+2</p>
        </div>
        <p class="te" style="margin-top: 0px;margin-bottom: 20px;">Salle Disponible</p>
      </div>
      <div class="card" style="margin-bottom: 23px;">
        <div class="wrapper">
          <div class="headerc" style="padding-bottom: 0px;">
            <p class="current-date"></p>
            <div class="icons">
              <span id="prev" class="material-symbols-rounded">chevron_left</span>
              <span id="next" class="material-symbols-rounded">chevron_right</span>
            </div>
          </div>
          <div class="calendar" style="padding-left: 00px; padding-top: 0px;">
            <ul class="weeks" style="padding-left: 10px;">
              <li>Sun</li>
              <li>Mon</li>
              <li>Tue</li>
              <li>Wed</li>
              <li>Thu</li>
              <li>Fri</li>
              <li>Sat</li>
            </ul>
            <ul class="days" style="padding-left: 10px;">
              <li class="inactive">26</li>
              <li class="inactive">27</li>
              <li class="inactive">28</li>
              <li class="">1</li>
              <li class="">2</li>
              <li class="">3</li>
              <li class="">4</li>
              <li class="">5</li>
              <li class="">6</li>
              <li class="">7</li>
              <li class="">8</li>
              <li class="">9</li>
              <li class="">10</li>
              <li class="">11</li>
              <li class="">12</li>
              <li class="">13</li>
              <li class="">14</li>
              <li class="">15</li>
              <li class="">16</li>
              <li class="">17</li>
              <li class="">18</li>
              <li class="">19</li>
              <li class="">20</li>
              <li class="">21</li>
              <li class="">22</li>
              <li class="">23</li>
              <li class="">24</li>
              <li class="">25</li>
              <li class="">26</li>
              <li class="">27</li>
              <li class="active">28</li>
              <li class="">29</li>
              <li class="">30</li>
              <li class="">31</li>
              <li class="inactive">1</li>
            </ul>
          </div>

        </div>
      </div>

      <div class="card">

        <!-- Start Latest Uploads Widget -->
        <div class="latest-uploads p-20 bg-white rad-10">
          <h2 class="mt-0 mb-20">Mes derniers Cours</h2>
          <ul class="m-0">
            <li class="between-flex pb-10 mb-10">
              <div class="d-flex align-center">
                <img decoding="async" class="mr-10" src="images/pdf.svg" alt="" />
                <div>
                  <span class="d-block">my-file.pdf</span>
                  <span class="fs-15 c-grey">Elzero</span>
                </div>
              </div>
              <div class="bg-eee btn-shape fs-13">2.9mb</div>
            </li>

            <li class="between-flex pb-10 mb-10">
              <div class="d-flex align-center">
                <img decoding="async" class="mr-10" src="images/avi.svg" alt="" />
                <div>
                  <span class="d-block">My-Video-File.avi</span>
                  <span class="fs-15 c-grey">Admin</span>
                </div>
              </div>
              <div class="bg-eee btn-shape fs-13">4.9mb</div>
            </li>
            <li class="between-flex pb-10 mb-10">

              <div class="d-flex align-center">
                <img decoding="async" class="mr-10" src="images/psd.svg" alt="" />
                <div>
                  <span class="d-block">My-Psd-File.pdf</span>
                  <span class="fs-15 c-grey">Osama</span>
                </div>
              </div>
              <div class="bg-eee btn-shape fs-13">4.5mb</div>
            </li>

            <li class="between-flex pb-10 mb-10">
              <div class="d-flex align-center">
                <img decoding="async" class="mr-10" src="images/zip.svg" alt="" />
                <div>
                  <span class="d-block">My-Zip-File.pdf</span>
                  <span class="fs-15 c-grey">User</span>
                </div>
              </div>
              <div class="bg-eee btn-shape fs-13">8.9mb</div>
            </li>

            <li class="between-flex pb-10 mb-10">
              <div class="d-flex align-center">
                <img decoding="async" class="mr-10" src="images/dll.svg" alt="" />
                <div>
                  <span class="d-block">My-DLL-File.pdf</span>
                  <span class="fs-15 c-grey">Admin</span>
                </div>
              </div>
              <div class="bg-eee btn-shape fs-13">4.9mb</div>
            </li>

            <li class="between-flex">
              <div class="d-flex align-center">
                <img decoding="async" class="mr-10" src="images/eps.svg" alt="" />
                <div>
                  <span class="d-block">My-Eps-File.pdf</span>
                  <span class="fs-15 c-grey">Designer</span>
                </div>
              </div>
              <div class="bg-eee btn-shape fs-13">8.9mb</div>
            </li>

          </ul>
        </div>
        <!-- End Latest Uploads Widget -->







      </div>
      <div class="card">

        <!-- Start Last Project Progress Widget -->
        <div class="last-project p-20 bg-white rad-10 p-relative" style="height: 400px">
          <h2 class="mt-0 mb-20">Progression Des Cours</h2>
          <ul class="m-0 p-relative">
            <li class="mt-25 d-flex align-center done">HTML</li>
            <li class="mt-25 d-flex align-center done">CSS</li>
            <li class="mt-25 d-flex align-center done">PHP</li>
            <li class="mt-25 d-flex align-center current">JAVA-SCRIPT</li>
            <li class="mt-25 d-flex align-center">EXAMEN FIN SEMESTRE</li>
          </ul>
          <img decoding="async" class="launch-icon hide-mobile" src="images/pana.png" alt="" />
        </div>
        <!-- End Last Project Progress Widget -->
      </div>
      <div class="card"></div>
    </main>

  </div>

</body>

</html>
<?php 
}else{
     header("Location: index.php?error=Veuillez s'authentifier d'abord");
     exit();
}
 ?>