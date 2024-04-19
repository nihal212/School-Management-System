
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

<!--<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/

    <script src="vendor/jquery/jquery.min.js"></script>

jquery.dataTables.min.css">


    <script src="dist/js/jquery-ui.min.js"></script>-->

    


			<script src="ENSAH.js" defer ></script>	



	<link rel="stylesheet" type="text/css" href="ENSAH4.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


<?php
try{
$pdo = new PDO("mysql:host=localhost ;dbname=fichier","root","");
$pdo->setAttribute(pdo::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo"connected";
$pdo = getAttribute(constant(pdo::ATTR_CONNECTION_STATUS));
}
catch(PDOEXception $e){
  die("error:could not connected".$e->getMessage());}
  /*try{
  $sql= "CREATE DATABASE fichier";
  $pdo->exec($sql);
  echo"database created";}catch(PDOEXCeption $e){
    die("error :not connected".$e->getMessage());
  }*/
  
  ?>
<section>

<div id="divc">

<h1 id="legende">la liste des prof_module pour GI3</h1>

   <div id="divt">	

   <div class="divh">
     <table id="targetTable" border="1">
  <tr>
    <th><h3>Pofesseur</h3></th>
    <th><h3>Module</h3></th>
  </tr>
  
      
      <tr>
    <td id="cas_copy"
ondrop="drop_handler(event);" ondragover="dragover_handler(event);" style="background: none;"></td>
<td id="case_copy"
ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
     </tr>
      <tr>
    <td id="cas_copy"
ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
<td id="case_copy"
ondrop="drop_handler(event);" style="background: none;" ondragover="dragover_handler(event);"></td>
     </tr>
    
</table>


<div class="dr">

<button class="addRow">Ajouter</button>

<button id="dropdiv" ondrop="drop(event)" ondragover="allowDrop(event)">supprimer</button>
<button id="download">Télécharger</button>

</div>

   </div>

   


   </div>

	
     <style>
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

	   		
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>
	   		<div class="div1">  <p id ="box_copy"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">prof:1</p><div class="cercle"> <img src="img.jpg" width="190px"> </div> </div>

  



</div>


	   	 </div>
	</div>
	<div id="divm">	
		<div id="div3">
			<form action="" class="search2">
		<input type="text" placeholder=" Recherche" name="h">
		<button type ="submit" ><img src="search.jpg"></button>
	
</div>
		<div id="div2">
<div class="module">   <h4  id="module"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>
<div class="module">   <h4  id="module"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>
<div class="module">   <h4  id="module"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>
<div class="module">   <h4  id="module"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>
<div class="module">   <h4  id="module"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>
<div class="module">   <h4  id="module"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>
<div class="module">   <h4  id="module"  draggable="true" ondragstart="dragstart_handler(event);" ondragend="dragend_handler(event);">module</h4> </div>

<div class="module">   <h4 id="module">module</h4> </div>
<div class="module">   <h4 id="module">module</h4> </div>
<div class="module">   <h4 id="module">module</h4> </div>
<div class="module">   <h4 id="module">module</h4> </div>

<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>

<div class="module">   <h6>mathématique appliqué</h6> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
<div class="module">   <h4>module</h4> </div>
</div>
	</div>

</section>
	
    
</body>

</html>
