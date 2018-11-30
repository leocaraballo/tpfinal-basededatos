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



								<button class="w3-button  w3-green " type="submit">Listar Productos</button>
								<button class="w3-button  w3-green " type="submit">Agregar</button>
								<button class="w3-button  w3-green "  >Modificar</button>


<form class="w3-container" action="/supercaro">
	<h1>Productos</h1>
						<div class="w3-section">
								<label><b>Codigo</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese Codigo de producto" name="Codigo" required>
								<label><b>Nombre</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre del producto" name="Nombre" required>
								<label><b>Registro de Numero de Establecimiento</b></label>
								<select class="w3-input w3-border w3-margin-bottom">
  								<option  value="" selected disabled required>seleccione un RNE</option>
  
								</select >

								<label><b>Marco Regulatorio</b></label>
								<select class="w3-input w3-border w3-margin-bottom">
  								<option  value="" selected disabled required>seleccione un MR</option>
  
								</select >
								<label><b>Registro Nacional Producto Alimenticio</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el RNPA" name="RNPA" required>
								
									<label><b>Descripción</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la Descripcion" name="Descripcion" required>

									<label><b>Marca</b></label>
								<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la Marca" name="Marca" required>
								<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Agregar</button>
						</div>
				</form>






</body>
</html>