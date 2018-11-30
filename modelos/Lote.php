<?php
  class Lote {
    public static function crear($data) {
      $sql = "INSERT INTO Lote(Numero, Producto_Codigo_FK, Fecha_Emision, Fecha_Entrada, Fecha_Vcto, Cantidad)
              VALUES (:Numero, :Producto_Codigo_FK, :Fecha_Emision, :Fecha_Entrada, :Fecha_Vcto, :Cantidad)";

      require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
      Conexion::openConnection();
      $db = Conexion::getConnection();
      if ($db != null) {
        $sentence = $db->prepare($sql);
        $sentence->execute($data);
        Conexion::closeConnection();
      }
    }

    public static function getAllLotes() {
      require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
      Conexion::openConnection();
      $db = Conexion::getConnection();
      $ret = null;
      if ($db != null) {
        $sql = "SELECT L.Numero as Lote_Numero, P.Nombre as Producto_Nombre, P.Marca as Producto_Marca, 
                       P.Empresa_Proveedora_RNE_FK as RNE, P.RNPA as Producto_RNPA, EP.Nombre as Proveedor_Nombre
                FROM Lote L JOIN Producto P ON L.Producto_Codigo_FK = P.Codigo
                            JOIN Empresa_Proveedora EM ON EM.RNE = P.Empresa_Proveedora_RNE_FK";
        $ret = $db->query($sql);
      }
      Conexion::closeConnection();
      return $ret;
    }
  }
?>