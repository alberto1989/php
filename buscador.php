<html>
<head>
	<title>::Buscador de Alumnos::</title>
<meta charset="utf-8">
<title>BUSCADOR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<script src="js/bootstrap.min.js"> </script>

    
	<style>
		body{background:#ddd; color: #1A1C1E;}
		#centro{width: 800px; margin: 10px auto 0 auto; border: 1px silver solid; background: #fff}
		#encabezado{width: 780; padding: 10px 10px 10px 10px; background: #006683; color: white;}
		#contenido{ background: #F1F5F8; padding: 5px 5px 5px 5px;}
		#contenido div{width: 252px; float: left; background: white; margin: 4px 3px 0 0; height: 200px; border: 2px solid silver}
		#contenido div h2{text-align: center;}
		#pie{clear: both; text-align: center; padding-top: 10px;}
	</style>
<head>
 
<body>
 
<div id="centro">
 
	<div id="encabezado"> 
	<h1>Listado de Alumnos</h1>
	</div>
 
	<div id="contenido">
        
        <?php
        include("conexion.php");
        //limite de paginacion
        
        $TAMANO_PAGINA =9;
        
        if(!empty($_GET["pagina"]))
            
        $pagina= $_GET["pagina"];
        
        else{
            
            $pagina=0;
        }
        
        if($pagina==0){
            
            $inicio=0;
            $pagina=1;
        } ///if de paginacion             
          else{
              $inicio=($pagina -1)*$TAMANO_PAGINA;
            
            
        } 
        
        $mysqli= conectar();
        $sql="select count(id_usuarios) as total from usuarios";
        if($stmt1=$mysqli->prepare($sql)){
            
            $stmt1->execute();
            $stmt1->bind_result($totalR);
            $stmt1->fetch();
            $stmt1->close();
        }//contador
        
       $totalP =  ceil($totalR/$TAMANO_PAGINA);
        
        $sql="select * from usuarios order by id_usuarios limit $inicio,$TAMANO_PAGINA";
        
        if($stmt2=$mysqli->prepare($sql)){
            
            $stmt2->execute();
            $stmt2->bind_result($id,$n,$f,$e,$foto);
            while($stmt2->fetch()) {
        
       
    
        ?>
 
	<div>
		<h2><?php  echo $n ?></h2>
		<ul>
			<li><?php  echo $id ?></li>
			<li><?php  echo $f ?></li>
			<li><?php  echo $e ?></li>
            <li>   <img src="<?php  echo $foto?>" height="60px" width="60px"> </li>
            
		</ul>
	</div>
     
        
          <?php
                
                        }///llave while
        
                $stmt2->close();
        
                }//llave if
        
        
                ?>
	</div>
 
	<div id="pie">
		<p>copyright ® 2016 Alberto Jaramillo</p>
        <?php
        if($totalP>1){
            
          echo "<p>";
            
            for($i=1;$i<=$totalP;$i++){
                
                if($i==$pagina)
                    
                    echo $i;
                
                else
                    
            echo "<a href='buscador.php?pagina=$i'>[$i] </a> ";
                    
              
            }//llave for
            
            echo "</p>";
            
        }///llave if
        
        ?>
        
	</div>	
</div>
</body>
</html>