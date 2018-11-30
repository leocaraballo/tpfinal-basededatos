<?php

if (isset($_GET['enviar'])) {
    # code...
    Tecnico::Crear($_GET['dni'],$_GET['matricula'],$_GET['nombre'],$_GET['apellido'],$_GET['telefono'],$_GET['direccion']);
    //($DNI, $Matricula, $Nombre, $Apellido, $Telefono, $Direccion)
}
$tecnicos = Tecnico::RetornaTodosLosTecnicos();
//$empresas = EmpresaProveedora::retornarTodasEmpresa_Proveedora(Conexion::getConnection());
?>
<header class="w3-container w3-center w3-centered w3-card-4" style="padding:128px 16px;">
  <table class="w3-table w3-striped w3-table-all">
      <tr>
        <th>DNI</th>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th></th>
      </tr>
      <?php
        foreach ($tecnicos as $value) {
            # code...
            echo '<tr><td>' . $value->DNI . '</td><td>' . $value->Matricula . '</td>
            <td>' . $value->Nombre . '</td><td>' . $value->Apellido . '</td>
            <td>' . $value->Direccion . '</td><td>' . $value->Telefono . '</td><td></td></tr>';
        }
      ?>
  </table>
</header>
  <br>
    <br>
    <div class="w3-container w3-light-grey">
    <form class="w3-container" style="text-align:left;" action="tecnico.php">
          <div class="w3-section">
          <label><b>DNI</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el DNI" name="dni" 
                  required>
                  <label><b>Matricula</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese la matricula" name="matricula" 
                  required>
              <label><b>Apellido</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el apellido" name="apellido"
              required>
              <label><b>Nombre</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre" name="nombre"
                required>
              <label><b>Direccion</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la direccion" name="direccion"
                required>
              <label><b>Telefono</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el telefono" name="telefono"
                required>           
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="enviar">Agregar/Modificar Tecnico</button>
          </div>
  </form>
  </div>
</main>