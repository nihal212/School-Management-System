<?php
$id= $_GET['id'];
include_once "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <meta charset="UTF-8" />
  <title>coor</title>
  <link rel="stylesheet" href="page1.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head><?php

                                      $exist = false; // Variable pour vérifier l'existence de $id

                                      $req = mysqli_query($con, "SELECT * FROM coor WHERE id = $id");
                                      
                                      // Vérifier chaque ligne retournée par la requête
                                      while ($row = mysqli_fetch_assoc($req)) {
                                          $exist = true; 
                                          $coo=$row['coordinateur'];
                                          $id=$row['id'];
                                          // Mettre la variable à true si une ligne est trouvée
                                      }
                                      
                                      if ($exist) {  include_once "connexion.php";

                                        // Récupération de l'id dans le lien
                                        $id = $_GET['id']; // Vérifiez si l'id est passé en tant que paramètre dans le lien ou utilisez une autre méthode pour le récupérer
                                      
                                      
                                        ?>
                                         <div class="modal-content" id="modalModif" >
                <div class="center">
                    <h1>Le nom du coordinateur est :</h1>
                    <form method="post" >
                    <input type="hidden" id="modifId" name="id" />

                        <div class="txt_field">

                        <input type="text"   id="sm" value="<?= $coo ?>"  />

                            <span></span>
                        </div>
                       <br>
                       <br>
                       <div class="text-center">
                       <a href="supprimer2.php?id=<?= $id ?>" target="_blank" class="c1" style="position:relative; left:80px; top:0px; bottom:  90px;   " ><i class="del fa-solid fa-trash-can " style="color:red; width:20px; height:10px;  " ></i></a>
                       </div>
                      
                        <div class="text-center">
                            <input type="submit" value="exit" name="exit2" style="padding-top: 10PX; width:130px; position:relative; left:230px; bottom:60px;">
                        </div>

                    </form>
                </div>
            </div>

                                        
      
            
                                            
           
                                </html><?php
                                      } else {
                                         
                                                                         
?>

<body>
  <div class="container">    
    </nav>
     <section class="main">
      <div class="users">
      </div>
     <table class="table">
    

             
              <div class="modal-content" id="modalModif" >
                <div class="center">
                    <h1>Ajout Filliere</h1>
                    <form method="post" >
                    <input type="hidden" id="modifId" name="id" />

                        <div class="txt_field">
                        <input type="text" name="coordinateur"  id="id12" placeholder="donner le nom de coordinateur"  required />

                            <span></span>
                        </div>
                       <br>
                       <br>
                       <div class="text-center">
                            <input type="submit" value="Modifier" name="submit" style="padding-top: 10PX; width:170px; ">
                      
                        <div class="text-center">
                          
                            <input type="submit" value="exit" name="exit" style="padding-top: 10PX; width:130px; position:relative; left:230px; bottom:60px;">
                        </div>

                    </form>
                </div>
            </div>

            <?php
            if(isset($_POST['submit'])){

 
 //requête d'ajout
 @$coordinateur=$_POST['coordinateur'];
 $req = mysqli_query($con , "INSERT INTO `coor` (`coordinateur`,`id`) VALUES ('$coordinateur','$id')  ");
 if($req){//si la requête a été effectuée avec succès , on fait une redirection
  echo"succes";
  header("location: youssef.php");
}else {//si non
echo"non succes";
}
 }}?> 
<?php
            if(isset($_POST['exit2'])){

 
 //requête d'ajout
 
  header("location: youssef.php");
}?> 
<?php
            if(isset($_POST['exit'])){ 
  header("location: youssef.php");
}?> 



            </tbody>
          </table>
        </div>
      </section>
     
                  
           
        </div>
      </section>
    </section>
  </div>

</body>
</html>
