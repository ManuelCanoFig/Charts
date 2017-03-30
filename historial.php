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
	
   <section aling="center" style="width:60%;">
		<div id="canvas-container" >
			<canvas id="chart" width="500" height="350" ></canvas>
		</div>
	</section>
	<section>
    <aside class="chido">
		<section class="main">
			<div class="sesion">
			  <h2>Historial</h2>
			</div>
					<article>
						<h3>Temperatura</h3>
					</article>
					<article>
						<h3>Iluminación</h3>
					</article>
					<article>
						<h3>Humedad</h3>
					</article>
		</section>
	
	</aside>
	</section>
	
	<br>
	<br>
	<br>
	<br>

	<?php 
     include("footer.html");
	?>

</body>
</html>