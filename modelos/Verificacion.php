<?php
   class Verificacion {
    public static function getUltimaFichaControl($numero_lote) {
      require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
      Conexion::openConnection();
      $db = Conexion::getConnection();
      $sql = "SELECT Numero, Año, Semana, Estado_Lote, Observaciones_Generales
              FROM Ficha_Control
              WHERE Lote_Numero_FK = :numero_lote
              ORDER BY Numero DESC
              LIMIT 1";

      $statement = $db->prepare($sql);
      $statement->execute([":numero_lote" => $numero_lote]);
      if ($statement->rowCount() == 0) {
        return false;
      }
      return $statement->fetch();
    }

    public static function getVerificaciones($numero_ficha) {
      require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
      Conexion::openConnection();
      $db = Conexion::getConnection();
      $sql = "SELECT T.Nombre as Nombre, T.Tipo as Tipo, V.Fecha as Fecha, V.Hora as Hora, V.Resultado as Resultado,
                     CASE 
                        WHEN V.Cumple = 1 THEN 'SI'
                        ELSE 'NO'
                     END as Cumple
              FROM Verificacion V JOIN Tipo_Verificacion T ON V.Tipo_Verificacion_Nombre_FK = T.Nombre
              WHERE V.Ficha_control_Numero_FK = :numero_ficha";

      $statement = $db->prepare($sql);
      $statement->execute([":numero_ficha" => $numero_ficha]);
      return $statement->fetchAll();
    }
  }

?>