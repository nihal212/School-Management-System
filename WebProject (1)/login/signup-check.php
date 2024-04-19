<?php 
session_start(); 
include "db_conn.php"; 

if (isset($_POST['email']) && isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['re_password']) && isset($_POST['role'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
	$email = validate($_POST['email']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$role = validate($_POST['role']);

	$user_data = 'role='. $role. '&uname='. $uname;


	 if(empty($email)){
        header("Location: signup.php?error=email est obligatoire&$user_data");
	    exit();
	}

	else if (empty($uname)) {
		header("Location: signup.php?error=Nom et prenom obligatoire&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Mot de passe obligatoire&$user_data");
	    exit();
	}
	else if(empty($role)){
        header("Location: signup.php?error=role obligatoire&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=confirmation du mot de passe obligatoire&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=La confirmation du mot de passe incorrect &$user_data");
	    exit();
	}
    
	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM user WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Le nom d'utilisateur deja existe&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(user_name,email,password,role) VALUES('$uname','$email','$pass','$role')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Compte cree avec succes");
	         exit();
           }else {
	           	header("Location: signup.php?error=Une erreur inconnue s'est produite&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}