<?php



?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>BUSCADOR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<script src="js/bootstrap.min.js"> </script>


</head>
    
    <body style="background-color:#555;color: #ffffff">
        <br>
        <center>
        <form method="GET">
            
            <input type="search" name="txtB" placeholder="BUSCAR" class="btn btn-default">
        <br>
        <br>    
            <table class="btn btn-default" border="1" style=" backgroud-color:#0000"  >
           <center><caption> Registros</caption> </center>
                
                <tr>
                <th>ID</th>
                <th>FECHA NACIMIENTO</th>
                <th>EDAD</th>
                <th>FOTO</th>
                
                </tr>
                
<?php
                
  include("conexion.php") ; 
                
  if(empty($_GET["txtB"])) 
      
      $buscar = "";
                
  else
      
      $buscar=$_GET["txtB"];
                
                
                
if($buscar!="") { 
    
    $mysqli= conectar();
    $sql= "select * from usuarios where nombre like '%$buscar%'";
    
            if($stmt=$mysqli->prepare($sql)){
                $stmt->execute();
                
                $stmt->bind_result($id,$n,$f,$e,$img);
    
                while($stmt->fetch()){
          echo ' <tr>
                <td>'.$id.'</td>
                <td>'.$n.'</td>
                <td>'.$f.'</td>
                <td>'.$e.'</td>
                <td>
                    
                    <img src="'.$img.'" width="50" height="50" alt="No visible" title="Flash 2">
                     
               </td>
                
                </tr>';
                
                        }/// llave while
                
                        $stmt->close();
                
                    }///if statement

            }///if buscar
            
            ?>
            
            
            
            
            </table>
        
        </form>
        </center>
        
    </body>
    
    
</html>