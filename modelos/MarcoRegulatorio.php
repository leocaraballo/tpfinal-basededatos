<?php
    class MarcoRegulatorio{
        public $Numero;
        public $DuracionDias;
        public $TemperaturaMinima;
        public $TemperaturaMaxima;

        function __construct() {}

        function Consultar($Numero){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM supercaro.marco_regulatorio WHERE Numero = $Numero");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->Numero = $Item["Numero"];
                $this->DuracionDias = $Item["Duracion_Dias"];
                $this->TemperaturaMinima = $Item["Temperatura_Minima"];
                $this->TemperaturaMaxima = $Item["Temperatura_Maxima"];
            }

            return $this;
        } 

        function Crear($Numero, $DuracionDias, $TemperaturaMinima, $TemperaturaMaxima){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" INSERT INTO marco_regulatorio
                            (`Numero`,
                            `Duracion_Dias`,
                            `Temperatura_Minima`,
                            `Temperatura_Maxima`)
                            VALUES
                            ($Numero,
                            $DuracionDias,
                            $TemperaturaMinima,
                            $TemperaturaMaxima);");

            if($Conexion->query($Operacion)){
                $this->Numero = $Numero;
                $this->DuracionDias = $DuracionDias;
                $this->TemperaturaMinima = $TemperaturaMinima;
                $this->TemperaturaMaxima = $TemperaturaMaxima;

                return $this;
            }
            else{
                return null;
            }
        }

        function Modificar($Numero, $NuevoNumero, $DuracionDias, $TemperaturaMinima, $TemperaturaMaxima){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" UPDATE marco_regulatorio
                            SET
                            `Numero` = $NuevoNumero,
                            `Duracion_Dias` = $DuracionDias,
                            `Temperatura_Minima` = $TemperaturaMinima,
                            `Temperatura_Maxima` = $TemperaturaMaxima
                            WHERE 
                            `Numero` = $Numero;");

            $Conexion->query($Operacion);

            $this->Numero = $NuevoNumero;
            $this->DuracionDias = $DuracionDias;
            $this->TemperaturaMinima = $TemperaturaMinima;
            $this->TemperaturaMaxima = $TemperaturaMaxima;

            return $this;
        }

        function Borrar($Numero){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("DELETE FROM marco_regulatorio WHERE Numero = $Numero");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return false;
            }
        }

        public static function getMarcosRegulatorios() {
          require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/Conexion.inc.php');
          Conexion::openConnection();
          $db = Conexion::getConnection();
          $ret = null;
          if ($db != null) {
            $sql = "SELECT Numero
                    FROM Marco_Regulatorio";
            $ret = $db->query($sql);
          }
          Conexion::closeConnection();
          return $ret;
        }

    }
?>