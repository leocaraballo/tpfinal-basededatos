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
		<a href="supercaro/producto" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">producto</a>
		<a href="supercaro/Conozcanos/" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">inventario</a>
		<a href="supercaro/App" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Lote</a>
		<a onclick="document.getElementById('id02').style.display='block'" href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Verificaciones</a>
                <a onclick="document.getElementById('id02').style.display='block'" href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Empresas Proveedoras</a>
	</div>

	<!-- Navbar on small screens -->
	<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
		<a class="w3-bar-item w3-button w3-padding-large w3-white">Inicio</a>
		<a href="#" class="w3-bar-item w3-button w3-padding-large">Producto</a>
		<a href="/supercaro/Conozcanos" class="w3-bar-item w3-button w3-padding-large">Conozcanos</a>
		<a onclick="document.getElementById('id02').style.display='block'" href="#" class="w3-bar-item w3-button w3-padding-large">Contactenos</a>
	</div>
</div>

