<?php
include_once './templates/header.php';
if (isset($_GET['enviar'])) {
    require '../modelos/Empresa_Proveedora.inc.php';
    require '../modelos/Conexion.inc.php';
    Conexion::openConnection();
    Empresa_Proveedora::insertarEmpresa_Proveedora(Conexion::getConnection(), 
            $_GET['rne'], $_GET['cuit'], $_GET['nombre'], $_GET['direccion'], $_GET['telefono'], $_GET['email']);
}
?>
<main class="w3-container w3-center" style="padding:128px 16px;">
    <form class="w3-container" style="text-align:left;" action="empresa_proveedora.php">
          <div class="w3-section">
            <label><b>RNE</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el RNE de la empresa" name="rne"
              required>
            <label><b>CUIT</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el CUIT sin guiones" name="cuit"
              required>
            <label><b>Nombre</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre de la empresa" name="nombre"
              required>
            <label><b>Direccion</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la direccion de la empresa" name="direccion"
              required>
            <label><b>Telefono</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el telefono de la empresa" name="telefono"
              required>
            <label><b>Email</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el email de la empresa" name="email"
              required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="enviar">Agregar Empresa</button>
          </div>
  </form>
    
</main>
