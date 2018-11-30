<?php 
    $categorias = Categoria::RetornarTodas();
    if (isset($_GET[enviar])) {
        # code...
        
    }
?>
<header class="w3-container w3-center w3-centered w3-card-4" style="padding:128px 16px;">
  <table class="w3-table w3-striped w3-table-all">
      <tr>
        <th>Nombre</th>
        <th></th>
      </tr>
      <?php
      //Retorno de las categorias
      foreach ($categorias as $value) {
          # code...
          echo '<tr><td>' . $value . '</td><td></td></tr>';
      }
      ?>
  </table>
</header>
  <br>
    <br>
    <div class="w3-container w3-light-grey">
    <form class="w3-container" method="get" style="text-align:left;" action="categoria.php">
          <div class="w3-section">
            <label><b>Nombre</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre de la empresa" name="nombre">
            
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="enviar">Agregar/Modificar categorias</button>
          </div>
  </form>
  </div>
</main>