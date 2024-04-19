<?php  
$con = new PDO("mysql:host=localhost;dbname=ensah", "root", "");

$output = '';
if(isset($_POST["export"]))
{
 $requete = "SELECT * FROM note order by 1 desc";
 $result = $con->query($requete);
 if($result->rowCount() > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>No</th>  
                         <th>CNE</th>  
                         <th>Nom et prenom</th>  
                         <th>note finale</th>  
                         <th>validation</th>  
                         <th>note apres rattrapage</th>  
                    </tr>
  ';
  $i = 0;
  while($row =$result->fetch(PDO::FETCH_ASSOC))
  {
    $sl = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sl.' </td>
                         <td>'.$row["CNE"] .'</td>  
                         <td>'.$row["nom_prenom"].'</td>  
                         <td>'.$row["note_finale"].'</td>  
                         <td>'.$row["validation"].'</td>  
                         <td>'.$row["noteAratt"].'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Notes_apres_rattrapage.xls');
  echo $output;
 }
}
?>