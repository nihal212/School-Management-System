<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=ensah","root","");

        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        echo "connected";
        $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
    } catch(PDOEXception $e){
        die("error:could not connect".$e->getMessage());
    }
   /* try{
        $sql = "CREATE DATABASE ensah";
        $pdo->exec($sql);
        echo"<br>";
        echo " database created";
    }catch(PDOEXception $e){
        die("error:not connected".$e->getMessage());}*/
        try{
            $sql = "INSERT INTO 
                         prof_module(nom du prof,nom du module)
                         VALUES 
                         (:nom du prof,:nom du module) ";
          $stmt = $pdo->prepare($sql);
         $stmt->bindParam(':nom du prof', ${"cas_copy"} ,PDO::PARAM_STR);
   $stmt->bindParam(':nom du module',${"case_copy"},PDO::PARAM_STR);
  
  echo "records inserted";            
        }catch(PDOEXception $e){
        die("error:".$e->getMessage());}
 ?>