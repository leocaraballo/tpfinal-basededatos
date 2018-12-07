<?php
    class UnidadVenta{
        public $Nombre;

        function __construct() {}

        public static function ProductoINNERUnidadVenta($ID){
            require_once('Conexion.inc.php');
            Conexion::openConnection();
    
            $Conexion = Conexion::getConnection();

            $Operacion = (" SELECT 
                            unidad_venta.Codigo, unidad_venta.Lote_Numero_FK as Lote,
                            producto.Nombre, producto.Marca
                            FROM
                            (unidad_venta INNER JOIN producto
                            ON
                            unidad_venta.Producto_Codigo_FK = producto.Codigo)
                            WHERE unidad_venta.Producto_Codigo_FK = $ID;");
    
            $Resultados = $Conexion->query($Operacion);
            /*$retorno;
            foreach($Resultados as $Item){
                $retorno[] = $Item["Nombre"];
            }*/
    
            return $Resultados;
        }

        public static function RetornarTodas(){
            require_once('Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM categoria");

            $Resultados = $Conexion->query($Operacion);
            $retorno;
            foreach($Resultados as $Item){
                $retorno[] = $Item["Nombre"];
            }

            return $retorno;
        }

        function Consultar($Nombre){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("SELECT * FROM categoria WHERE Nombre = '$Nombre'");

            $Resultados = $Conexion->query($Operacion);

            foreach($Resultados as $Item){
                $this->Nombre = $Item["Nombre"];
            }

            return $this;
        } 

         public static function Crear($Unidad, $Producto, $Lote, $Tipo, $Material, $Peso, $Volumen = null, $Fecha = null, $Descripcion = null){
            require_once('Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion =    ("  INSERT INTO `supercaro`.`unidad_venta`
                                (`Codigo`,
                                `Producto_Codigo_FK`,
                                `Lote_Numero_FK`,
                                `Envase_Paquete`,
                                `Envase_Material`,
                                `Peso`,
                                `Volumen`,
                                `Fecha_Retiro`,
                                `Descripcion_Extra`)
                                VALUES
                                (:Unidad,
                                :Producto,
                                :Lote,
                                :Tipo,
                                :Material,
                                :Peso,
                                :Volumen,
                                :Fecha,
                                :Descripcion)");

            $Consulta = $Conexion->prepare($Operacion);
            $Consulta->bindParam(':Unidad',$Unidad, PDO::PARAM_INT);
            $Consulta->bindParam(':Producto',$Producto, PDO::PARAM_INT);
            $Consulta->bindParam(':Lote',$Lote, PDO::PARAM_INT);
            $Consulta->bindParam(':Tipo',$Tipo, PDO::PARAM_STR);
            $Consulta->bindParam(':Material',$Material, PDO::PARAM_STR);
            $Consulta->bindParam(':Peso',$Peso, PDO::PARAM_INT);
            $Consulta->bindParam(':Volumen',$Volumen, PDO::PARAM_INT);
            $Consulta->bindParam(':Fecha',$Fecha, PDO::PARAM_STR);
            $Consulta->bindParam(':Descripcion',$Descripcion, PDO::PARAM_STR);
            $Consulta->execute();
        }

        function Modificar($Nombre, $NuevoNombre){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = (" UPDATE categoria
                            SET
                            `Nombre` = '$NuevoNombre'
                            WHERE 
                            `Nombre` = '$Nombre';");

            $Conexion->query($Operacion);

            $this->Nombre = $NuevoNombre;
            return $this;
        }

        function Borrar($Nombre){
            require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal/modelos/Conexion.inc.php');
            Conexion::openConnection();

            $Conexion = Conexion::getConnection();

            $Operacion = ("DELETE FROM categoria WHERE Nombre = '$Nombre'");

            if($Conexion->query($Operacion)){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>