<!DOCTYPE html> 
<html> 
<head> 
<title>Calculadora Prueba</title> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="js/bootstrap.min.js" rel="stylesheet" media="screen">
    
    <script>
    
    window.onload=function(){
        
       var num= document.getElementById("caja");
       var num1=0;
       var num2=0;
       
       
       var ope="";
        
        document.getElementById("b1").onclick=function(){
            
            num.value+="1";
             
        }//b1
        
         document.getElementById("b2").onclick=function(){
            
            num.value = num.value +"2";
            
            
            
        }//b2
         
         document.getElementById("b3").onclick=function(){
            
            num.value += this.value;
            
            
            
            }//b3
         
         document.getElementById("b4").onclick=function(){
            
            num.value += this.value;
            
            
            
            }//b4
                   
         
         document.getElementById("b5").onclick=function(){
            
            num.value += this.value;
            
            
            
            }//b5
         
         document.getElementById("b6").onclick=function(){
            
            num.value += this.value;
            
            
            
          }//b6
         
         
         document.getElementById("b7").onclick=function(){
            
            num.value += this.value;
            
            
            
            }//b7
         
         document.getElementById("b8").onclick=function(){
            
            num.value += this.value;
            
            
            
        }//b8
         
         
         document.getElementById("b9").onclick=function(){
            
            num.value += this.value;
            
            
            
        }//b9
         
         
         document.getElementById("b0").onclick=function(){
            
            num.value += this.value;
            
            
            
        }//b0
         
         
         document.getElementById("b+").onclick=function(){
            
            num1= parseInt(num.value) ;
             
             num.value="";
            
             ope=this.value;
            
        }//b+
         
         
         
          document.getElementById("b-").onclick=function(){
            
            num1= parseInt(num.value) ;
             
             num.value="";
            
             ope=this.value;
            
        }//b-
          
          
           document.getElementById("b/").onclick=function(){
            
            num1= parseInt(num.value) ;
             
             num.value="";
            
             ope=this.value;
            
        }//b/
           
           
            document.getElementById("b*").onclick=function(){
            
            num1= parseInt(num.value) ;
             
             num.value="";
            
             ope=this.value;
            
        }//b*
            
            
             document.getElementById("bC").onclick=function(){
            
            
             
             num.value="";
            
             num1=0;
             num2=0;
            
        }//bC
         
         
          document.getElementById("b=").onclick=function(){
           num2=parseInt(num.value);
            switch(ope){
              case"+":
                    num.value=num1+num2;
                    break;
                    
             case"-":
                    num.value=num1-num2;
                    break;
                    
               case"/":
               num.value=num1/num2;
                break;
                    
              case"*":
               num.value=num1*num2;
                break;
                
                    
              
                    
                    
            }//swith
            
            
            
        }//b+
         
         
        
        
    }//scipt
    </script>
    
    
</head> 
    
    <body>
        <center>
        <form>
          
        <table border="0">
            
             <caption>::::Calculadora::::</caption> 
            
            <tr>   
            <td colspan="4">  <input type="text" id="caja" readonly placeholder="0"> </td> <!-- comentario -->
            </tr> <!-- primer fila-->
            
            
             <?php
            // arreglos de php, variables en php
            //un arreglo tamaño estatico conjunto de elementos
            //un vector conjunto de datos de diferentes tipos dinamico
            //count cuenta elementos de un arreglo
               
               $s = array("1","2","3","+","4","5","6","-","7","8","9","*","C","0","=","/");
               
                
                $j=1;
                for ($i=0;$i<16;$i++){
                    
                    if($j==1)
                        
                        echo "<tr>";
                                 
                          echo "<td>";
                          echo "<input type='button' id='b".$s[$i]."' value='$s[$i]' class='btn btn-success'>";
                          echo "</td>";
                    
                    if($j==4){
                        
                        echo "</tr>";
                        $j=1;
                        
                    }else
                        $j++;
                    
                }///for i
            
                
                
                 
               
            

             ?>
        </table>
                     
        </form>
            
        </center>
        
    </body>
    
</html>