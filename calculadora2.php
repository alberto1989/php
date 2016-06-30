<!DOCTYPE html> 
<html> 
<head> 
<title>Calculadora Prueba</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
</head> 
    
    <body>
        <center>
        <form>
          
        <table border=0>
            
             <caption>::::Calculadora::::</caption> 
            
            <tr>   
            <td colspan="4"><input type="text" name="caja" </td> <!-- comentario -->
            </tr> <!-- primer fila-->
            
            
             <?php
            // arreglos de php, variables en php
            //un arreglo tamaño estatico conjunto de elementos
            //un vector conjunto de datos de diferentes tipos dinamico
               
               $simbolo = array("1","2","3","+","4","5","6","-","7","8","9","*","C","0","=","/");
               

              ?>
            
           
             <tr>
                 
                        <?php
                 
                        for($i=0;$i<16;$i++){
                 
                        ?>
                 
                     
                <td> <input type="button" name="b<?php echo $simbolo[$i]  ?>"   value="<?php  echo  $simbolo [$i] ?>"  class="btn btn-success"></td>
               
                        <?php
                     
                        }// cierre de for
                     
                        ?>
                 
                 
                 
            |</tr> <!-- segunda fila-->
            
        
            
            
        
        </table>
                     
        </form>
        </center>
        
    </body>
    
</html>