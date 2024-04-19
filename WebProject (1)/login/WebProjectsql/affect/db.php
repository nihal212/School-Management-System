<?php
$con = mysqli_connect('localhost','root','','user');
if($con){
	
}else{
	echo "Non connecte";
}

?>
<?php 
// try{
// $pdo= new PDO("mysql:host-localhost","root","");
// $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
// $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
// }
// catch(PDOException $e){
// 	die("error: could not connect".$e->getMessage());
// }
?>