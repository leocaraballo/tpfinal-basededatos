<?php 
require('modelos/Conexion.inc.php');
Conexion::openConnection();

if (Conexion::getConnection() != null) {
	# code...
	?>
	<h1>Conectado!.</h1>
	<?php 
}else{
	?>
	<h1>Error de Conexion!.</h1>
	<?php
 } 
 ?>
