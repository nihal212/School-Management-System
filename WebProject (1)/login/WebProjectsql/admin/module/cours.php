<?php
class compteBanc{
    private $num;
    private $solde;
    private $titu;
 public function __construct($num,$solde,$titu){
      $this->num=$num;
      $this->solde=$solde;
      $this->titu=$titu;
 }
 public function getNum(){
    return $this->num;
 }
 public function getSolde(){
    return $this->solde;
 }
 public function getTitu(){
    return $this->titu;
 }
 public function setSolde($solde){
    $this->solde=$solde;
 }
 public function crediteur($montant){
    $this->solde+=$montant;
 }
 public function __toString(){
    return "le solde de $this->titu numero $this->num  est de $this->solde dhs";
 }
}

$compte1=new compteBanc(134689087,10000,'hanae');
echo $compte1;
$compte1->crediteur(120);
echo $compte1;




class compteEpargne extends compteBanc{
    private $taux;
    public function __construct($num,$solde,$titu,$taux){
        parent::__construct($num,$solde,$titu);
        $this->taux=taux;
    }
    public function getTaux{
        return $this->taux;
    }
}
function loader($Myclass){
    $path="mesclasses/".$Myclass.".php";
    if(file_exists($path)){
          require_once $path;
    }
}
spl_autoload_register("loader");

require_once 'autoload.php';

?>
<?php

// ======connect to db=================================================
$con=mysqli_connect('localhost','root','','dbname');
$con=new mysqli('localhost','root','','dbname');
IF($con->connect_error)

//=====================================
try{
$con=new PDO("mysql:host=$servername;dbname=$db",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){ echo "failed ".e->getMessage();}
//=====================================

// =======execution des requetes ===========================================
$requete="SELECT * FROM Personne";
$result=$con->query($requete);
//plusirus reqete
//$requete="INSERT INTO Personne(Nom,Prenom,Profession)VALUES ('naima','wanaim','ingenieur')"
$result=$con->multi_query($requete);
$requete="SELECT * FROM Personne";

//=====================================
$result=$con->exec($requete);
//=====================================

// =========resultats de la requetes===========================================
$nb=$result->num_rows;

//=====================================
$nb=$result->rowCount();
//=====================================

// =========recuperation du resultats===========================================
while($ligne=$result->fetch_array(MYSQLI_NUM)){
   foreach($ligne as $valeur){
      echo "$valeur";
   }
}   $result->close();  $con->close();

//=====================================
while($ligne=$result->fetch(PDO::FETCH_NUM){
   foreach($ligne as $valeur){
      echo "$valeur";
   }
}  
//=====================================






require_once('Personne.php');
class PersonneManager
{
private $conn;

public function __construct($conn)
{ $this->setDb ($conn); }

public function setDb (PDO $conn)
{ $this->conn = $conn; }

public function add (Personne $perso)
{
$sqlInsert = "INSERT INTO Personne (Nom, Prenom, Profession)
VALUES ('".$perso->getNom().",".$perso->getPrenom().", ".$perso->getProfession()."')";
 return $this->conn->exec($sqlInsert);
}

public function deletePersonne ($Id)
{
return $this->conn->exec('DELETE FROM Personne WHERE id =' . $Id);
}

public function getPersonne_ByID($Id)
{
$result = $this->conn->query('SELECT id, Nom, Prenom, Profession FROM Personne WHERE id ='.$Id);
$donnees = $result->fetch(PDO::FETCH_ASSOC);
return new Personne ($donnees);
}

public function getPersonnes()
{
$persos = [];
$result->$this->conn->query('SELECT Id, Nom, Prenom, Profession FROM Presonne ORDER BY Nom');
while ($donnees = $result->fetch(PDO::FETCH_ASSOC))
{
$persos[] = new Personne($donnees);
}
return $persos;
}

public function updatePersonne(Personne $perso)
{
$sqlupdate = "UPDATE Personne SET Nom='".$perso->getNom()."',
 Prenom='".$perso->getPrenom()."',Profession='".$perso->getProfession()."'WHERE Id='".$perso->getId()."'";
return $this->conn->exec($sqlupdate);

}
}

require('Autoloader.php');
Autoloader::register();
include("connexPDO.inc.php");
$conn=connPDO("gestionpersonnes", "myparam");
$manager=new PersonnelManager($conn);
Spersone Personne([
'id' =>'4',
'Nom'=>'griffan',
'Prenom'=>'petter',
'Profession'=>'comm'
]);
$manager->addPersonne ($perso);
echo $manager->getPersonne_ByID(4);
Sperso= new Personne([
'id' =>'4',
'Nom'=>'griffan',
'Prenom'=>'petter',
'Profession'=>'prof'
]);
$manager->addPersonne ($perso);
echo ' <br/>'.$manager->getPersonne_BYID(4);
$manager->deletePersonne (4);










require_once('Personne.php');
class PersonneManager
{
private $conn;
public function construct($conn)
{ $this->setDb ($conn); }
public function setDb (PDO $conn)
{ $this->conn = $conn; }
public function add (Personne $perso)
{
$sqlInsert = "INSERT INTO Personne (Nom, Prenom, Profession)
VALUES ('".$perso->getNom().",".$perso->getPrenom().", ".$perso->get Profession()."')";
return $this->conn->exec($sqlInsert);
}
public function deletePersonne ($Id)
{
return $this >conn->exec('DELETE FROM Personne WHERE id =' . $Id);
}
public function getPersonne_ByID($Id)
{
$result = $this->conn->query('SELECT id, Nom, Prenom, Profession FROM Personne WHERE id =
$donnees = $result->fetch(PDO::FETCH_ASSOC);
return new Personne ($donnees);
}
public function getPersonnes ()
{
Spersos = [];
$result- $this->conn->query('SELECT Id, Nom, Prenom, Profession FROM Presonne ORDER BY Nom');
while ($donnees = $result->fetch(PDO::FETCH_ASSOC))
{
Spersos[] = new Personne ($donnees);
}
return $persos;
}
public function update Personne (Personne Sperso)
{
}
$sqlupdate = "UPDATE Personne SET Nome Sperso getNom().", Prenom
"Profession.Sperso->get Profession().
HERE Id
Sperso getId()
return $this >conn->exec($sqlupdate);
Sperso getPrenom()
$Id);
?>
