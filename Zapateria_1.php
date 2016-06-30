<!DOCTYPE html>
 <?php
        //cuales son los posible metodos de envio|POST,GUEST  
        //EN EL POST NO SE MUESTRA EL ENVIO DE DATOS Y EN EL GET SI SE MUESTRA EN LA URL
       // POR DEFAULT SI NO SE PONE QUE TIPO DE METODO SIEMPRE SE UTILIZA GET Y SE ENVIA A LA MISMA PAGINA 
        // button es un boton tipo normal , para validaciones , calculos matematicos
        // tipo de boton submit enviar informacion y reset para limpiar variables.
       
      if(empty($_POST['cboM']))
          
          $cboM="";
      else
          $cboM=$_POST["cboM"];
      
      if(empty($_POST["txtTalla"]))
          $txtTalla=0;
      else
          $txtTalla=$_POST["txtTalla"];
      
      if (empty($_POST['btE']))
          
          $btE=0;
      else 
          $btE=$_POST['btE'];
 
 
 
        
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
v       <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
        <script src="js/bootstrap.min.js"> </script>
        
        <title></title>
    </head>
    <body style="background-color:#555;color: #ffffff">
       
        <form method="post" class="form-inline"> 
            
            
            <center>
                
                 
            <label> Modelo </label>
            
            <select name="cboM" class="form-control"> 
                <option> [MODELO]</option>
                                <option> A</option>
                                    <option> B</option>
                                        <option> C</option>

                
            
            
            
            </select> <BR> <br>
                       <label> TALLA </label>
                       
                       <input type="number" min="8" max="10" name="txtTalla" class="form-control"> <br> <br>
                       <input type="submit" name="btE" value="ENVIAR" class="form-control">
                       <br>
                       <br>
            
            
             <?php
             
             if($btE=='ENVIAR'){
                 
                 $EJECUTIVO=345.5;
                 $PREMIER=398.7;
                 $EMPERADOR=246;
                 $precio=0;
                 switch ($cboM){
          case"A":
                         switch ($txtTalla){
                         case"8":
                        $precio=$EJECUTIVO;    
                         break;
                     
                     case"9":
                         $precio=$EJECUTIVO+10;
                         break;
                     
                     case"10":
                         $precio=$EJECUTIVO+20;
                         break;
                         
                     default :
                         $precio=0;
                         break;
                     
                         }
                         
            case"B":
                         switch ($txtTalla){
                         case"8":
                        $precio=$PREMIER;    
                         break;
                     
                     case"9":
                         $precio=$PREMIER+10;
                         break;
                     
                     case"10":
                         $precio=$PREMIER+20;
                         break;
                         
                     default :
                         $precio=0;
                         break;
                     
                         }
                         
            case"C":
                             switch ($txtTalla){
                         case"8":
                        $precio=$EMPERADOR;    
                         break;
                     
                     case"9":
                         $precio=$EMPERADOR+10;
                         break;
                     
                     case"10":
                         $precio=$EMPERADOR+20;
                         break;
                         
                     default :
                         $precio=0;
                         break;
                     
                         }
                         
                         
                     default :
                         
                         
                         
                         break;
                     
                     
                 
                 }
                 
                 echo "<table border=1 class='btn btn-default' style='backgroud-color:#0000'>"
                 ."<tr> <th>MODELO</th>"
                 ."<th> TALLA </th>"
                 ."<th>PRECIO</th></tr>"
                         
                 ."<tr> <td>$cboM</td>"
                  ."<td>$txtTalla</td>"
                 . "<td>$precio</td></tr>"
                         . "</table>";
                        
                                  
                 
                 
                 }// btE
                 
                 
                 
             
             
             ?>
                       
            </center>
        
        
        </form>
       
    </body>
</html>
