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
    body {
      background-image: url("img/almacen.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position:center;
    }
    .titulo-grande {
      color: white;
      text-shadow: 4px 4px 8px #000000;
    }
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
<<<<<<< HEAD
<header class="w3-container w3-center" style="padding:128px 16px;">
=======
<header class="w3-container w3-center" style="padding:128px 16px;  background:url(img/almacen.jpg) no-repeat center center fixed; background-size: cover;">
>>>>>>> 9bbdd481fe0fb8187d845a58d06d9a40980680c6
	
		<h1 class="w3-margin w3-jumbo titulo-grande"><strong>SUPERCARO</strong></h1> 
	<!-- <p class="w3-xlarge">Template by w3.css</p> -->
	<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Iniciar sesion</button>
</header>

<!--<div class="w3-container w3-gray w3-center w3-opacity w3-padding-64">
		<h1 class="w3-margin w3-xxlarge w3-serif" id="Cursiva"> &#8810; El progreso de la medicina nos depara el fin de aquella época liberal en la que el hombre aún podía morirse de lo que quería &#8811;</h1>
		<h5>Stanisław Jerzy Lec</h5>
</div>

<-- Footer -->
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
						<img src="Logo.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">
				</div>

				<form class="w3-container" action="/supercaro">
						<div class="w3-section">
								<label><b>Usuario</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese su usuario" name="Usuario" required>
								<label><b>Contraseña</b></label>
								<input class="w3-input w3-border" type="password" placeholder="Ingrese su contraseña" name="Pass" required>
								<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Iniciar sesion</button>
						</div>
				</form>

				<div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
						<button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
						<span class="w3-right w3-padding w3-hide-small"> <a href="#">¿Olvido su contraseña?</a></span>
				</div>

				</div>
		</div>
</div>


<div id="id02" class="w3-modal">
				<div class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
						<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>

						<h2 class="w3-center">Verificacion</h2>
 
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="first" type="text" placeholder="Nombre">
								</div>
						</div>
						
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="last" type="text" placeholder="Apellido">
								</div>
						</div>
						
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="email" type="text" placeholder="Correo">
								</div>
						</div>
						
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="phone" type="text" placeholder="Telefono (Opcional)">
								</div>
						</div>
						
						<div class="w3-row w3-section">
							<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
								<div class="w3-rest">
									<input class="w3-input w3-border" name="message" type="text" placeholder="Mensaje">
								</div>
						</div>
						
						<p class="w3-center">
						<button class="w3-button w3-section w3-blue w3-ripple"> verificar </button>
						</p>
</div>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
		var x = document.getElementById("navDemo");
		if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
		} else { 
				x.className = x.className.replace(" w3-show", "");
		}
}

</script>

</body>
</html>
