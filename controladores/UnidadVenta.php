<script>
    function Actualizar() {
        window.location.href = window.location.href;
    }
</script>
<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/controladores/mostrar.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/modelos/UnidadVenta.php');
    mostrar($_SERVER['DOCUMENT_ROOT'].'/tpfinal-basededatos/vistas/UnidadVenta.php');
?>