<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
      <link rel="stylesheet" type="text/css" href="css/estilos-movil.css"/>
      <?php 
      include("D_Movil.php");
      if($ismobile) 
      	{ 
      		?>
      <link rel="stylesheet" type="text/css" href="css/estilos-movil.css"/>
      		<?php
        }
      ?>
      <link rel="stylesheet" type="text/css" href="css/style.css"/>      
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Historial</title>
	  <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
      <link rel="stylesheet" type="text/css" href="css/estilos-movil.css"/>
      <?php 
      include("D_Movil.php");
      if($ismobile) 
      	{ 
      		?>
      <link rel="stylesheet" type="text/css" href="css/estilos-movil.css"/>
      		<?php
        }
      ?>
      <link rel="stylesheet" type="text/css" href="css/style.css"/>      
	  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   	<script type="text/javascript" src="graficas/jquery.js"></script>
	<script type="text/javascript" src="graficas/dist/Chart.bundle.min.js"></script>
	<script type="text/javascript" src="graficas/app.js"></script>
</head>
<body>

   <?php
 	 include("barra.html");
	?>
	<br>
	<br>
	<br>
	<br>
  
   <section class="ricura">
		<div style="width: 40%;">
			<canvas id="chart"  width="300px" height="250px"></canvas>
		</div>
    <aside class="chido">
   		<section class="main">
    		<div class="sesion"><h1>Historial</h1></div>
     	     	<ul style="text-align: center;">
		     	<article>
		     		 <label>Temperatura</label>
		     	</article>
		     	<article>
		     		 <label>Iluminación</label>
		     	</article>
		     	<article>
		     		 <label>Humedad</label>
		     	</article>
		     	<article>
		     		 <label>no se</label>
		     	</article>
		    </ul>
	 	</section>
    </aside>
	</section>
	
	
<section style="margin-top: 150px;">
	<?php 
     include("footer.html");
	?>
</section>
</body>
</html>