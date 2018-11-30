<?php 
require('../modelos/Producto');

	if(isset($_POST['Codigo'])&&isset($_POST['Nombre'])){
	
		$this->insertarProducto($_POST['Codigo'], $_POST['Empresa_Proveedora_RNE_FK'], $_POST['Marco_Regulatorio_Numero_FK'],$_POST['RNPA'], $_POST['Nombre'], $_POST['Marca'],$_POST['Descripcion']);

		
	}	

 ?>