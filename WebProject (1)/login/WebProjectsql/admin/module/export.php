<?php  
//export.php  
include 'db.php';
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM card_activation order by 1 desc";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>id</th>  
                         <th>Nom</th>  
                         <th>departement</th>  
                         <th>element1</th>  
                         <th>element2</th>  
                         <th>masse horaire tds/tps</th>
                         <th>masse horaire cours</th> 
                    </tr>
  ';
  $i = 0;
  while($row = mysqli_fetch_array($result))
  {
    $sl = ++$i;
   $output .= '
    <tr>  
                         <td > '.$sl.' </td>
                         <td>'.$row["nom"] .'</td>  
                         <td>'.$row["id_departement"].'</td>  
                         <td>'.$row["ele1"].'</td>  
                         <td>'.$row["ele2"].'</td>  
                         <td>'.$row["h_td_tp"].'</td> 
                         <td>'.$row["h_cours"].'</td> 
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=Liste_des_modules.xls');
  echo $output;
 }
}
?>