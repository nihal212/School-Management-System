<?php 
session_start(); 
include "db_conn.php";

// if (isset($_SESSION['role'])) {
//     // L'utilisateur est déjà connecté, redirigez-le vers son espace
//     redirectToSpace($_SESSION['role']);
   
// }

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: index.php?error=Email obligatoire");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Mot de passe obligatoire");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['uname'] = $row['uname'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
               
                redirectToSpace($_SESSION['role']);

		        exit();
            }else{
				header("Location: index.php?error=Mot de passe ou email incorrects");
		        exit();
			}
		}else{
			header("Location: index.php?error=Mot de passe ou email incorrects");
	        exit();
		}
	}
}else{
	header("Location: index.php?error=erreur s'est produite");
	exit();
}
    // mysqli_free_result($result);
    // mysqli_close($conn);

function redirectToSpace($role) {
    switch ($role) {
        case 'Adiminstrateur':
            header('Location: WebProjectsql/dash_admin.php');
            break;
        case 'Professeur':
            header('Location: WebProjectsql/dash_prof.php');
            break;
        case 'Coordinateur':
            header('Location: WebProjectsql/dash_coord.php');
            break;
        case 'Chef de departement':
            header('Location: WebProjectsql/dash_chef.php');
            break;
        default:
            header('Location: index.php?error=Role invalide');
        break;
    }

    exit();
}