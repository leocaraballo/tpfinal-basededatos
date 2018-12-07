<?php
  /*
  // CODIGO PARA RESETEAR LA BASE DE DATOS
  // Pasa el archivo sql a string
  $sql = file_get_contents("database_SuperCaro.sql");
  
  require('modelos/Conexion.inc.php');
  Conexion::openConnection();
  $db = Conexion::getConnection();

  if ($db != null) {
    try {
      $db->exec($sql);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    Conexion::closeConnection();
  }
  */
  require_once('modelos/Conexion.inc.php');
  Conexion::openConnection();
  $db = Conexion::getConnection();

  if ($db != null) {
    /*
    $sql = "SELECT T.Nombre as Nombre, T.Tipo as Tipo, V.Fecha as Fecha, V.Hora as Hora, V.Resultado as Resultado,
                     CASE 
                        WHEN V.Cumple = 1 THEN 'SI'
                        ELSE 'NO'
                     END as Cumple
              FROM Verificacion V INNER JOIN Tipo_Verificacion T ON V.Tipo_Verificacion_Nombre_FK = T.Nombre
              WHERE V.Ficha_control_Numero_FK = 555222";
              */

    $sql = "SELECT Numero, Tecnico_Dni_FK, Lote_Numero_FK, Semana, Año, Estado_Lote, Observaciones_Generales
              FROM Ficha_Control";
    try {
      foreach ($db->query($sql) as $row) {
        echo $row["Numero"]."<br>";
        echo $row["Tecnico_Dni_FK"]."<br>";
        echo $row["Lote_Numero_FK"]."<br>";
        echo $row["Semana"]."<br>";
        echo $row["Año"]."<br>";
        echo $row["Estado_Lote"]."<br>";
        echo $row["Observaciones_Generales"]."<br>";
        echo "========================<br>";
      }
      echo "Todo OK";
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    Conexion::closeConnection();
  }
  /*
  $sql = "INSERT INTO Tipo_Verificacion(Nombre, Tipo)
          VALUES ('Trazabilidad', 'Cumplimiento'), ('Presencia Gluten', 'Cumplimiento'), 
                 ('Contenido Alcohólico', 'Medida'), ('Contenido de Sodio', 'Medida');";
  
  require($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
  Conexion::openConnection();
  $db = Conexion::getConnection();
  if ($db != null) {
    try {
      $db->exec($sql);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    Conexion::closeConnection();
  }
  */
?>