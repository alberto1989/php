<!DOCTYPE html> 
<html> 
<head> 
<title>Calculadora Prueba</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="js/bootstrap.min.js" rel="stylesheet" media="screen">
    
</head> 
    
    <body>
        <center>
        <form>
          
        <table border="0">
            
             <caption>::::Calculadora::::</caption> 
            
            <tr>   
            <td colspan="4">  <input type="text" name="caja"> </td> <!-- comentario -->
            </tr> <!-- primer fila-->
            
            
             <?php
            // arreglos de php, variables en php
            //un arreglo tamaño estatico conjunto de elementos
            //un vector conjunto de datos de diferentes tipos dinamico
            //count cuenta elementos de un arreglo
               
               $s = array("1","2","3","+","4","5","6","-","7","8","9","*","C","0","=","/");
               
                
                
                for ($i=0;$i<4;$i++){
                     echo "<tr>"; 
                    for($j=0;$j<4;$j++){
                    
                    
                       
                                
                          echo "<td>";
                          echo "<input type='button' name='b".$s[$j]."' value='$s[$j]' class='btn btn-success'>";
                          echo "</td>";
                    

                        
                    }//forj
                    
                    echo "</tr>";
                    $j=1;
                }
            ///for i
            
                
                
                 
               
            

             ?>
        </table>
                     
        </form>
            
        </center>
        
    </body>
    
</html>