<!DOCTYPE html>


<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">

	<title>Document</title>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://unpkg.com/tableexport@5.2.0/dist/js/tableexport.min.js"></script>


    


			<script src="ENSAH.js" defer ></script>	


      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<link rel="stylesheet" type="text/css" href="ENSAH4.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	

	
       <section >

	<div id="divc">

  <h1 id="legende">la liste des prof_module pour AP1</h1>

	   <div id="divt">	

		 <div class="divh">
		 	<form action="insert_data.php" method="post">
		 	<table id="targetTable" border="1">
		<tr>
			<th><h3>Pofesseur</h3></th>
			<th><h3>Module</h3></th>
		</tr>
		
        
    <tr>
                        <td class="cas_copy" ondrop="drop_handler(event);" ondragover="dragover_handler(event);" style="background: none;"></td>
						<td id="case_copy_1" ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
					</tr>
					<tr>
						<td class="cas_copy" ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
						<td id="case_copy_2" ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
					</tr>
			
	</table>
	

 <button id="ev" type="submit"  >Envoyer</button>
 </form>

 <div class="dr">

	<button class="addRow">Ajouter</button>
	
  <button id="download">Télécharger</button>

</div>



		 </div>

		 


	   </div><style>
    #targetTable {
        width: 100%;
    }
</style>
	   <script>
                window.onload = function () {
                    document.getElementById("download")
                        .addEventListener("click", () => {
                            const invoice = this.document.getElementById("targettable");
                            console.log(targetTable);
                            console.log(window);
                            var opt = {
                               /* margin: 1,*/
                                filename: 'ma_liste.pdf',
                                image: {type: 'jpeg', quality: 1, dpi: 300},

                                html2canvas: { scale: 1},

                                jsPDF: { unit: 'mm', format: 'legal', orientation: 'l' }
                            };
                               
                          
                            html2pdf().from(targetTable).set(opt).save();
                        })
                }
</script>



	   <div id="divp">
	   	<div class="divg">

	   		
	   		<?php
                include_once "connexion.php";
                $req = mysqli_query($con , "SELECT nom ,prenom FROM prof");
if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
                    echo "Il n'y a pas encore de Professeur ajouter !" ;
                    
                }else {
                    //si non , affichons la liste de tous les employés
                    while ($row = mysqli_fetch_assoc($req)) {
                      ?>
                      <div class="div1">
                          <p class="box_copy" draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">
                              <?=$row['nom']?> <?=$row['prenom']?>
                          </p>
                          <div class="cercle"> <img src="img.jpg" width="190px"> </div> 
                      </div>
                      <?php
                  }
                  
                }?>


</div>


	   	 </div>
	</div>
	<div id="divm">	
		<div id="div3">
			<form action="" class="search2">
		<input type="text" placeholder=" Recherche" name="h">
		<button type ="submit" ><img src="search.jpg"></button>
	</form>
	
</div>
		<div id="div2">
			<?php
include 'db.php';
			$query = "SELECT nom FROM card_activation ";
 $result = mysqli_query($con, $query);
if(mysqli_num_rows($req) == 0){ 
	echo "Il n'y a pas encore de Professeur ajouter !" ;
                    
                }else {

  while($row = mysqli_fetch_array($result))
  {
                          ?>

<div class="module"><h4  id="module1"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);"> <?=$row['nom']?>  </h4> </div>
 <?php
                  }
               }   
                ?>
<div class="module">   <h4  id="module2"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>
<div class="module">   <h4  id="module3"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>

	</div>
</div>

</section>
	
    <!-- <script>
      
      </script> -->
</body>

</html>