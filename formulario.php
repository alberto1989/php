<!DOCTYPE html>

<?php
//recibir informacion con los metodos post y get
if(empty($_POST['Nombre']))
$n="";

else
    
$n= $_POST['Nombre'];


////////////////////////////
if(empty($_POST['cboDIA']))
$D=0;

else
    
$D= $_POST['cboDIA'];

////////////////////////////
if(empty($_POST['cboMES']))
$M=0;

else
    
$M= $_POST['cboMES'];

////////////////////////////

if(empty($_POST['cboANO']))
$A=0;

else
    
$A= $_POST['cboANO'];

///////////////////////////
if(empty($_POST['btnEDAD']))
$E="";

else
    
$E= $_POST['btnEDAD'];

///////////////////////////

$edad=0;
include("conexion.php");
date_default_timezone_set('America/Mexico_City');

$diaHoy=date('d');
$mesHoy=date('m');
$anoHoy=date('Y');

if($E == "EDAD"){

if($M==$mesHoy)////principal
{
  
            if($D<=$diaHoy)
            {
      
            $edad=(($anoHoy-$A)- 1);
        
      
            }
            else{
                
               $edad=($anoHoy-$A);
            } 
                
            
    
    
}else {
        if($M<$mesHoy){
        
           $edad=($anoHoy-$A);
            
        
        }else{
            
            
            $edad=(($anoHoy-$A)- 1);
            
            
        }
    

}



    echo "<script> alert('Hola $n tu tienes $edad años'); </script>";
     $f=$anoHoy."-".$mesHoy."-".$diaHoy;
    alta_usuario($n,$f,$edad);
}//principal
    
   
    

?>
<html>
<head>
<meta charset="utf-8">
<title> Formulario </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<script src="js/bootstrap.min.js"> </script>

    
    
</head>

<body style="background-color:#555;color: #ffffff">
    
    <center>
   
    
<form method="post" action="" class="form-inline">
	
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" id="Nombre" placeholder="Escribe tu nombre" name="Nombre"  required>
  </div>
    
<label> Día de Nacimiento </label>

<!--tCrear combos-->
<!--Prefijo para declarar combos cbo-->
<select name="cboDIA" class="form-control" required> 
<!--Son los item que te desplieja, contenido de un combo-->
<option class="dropdown"></option>
<?php

for ($i=1;$i<=31;$i++)
// salto de linea en el codigo 
	echo"<option>$i</option>";
?>
</select>

<label> Mes </label>
<select name="cboMES" class="form-control" required>
	<option class="dropdown">  </option>
	<?php

for ($i=1;$i<=12;$i++)
// salto de linea en el codigo 
	echo"<option>$i</option>";
?>
</select>
<label> Año... </label>
<select name="cboANO" class="form-control"required>
	<option class="dropdown"></option>

<?php
// dos parametros para la fecha, la Y mayuscula regresa el año con 4 digitos, y la y minuscula regresa el año con dos digitos.
for ($i=date("Y");$i>=1950;$i--)
// salto de linea en el codigo 
	echo"<option>$i</option>";
/*
M regresa el mes con 2 digitos
m regresa el mes con 1 digito solo los menores a 10 
D regresa el día con 2 digitos 
d regresa el día con 1 digito solo con menores a 10 
*/
?>




</select>
    
    <input  type="submit" value="EDAD" name="btnEDAD" class="btn btn-success" >
   
    
    <input type="submit" value="MOSTRAR" name="btnEDAD" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg">
    
    
    <!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>
    
      <br>
      <br>
    
    <?php
  if($E=="MOSTRAR"){

    /// primer cadena
    echo "<legend> Ejemplo </legend>
         <table>
         
         <caption>Registros </caption>




        <tr>
            <th> Id</th>
            <th> Nombre</th>
            <th> Fecha</th>
            <th> Edad</th>
            
        
        </tr>";
        
     $mysqli =conectar();
    $sql ="select * from usuarios";

        if($stmt=$mysqli->prepare($sql)){
        $stmt->execute();
        $stmt->bind_result($id,$n,$f,$e);
            
        while($stmt->fetch()) {   
            
        
        /// segunda cadena
        
       echo "<tr>
            <th>$id</th>
            <th>$n</th>
            <th>$f </th>
            <th>$e</th>
            
        
        </tr>"; 
            
                }// llave del while
        }/// llave del if de la sentencia sql
    echo"
    </table>";
        
  }
    
    
?>
    
    
    
    
</form>

    </center>


</body>
</html>
