<?php

$lotes = Lote::getAllLotes();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function(){
  $('.button').click(function(){
    let valor = $(this).parent().find('.button').text();
    document.getElementById('id01').style.display='block';
    document.getElementById('lote').value = valor;
  });
});
</script>
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
          //<button  onclick="document.getElementById(\'id01\').style.display=\'block\'" class="w3-button w3-padding-large w3-large w3-margin-top">
        echo    '<tr>'.
        '<td class="button">' . $value['Lote_Numero'] . '</td>'.
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
          <!--<img src="Logo.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">-->
        </div>

        <form class="w3-container" action="/supercaro">
          <div class="w3-section">
            <label><b>Numero de Lote</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="n_lote" id="lote" required>
            <label><b>Contraseña</b></label>
            <input class="w3-input w3-border" type="password" placeholder="Ingrese su contraseña" name="Pass" required>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
</main>