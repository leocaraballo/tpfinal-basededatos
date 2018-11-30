<?php
  class Producto {
    public static function getProductos() {
      require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
      Conexion::openConnection();
      $db = Conexion::getConnection();
      if ($db != null) {
        $sql = "SELECT Codigo, Nombre
                FROM Producto";

        return $db->query($sql);
      }
      Conexion::closeConnection();
      return null;
    }
  }
?>