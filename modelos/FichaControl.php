<?php
    class FichaControl{
        public $Numero;
        public $Tecnico_Dni_FK;
        public $Lote_Numero_FK;
        public $Semana;
        public $Año;
        public $Estado_Lote;
        public $Observaciones_Generales;

        function __construct() {}

        

        function Consultar($Numero){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM ficha_control WHERE Numero = $Numero");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->Numero = $Item["Numero"];
                $this->Tecnico_Dni_FK = $Item["Tecnico_Dni_FK"];
                $this->Lote_Numero_FK = $Item["Lote_Numero_FK"];
                $this->Semana = $Item["Semana"];
                $this->Año = $Item["Año"];
                $this->Estado_Lote = $Item["Estado_Lote"];
                $this->Observaciones_Generales = $Item["Observaciones_Generales"];
            }

            return $this;
        } 

        public static function crear($data) {
          $sql = "INSERT INTO Ficha_Control(Numero, Tecnico_Dni_FK, Lote_Numero_FK, Semana, Año, Estado_Lote, Observaciones_Generales)
                  VALUES (:Numero, :Tecnico_Dni_FK, :Lote_Numero_FK, :Semana, :Año, :Estado_Lote, :Observaciones_Generales)";

          require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
          Conexion::openConnection();
          $db = Conexion::getConnection();
          if ($db != null) {
            $sentence = $db->prepare($sql);
            $sentence->execute($data);
            Conexion::closeConnection();
          }
        }

        /*
        function Crear($Numero, $Tecnico_Dni_FK, $Lote_Numero_FK, $Semana, $Año, $Estado_Lote, $Observaciones_Generales){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" INSERT INTO ficha_control
                            (`Numero`,
                            `Tecnico_Dni_FK`,
                            `Lote_Numero_FK`,
                            `Semana`,
                            `Año`,
                            `Estado_Lote`,
                            `Observaciones_Generales`)
                            VALUES
                            ($Numero,
                            $Tecnico_Dni_FK,
                            $Lote_Numero_FK,
                            $Semana,
                            $Año,
                            '$Estado_Lote',
                            '$Observaciones_Generales');");

            if($Conexion->query($Operacion)){
                $this->Numero = $Numero;
                $this->Tecnico_Dni_FK = $Tecnico_Dni_FK;
                $this->Lote_Numero_FK = $Lote_Numero_FK;
                $this->Semana = $Semana;
                $this->Año = $Año;
                $this->Estado_Lote = $Estado_Lote;
                $this->Observaciones_Generales = $Observaciones_Generales;

                return $this;
            }
            else{
                return null;
            }
        }
        */
        function Modificar($Numero, $NuevoNumero, $Tecnico_Dni_FK, $Lote_Numero_FK, $Semana, $Año, $Estado_Lote, $Observaciones_Generales){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" UPDATE ficha_control
                            SET
                            `Numero` = $NuevoNumero,
                            `Tecnico_Dni_FK` = $Tecnico_Dni_FK,
                            `Lote_Numero_FK` = $Lote_Numero_FK,
                            `Semana` = $Semana,
                            `Año` = $Año,
                            `Estado_Lote` = '$Estado_Lote',
                            `Observaciones_Generales` = '$Observaciones_Generales'
                            WHERE `Numero` = $Numero;
                            ");

            $Conexion->query($Operacion);

            $this->Numero = $Numero;
            $this->Tecnico_Dni_FK = $Tecnico_Dni_FK;
            $this->Lote_Numero_FK = $Lote_Numero_FK;
            $this->Semana = $Semana;
            $this->Año = $Año;
            $this->Estado_Lote = $Estado_Lote;
            $this->Observaciones_Generales = $Observaciones_Generales;

            return $this;
        }

        function Borrar($Numero){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("DELETE FROM ficha_control WHERE Numero = $Numero");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return false;
            }
        }

    }
?>