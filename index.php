<html>
<head>
<link rel="shortcut icon" type="image/x-ico" href="imagenes/gif.ico">
	<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
	<meta name="p:domain_verify" content="c07ded2dffc377dafa711a2cab31fd54"/>
      <title>
       Soluciones en Tecnología
      </title>
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
</head>
<body>
<?php
  include("barra.html");
?>
	<!--  Cuerpo -->
	<br>
	<br><br>
	<br>
	<img src="logo.png" class="logo">
	<section class="main">
		<article>
		<div class="sesion">
			<p>Inicio de sesión</p>
		</div>
			
			<br>
			<br>
	<form action="../../validar.php" method="post" >
			<div class="div-US">
			<label for="Username">Usuario:</label>
			</div>
      <div class="input-container">
        <br>
        <br>
        <input name="nickname" type="text" class="cuadros" id="Username" required="required"/>
        <div class="bar"></div>
      </div>
      <br>
      <div class="div-US">
      <label for="Password">Contraseña:</label>
      </div>
      <div class="input-container">
        <br>
        <br>
        <input name="password" type="password" class="cuadros id="Password" required="required"/>
        <div class="bar"></div>
      </div>
      <br>
      <div class="button-container">
        <button class="botones"><span>Login</span></button>
      </div>
    </form>
        <br>
        <br>
		</article>
	</section>
	<br>
	<br>
	<br>
	<br>
	
<script type="text/javascript" src="java-web2.js"></script>
<script type="text/javascript" src="java2.js"></script>
</body>
<html>