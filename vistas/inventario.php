<?php

$lotes = Lote::getAllLotes();
?>
<main style="padding:128px 16px;">
<header class="w3-container w3-center w3-centered w3-card-4" style="padding:128px 16px;">
  <table class="w3-table w3-striped w3-table-all">
      <tr>
        <th>Numero</th>
        <th>Nombre del Producto</th>
        <th>Marca</th>
        <th>RNE</th>
        <th>RNPA</th>
        <th>Proveedor</th>
      </tr>
      <?php
      foreach ($lotes as $value) {
        echo    '<tr>'.
        '<td><button  onclick="document.getElementById(\'id01\').style.display=\'block\'" class="w3-button w3-padding-large w3-large w3-margin-top">' . $value['Lote_Numero'] . '</button></td>'.
        '<td>'. $value['Producto_Nombre'] .'</td>' .
        '<td>'. $value['Producto_Marca'] .'</td>' .
        '<td>'. $value['RNE'] .'</td>' .
        '<td>'. $value['Producto_RNPA'] .'</td>' .
        '<td>'. $value['Proveedor_Nombre'] .'</td>' .
        '</tr>';
      }
      ?>
  </table>
  <div class="w3-container">

    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright"
            title="Close Modal">×</span>
          <img src="Logo.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" action="/supercaro">
          <div class="w3-section">
            <label><b>Usuario</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese su usuario" name="Usuario"
              required>
            <label><b>Contraseña</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Ingrese su contraseña" name="Pass" required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Iniciar sesion</button>
          </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
          <span class="w3-right w3-padding w3-hide-small"> <a href="#">¿Olvido su contraseña?</a></span>
        </div>

      </div>
    </div>
  </div>
</header>
</main>