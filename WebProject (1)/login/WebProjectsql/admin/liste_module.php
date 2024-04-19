<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="page2.css">
</head>
<body>
  

<?php 

    //inclure la page de connexion
    include "connexion.php";
    $id = $_GET['id'];
    
    // Récupérer les modules du semestre 1 (S1)
    
    $req = mysqli_query($con, "SELECT * FROM module WHERE semestre = 'S1' AND id = $id"); 
    $semestre_modules = mysqli_fetch_all($req, MYSQLI_ASSOC);

    if (empty($semestre_modules)) {
        // S'il n'y a pas de modules pour le semestre 1, afficher un message :
        echo "Il n'y a pas encore de modules ajoutés pour le semestre 1.";
    } else {
        ?>
        <h2>Modules du semestre  </h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom du module</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($semestre_modules as $module) { ?>
                    <tr>
                        <td style="background-color:"><?=$module['nom_module']?></td>
                        <td style="background-color:"><a href="" class="c1"><i id="del2" class="del fa-solid fa-pen-to-square"></i></a></td>
                        <td style="background-color:"><a href="" target="_blank" class="c1"><i class="del fa-solid fa-trash-can"></i></a></td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
        
        
        <form action="" method="post">
                  <input type="submit" value="exit" name="exit" style="padding-top: 10PX; border-radius: 8px; width:130px; height:50px;background-color:red; position:relative; top:10px; left:120px; bottom:60px;  display: flex;
    height: 50px;
    
    justify-content: space-between;
    padding: 0 16px;
    border-radius: 8px;
    cursor: pointer;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
">
                  </form>
               
        <?php
    }
?>
 <?php
            if(isset($_POST['exit'])){ 
  header("location: youssef.php");
}?> 
<style>
  body {
    background: rgb(250, 250, 250);
    padding-left: 300px;
  }
  .table {
    width: 500px;
    border: 1px solid black;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 15px;
    min-width: 70px;
    overflow: hidden;
    border-radius: 5px 5px 0 0;
  }

  table thead tr {
    color: #fff;
    background-color: #181142;
    text-align: left;
    font-weight: bold;
  }

  .table th,
  .table td {
    padding: 12px 15px;
  }

  .table tbody tr {
    border-bottom: 1px solid #ddd;
  }

  .table tbody tr:nth-of-type(odd) {
    background: #f3f3f3;
  }

  .table tbody tr.active {
    font-weight: bold;
    color: #4AD489;
  }

  .table tbody tr:last-of-type {
    border-bottom: 2px solid white;
  }

  .table td {
    word-wrap: break-word;
  }
</style>
