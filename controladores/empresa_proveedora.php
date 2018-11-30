<?php
  require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/EmpresaProveedora.php');
  require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
  if (isset($_GET['enviar'])) {
    Conexion::openConnection();
    EmpresaProveedora::insertarEmpresa_Proveedora(Conexion::getConnection(), 
            $_GET['rne'], $_GET['cuit'], $_GET['nombre'], $_GET['direccion'], $_GET['telefono'], $_GET['email']);
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mensaje.php');
    mensaje("Se ha agregado un Proveedor exitosamente!");
  } else {
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
    $empresas = EmpresaProveedora::retornarTodasEmpresa_Proveedora(Conexion::getConnection());
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/empresa_proveedora.php');
  }
?>