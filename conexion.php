<?php
function  conectar(){
    
    
    $mysqli = new mysqli("localhost","root","","alumnos");
    
            if($mysqli->connect_errno){
                
                $mysqli=null;
            } else{ 
                
                
            return $mysqli;
                
            }//else     
    
    
}//conectar


 function alta_usuario($n,$f,$e){
 $mysqli=  conectar();
 
 if($mysqli!=null){
     
     
     $sql="insert into usuarios values(null,?,?,?)";
     if($stmt =$mysqli->prepare($sql)){
              
     
     $stmt->bind_param("ssi",$n,$f,$e);// le pasamos los tipos de elementos que le vamos a pasar y la cantidad de variables
     $stmt->execute();
     echo "<script> alert('Alta de usuario realiza con exito');</script>";
     $stmt->close();
     
                }///if stmt
      }//if mysqli
     
      else         
     
      echo "<script> alert('Error con la Conexión');</script>";     
     //header('formulario.php');
    
      
     
 }
     
     
  
 
 
 
     
     
     

?>