<?php
  if (isset($_GET['enviar'])) {
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/EmpresaProveedora.php');
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
    Conexion::openConnection();
    EmpresaProveedora::insertarEmpresa_Proveedora(Conexion::getConnection(), 
            $_GET['rne'], $_GET['cuit'], $_GET['nombre'], $_GET['direccion'], $_GET['telefono'], $_GET['email']);
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mensaje.php');
    mensaje("Se ha agregado un Proveedor exitosamente!");
  } else {
    require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/empresa_proveedora.php');
  }
?>