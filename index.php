<?php 
require('modelos/Conexion.inc.php');
Conexion::openConnection();

//if (Conexion::getConnection() != null) {
	# code...
	?>
	<h1>Conectado!.</h1>
	<?php 
//}else{
	
	//<h1>Error de Conexion!.</h1>
	//<?php
 //} 
 ?>
<!DOCTYPE html>
<html lang="en">
<title>SuperCaro</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
		#Cursiva {font-style: italic}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>


<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-blue w3-card w3-left-align w3-large">
		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a class="w3-bar-item w3-button w3-padding-large w3-white">Inicio</a>
		<a href="tpfinal-basededatos/producto" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">producto</a>
		<a href="tpfinal-basededatos/inventario" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">inventario</a>
		<a href="tpfinal-basededatos/lote" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Lote</a>
		<a onclick="document.getElementById('id02').style.display='block'" href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Verificaciones</a>
	</div>

	<!-- Navbar on small screens -->
	<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
		<a class="w3-bar-item w3-button w3-padding-large w3-white">Inicio</a>
		<a href="#" class="w3-bar-item w3-button w3-padding-large">Producto</a>
		<a href="/supercaro/Conozcanos" class="w3-bar-item w3-button w3-padding-large">Conozcanos</a>
		<a onclick="document.getElementById('id02').style.display='block'" href="#" class="w3-bar-item w3-button w3-padding-large">Contactenos</a>
	</div>
</div>

<!-- Header -->
<header 	class="w3-container w3-center" style="padding:128px 16px;  background:url(img/almacen.jpg) no-repeat";>
	
		<h1  class="w3-margin w3-jumbo"><strong>SUPERCARO</strong></h1> 
	<!-- <p class="w3-xlarge">Template by w3.css</p> -->
	<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Iniciar sesion</button>
</header>

<!--<div class="w3-container w3-gray w3-center w3-opacity w3-padding-64">
		<h1 class="w3-margin w3-xxlarge w3-serif" id="Cursiva"> &#8810; El progreso de la medicina nos depara el fin de aquella época liberal en la que el hombre aún podía morirse de lo que quería &#8811;</h1>
		<h5>Stanisław Jerzy Lec</h5>
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">  
	<div class="w3-xlarge w3-padding-32">
		<a href="https://www.facebook.com" style="text-decoration:none;" class="fab fa-facebook w3-hover-opacity" href="https://facebook.com" target="_blank"></a>
		<a href="https://www.instagram.com" style="text-decoration:none;" class="fab fa-instagram w3-hover-opacity"></a>
		<a href="https://www.twitter.com" style="text-decoration:none;" class="fab fa-twitter w3-hover-opacity"></a>
 	</div>
 <p>Desarrollado por <a href="https://www.google.com" target="_blank">GrupoBase</a></p>
</footer>



<div class="w3-container">

		<div id="id01" class="w3-modal">
				<div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
	
				<div class="w3-center"><br>
						<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
						
				</div>

				<form class="w3-container" action="/tpfinal-basededatos">
						<div class="w3-section">
								<label><