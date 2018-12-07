<?php
    class Tecnico{
        public $DNI;
        public $Matricula;
        public $Nombre;
        public $Apellido;
        public $Telefono;
        public $Direccion;

        function __construct() {}

        public static function RetornaTodosLosTecnicos(){
                require_once('Conexion.inc.php');
                Conexion::openConnection();
    
                $Conexion = Conexion::getConnection();
    
                $Operacion = ("SELECT * FROM tecnico");
    
                $Resultados = $Conexion->query($Operacion);

                $retorno;
                foreach($Resultados as $Item){
                    $tecnics = new Tecnico();
                    $tecnics->DNI = $Item["Dni"];
                    $tecnics->Matricula = $Item["Matricula"];
                    $tecnics->Nombre = $Item["Nombre"];
                    $tecnics->Apellido = $Item["Apellido"];
                    $tecnics->Telefono = $Item["Telefono"];
                    $tecnics->Direccion = $Item["Direccion"];
                    $retorno[] = $tecnics;
                }
    
                return $retorno;
            }

        public static function Consultar($DNI){
            require_once('Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT Dni, Matricula, Nombre, Apellido, Telefono, Direccion
                           FROM tecnico WHERE DNI = $DNI");

            $Resultados = $Conexion->query($Operacion);
            $result = $Resultados->fetch();

            if ($result) {
                $tecnico["Dni"] = $result["Dni"];
                $tecnico["Matricula"] = $result["Matricula"];
                $tecnico["Nombre"] = $result["Nombre"];
                $tecnico["Apellido"] = $result["Apellido"];
                $tecnico["Telefono"] = $result["Telefono"];
                $tecnico["Direccion"] = $result["Direccion"];
               return $tecnico;
            }else{
                return null;
            }
            
        } 

        public static function Crear($DNI, $Matricula, $Nombre, $Apellido, $Telefono, $Direccion){
            require_once('Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion =    ("INSERT INTO supercaro.tecnico
                            (`Dni`, `Matricula`, `Nombre`, `Apellido`, `Telefono`, `Direccion`)
                            VALUES
                            ($DNI, $Matricula, '$Nombre', '$Apellido', $Telefono, '$Direccion');");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return null;
            }
        }

        function Modificar($DNI, $NuevoDNI, $Matricula, $Nombre, $Apellido, $Telefono, $Direccion){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" UPDATE supercaro.tecnico
                            SET
                            `Dni` = $NuevoDNI,
                            `Matricula` = $Matricula,
                            `Nombre` = '$Nombre',
                            `Apellido` = '$Apellido',
                            `Telefono` = $Telefono,
                            `Direccion` = '$Direccion'
                            WHERE `Dni` = $DNI;");

            $Datos = [
                "NuevoDNI" => $NuevoDNI,
                "DNI" => $DNI,
                "Matricula" => $Matricula,
                "Nombre" => $Nombre,
                "Apellido" => $Apellido,
                "Telefono" => $Telefono,
                "Direccion" => $Direccion
            ];

            $Conexion->query($Operacion);
        }

        function Borrar($DNI){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("DELETE FROM supercaro.tecnico WHERE DNI = $DNI");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return false;
            }
        }

    }
?>