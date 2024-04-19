<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>gestion des modules</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> 
	
	  <!--=============================== test =============================-->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="framework.css">
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="buttonstyle.css">

    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <script src="script.js" defer=""></script>
    <script src="main.js" defer=""></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


	    <!--=============================== test =============================-->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="table.css">

</head>
<body>
<div class="page d-flex">
        <section class="sidebar">
            <nav>
                <ul>
                <li><a href=# class="logo">
            <img src="../WebProjectsql/module/t2.png">
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
			<div class="container" style="
    margin-left: 150px;
    margin-right: 0px;
    padding-left: 0px;
    padding-right: 0px;
    width: 1500px;">
	<h2 class="text-center" style="margin-top: 60px;">Les details des modules</h2><br><br>

	<a href="#" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> Retour</a>

	<!-- <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">
       <i class="fa fa-plus"></i> Ajouter un nouveau module
    </button> -->


                              <!-- <a href="#" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print PDF</a> -->
                              <hr>
	    <table class="table " id="myTable">
		  <thead>
			<tr>
			    <th class="text-center" scope="col">No</th>
                <th class="text-center" scope="col"></th>
				<th class="text-center" scope="col">Module</th>
				<th class="text-center" scope="col">Departement</th>
				<th class="text-center" scope="col">Element 1</th>
				<th class="text-center" scope="col">Element 2</th>
				<th class="text-center" scope="col">Masse horaire TD/TP</th>
				<th class="text-center" scope="col">Masse horaire COURS</th>
				<th class="text-center" scope="col">Editer</th>
				<th class="text-center" scope="col">Supprimer</th>
			</tr>
		  </thead>
			<?php

        	$get_data = "SELECT * FROM card_activation order by 1 desc";
        	$run_data = mysqli_query($con,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
				$sl = ++$i;
				$id = $row['id'];
				$nom = $row['nom'];
				$id_departement = $row['id_departement'];
				$ele1 = $row['ele1'];
				$ele2 = $row['ele2'];
				$h_td_tp = $row['h_td_tp'];
				$h_cours = $row['h_cours'];

        		$image = $row['image'];
        		echo "

				<tr>
                 
				<td class='text-center attr'>$sl</td>
                <td><img class='img-box-small' src='upload_images/$image' alt='' style='width: 50px; height: 50px;' ></td>
				<td class='text-center attr'>$nom</td>
				<td class='text-center attr'>$id_departement</td>
				<td class='text-center attr'>$ele1</td>
				<td class='text-center attr'>$ele2</td>
				<td class='text-center attr'>$h_td_tp</td>
				<td class='text-center attr'>$h_cours</td>

				<td class='text-center'>
					<span>
					<a href='#' class='btn  mr-3 edituser' data-toggle='modal' data-target='#edit$id' title='modifier'><i class='far fa-edit'></i></a>

					</span>
					
				</td>
				<td class='text-center'>
					<span>
					
						<a href='#' class='btn deleteuser' title='Supprimer'>
						     <i class='fa fa-trash-o fa-lg' data-toggle='modal' data-target='#$id' style='' aria-hidden='true'></i>
						</a>
					</span>
					
				</td>
			</tr>


        		";
			}
        	?>

			
		</table>
		<form method="post" action="export.php">
         <input type="submit" name="export" class="btn btn-success" value="exporter les données" />
        </form>

 <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    });
  </script>
 </div>
     </div>
</div>

</body>
</html>