<?php
//database connection
include('db.php');

//adding data to the database
if(isset($_POST['submit'])){
	$nom = $_POST['nom'];
	$id_departement = $_POST['id_departement'];
	$ele1 = $_POST['element1'];
	$ele2 = $_POST['element2'];
	$h_td_tp = $_POST['MH_td_tp'];
	$h_cours = $_POST['MH_cours'];

	//image upload
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "image telechargee avec succes";
  	}else{
  		$msg = "echec de telechargement du message";
  	}

  	$insert_data = "INSERT INTO card_activation(nom,id_departement,ele1,ele2,h_td_tp,h_cours,image,uploaded) VALUES ('$nom','$id_departement','$ele1','$ele2','$h_td_tp','$h_cours','$image',NOW())";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "donnees non inserees";
  	}
}
?>
