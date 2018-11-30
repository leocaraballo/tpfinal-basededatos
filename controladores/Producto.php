<?php 
	if(isset($_POST['Codigo']) && isset($_POST['Nombre'])){
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Producto.php');
    Producto::insertarProducto($_POST['Codigo'], $_POST['Empresa_Proveedora_RNE_FK'], $_POST['Marco_Regulatorio_Numero_FK'],$_POST['RNPA'], $_POST['Nombre'], $_POST['Marca'],$_POST['Descripcion']);
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mensaje.php');
    mensaje("Se ha agregado un Producto exitosamente!");
	}	else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/EmpresaProveedora.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/MarcoRegulatorio.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/producto.php');
  }

 ?>