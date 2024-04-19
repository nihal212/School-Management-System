<?php
include('db.php');

$id = $_GET['id'];

//Fetching privious image to update
if(isset($_GET['id'])){
    $edit_id = $_GET['id'];
    $edit_query = "SELECT * FROM card_activation WHERE id = $edit_id";
    $edit_query_run = mysqli_query($con, $edit_query);
    if(mysqli_num_rows($edit_query_run) > 0){
        $edit_row = mysqli_fetch_array($edit_query_run);
      
        $e_image = $edit_row['image'];
     
    }
    else{
        // header('location: index.php');
        echo "Error1";
    }
}
else{
    // header("location: index.php");
    echo "Error2";
}

//Data Updating
if(isset($_POST['submit']))
{

	$nom = $_POST['nom'];
	$id_departement = $_POST['id_departement'];
	$ele1 = $_POST['element1'];
	$ele2 = $_POST['element2'];
	$h_td_tp = $_POST['h_td_tp'];
	$h_cours = $_POST['h_cours'];

	$msg = "";
	$image = $_FILES['image']['name'];
	if(empty($image)){
	    $image = $e_image;
	}
	$target = "upload_images/".basename($image);


	$update = "UPDATE card_activation SET nom='$nom',id_departement='$id_departement',ele1='$ele1',ele2='$ele2',h_td_tp='$h_td_tp',h_cours='$h_cours',image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
           move_uploaded_file($_FILES['image']['tmp_name'], $target);
           echo "<script>
            alert('Succes! donnees modifies avec succes!');
            window.location.href='index.php';
            </script>";
	}else{
		echo "donnees non modifiees";
	}
}

?>
