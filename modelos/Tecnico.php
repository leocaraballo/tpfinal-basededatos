<?php
    class Tecnico{
        public $DNI;
        public $Matricula;
        public $Nombre;
        public $Apellido;
        public $Telefono;
        public $Direccion;

        function __construct() {}

        function Consultar($DNI){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM tecnico WHERE DNI = $DNI");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->DNI = $Item["Dni"];
                $this->Matricula = $Item["Matricula"];
                $this->Nombre = $Item["Nombre"];
                $this->Apellido = $Item["Apellido"];
                $this->Telefono = $Item["Telefono"];
                $this->Direccion = $Item["Direccion"];
            }

            return $this;
        } 

        function Crear($DNI, $Matricula, $Nombre, $Apellido, $Telefono, $Direccion){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion =    ("INSERT INTO supercaro.tecnico
                            (`Dni`, `Matricula`, `Nombre`, `Apellido`, `Telefono`, `Direccion`)
                            VALUES
                            ($DNI, $Matricula, '$Nombre', '$Apellido', $Telefono, '$Direccion');");

            if($Conexion->query($Operacion)){
                $this->DNI = $DNI;
                $this->Matricula = $Matricula;
                $this->Nombre = $Nombre;
                $this->Apellido = $Apellido;
                $this->Telefono = $Telefono;
                $this->Direccion = $Direccion;

                return $this;
            }
            else{
                return null;
            }
        }

        function Modificar($DNI, $NuevoDNI, $Matricula, $Nombre, $Apellido, $Telefono, $Direccion){
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
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
            require($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
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