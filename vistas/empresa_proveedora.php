<main class="w3-container w3-center" style="padding:128px 16px;">
<<<<<<< HEAD
  <h1 class="white-l">Nuevo Proveedor</h1>
  <form class="w3-container" style="text-align:left;" action="empresa_proveedora.php">
    <label class="white-l"><b>RNE</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el RNE de la empresa" name="rne">
    <label class="white-l"><b>CUIT</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el CUIT sin guiones" name="cuit"
      required>
    <label class="white-l"><b>Nombre</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre de la empresa" name="nombre"
      required>
    <label class="white-l"><b>Direccion</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la direccion de la empresa"
      name="direccion" required>
    <label class="white-l"><b>Telefono</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el telefono de la empresa"
      name="telefono" required>
    <label class="white-l"><b>Email</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el email de la empresa" name="email"
      required>
    <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="enviar" value="Agregar">
=======
    <table class="w3-table w3-striped">
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
                    '<td>'. $value->email .'</td>'.
                    '<td><a href="empresa_proveedora.php?rne=' . $value->rne . '&cuit=' . $value->cuit . '&nombre=' . $value->nombre . 
                                                      '&direccion=' . $value->direccion . '&telefono=' . $value->telefono . '&email=' . $value->email . 
                                                      '&accion=M">Modificar</a></td>'.
                    '</tr>';
        }
        ?>
    </table>
    <br>
    <br>
    <form class="w3-container" style="text-align:left;" action="empresa_proveedora.php">
          <div class="w3-section">
            <?php
              if (isset($_GET['rne']) && isset($_GET['accion'])) {
                $action = 'M';
            ?>
              
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la accion" name="accion" style="display:none" value=<?php echo $action;?> >
                <label><b>RNE</b></label>
                  <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el RNE de la empresa" name="rne"
                    value=<?php echo $_GET['rne'];?>>

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
>>>>>>> 550f8950ed42d3092011bc1a3a7eeb25f5673e25
  </form>
</main>