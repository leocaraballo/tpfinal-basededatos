<?php
Conexion::openConnection();

$action = '';
if (isset($_GET['enviar'])) {
    
    Conexion::openConnection();
    if (isset($_GET['accion']) && $_GET['accion'] == 'M') {
        EmpresaProveedora::modificarEmpresa_Proveedora(Conexion::getConnection(), 
            $_GET['rne'], $_GET['cuit'], $_GET['nombre'], $_GET['direccion'], $_GET['telefono'], $_GET['email']);
        $action = '';
        $_GET['rne'] = null;
        $_GET['accion'] = null;
    }else{
      EmpresaProveedora::insertarEmpresa_Proveedora(Conexion::getConnection(), 
            $_GET['rne'], $_GET['cuit'], $_GET['nombre'], $_GET['direccion'], $_GET['telefono'], $_GET['email']); 
      $_GET['rne'] = null;
        $_GET['accion'] = null;
    }
}
$empresas = EmpresaProveedora::retornarTodasEmpresa_Proveedora(Conexion::getConnection());
?>
<main style="padding:128px 16px;">
<header class="w3-container w3-center w3-centered w3-card-4" style="padding:128px 16px;">
  <table class="w3-table w3-striped w3-table-all">
      <tr>
        <th>RNE</th>
        <th>CUIT</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
      </tr>
      <?php
      foreach ($empresas as $value) {
          echo    '<tr>'.
                  '<td>'. $value->rne .'</td>' .
                  '<td>'. $value->cuit .'</td>' .
                  '<td>'. $value->nombre .'</td>' .
                  '<td>'. $value->direccion .'</td>' .
                  '<td>'. $value->telefono .'</td>' .
                  '<td>'. $value->email .'</td>';
                  /*
                  '<td><a href="empresa_proveedora.php
                          ?rne=' . $value->rne . '&cuit=' . $value->cuit . '&nombre=' . $value->nombre . 
                          '&direccion=' . $value->direccion . '&telefono=' . $value->telefono . '&email=' . $value->email . 
                          '&accion=M">Modificar</a></td>'.
                  '</tr>';*/
      }
      ?>
  </table>
</header>
  <br>
    <br>
    <div class="w3-container w3-light-grey">
    <form class="w3-container" style="text-align:left;" action="empresa_proveedora.php">
          <div class="w3-section">
            <?php
              if (isset($_GET['rne']) && isset($_GET['accion'])) {
                $action = 'M';
            ?>
              
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la accion" name="accion" style="display:none" value=<?php echo $action;?> >
                <label><b>RNE</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el RNE de la empresa" name="rne"
                    value=<?php echo $_GET['rne'];?> readonly>

                <label><b>CUIT</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el CUIT sin guiones" name="cuit"
                    value=<?php echo $_GET['cuit'];?>>

                <label><b>Nombre</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre de la empresa" name="nombre"
                    value=<?php echo $_GET['nombre'];?>>

                <label><b>Direccion</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la direccion de la empresa" name="direccion"
                    value=<?php echo $_GET['direccion'];?>>

                <label><b>Telefono</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el telefono de la empresa" name="telefono"
                    value=<?php echo $_GET['telefono'];?>>

                <label><b>Email</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el email de la empresa" name="email"
                    value=<?php echo $_GET['email'];?>>
            <?php
              }else{
            ?>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la accion" disabled name="accion" style="display:none" value=<?php echo $action;?>>
              <label><b>RNE</b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el RNE de la empresa" name="rne" value=""
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
            <?php
              }
            ?>
            
            
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="enviar">Agregar/Modificar Empresa</button>
          </div>
  </form>
  </div>
</main>