<main class="w3-container" style="padding:128px 16px;">
  <h1 class="white-l">Nueva Ficha</h1>
  <form action="/tpfinal-basededatos/controladores/verificaciones.php" method="post">
    <label for="Numero" class="white-l"><b>Numero Ficha:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" name="Numero" id="Numero" required>
    <label for="Lote_Numero_FK" class="white-l"><b>Lote:</b></label>
    <select name="Lote_Numero_FK" id="Empresa_Proveedora_RNE_FK" class="w3-input w3-border w3-margin-bottom" required>
      <option value="" selected disabled>Seleccione un Lote</option>
      <?php foreach (Lote::getAllLotes() as $lote): ?>
        <option value="<?=$lote["Lote_Numero"]?>"><?="Lote ".$lote["Lote_Numero"]." - ".$lote["Producto_Nombre"]."(".$lote["Producto_Marca"].")"?></option>
      <?php endforeach; ?>
    </select>
    <label for="Año" class="white-l"><b>Año:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" name="Año" id="Año" value="<?=date("Y")?>" required>
    <label for="Semana" class="white-l"><b>Semana:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" name="Semana" id="Semana" value="<?=date("W")?>" required>
    <label for="Estado_Lote" class="white-l"><b>Estado lote:</b></label>
    <select name="Estado_Lote" id="Estado_Lote" class="w3-input w3-border w3-margin-bottom" required>
      <option value="" selected disabled>Seleccione un Estado</option>
      <option value="D">D - Producto Distribuido</option>
      <option value="P">P - Producto en Stock</option>
      <option value="V">V - Producto Vencido y Desechado</option>
      <option value="R">D - Producto No Conforme y Retirado</option>
    </select>
    <label for="Observaciones_Generales" class="white-l"><b>Observaciones Generales:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" name="Observaciones_Generales" id="Observaciones_Generales" required>

    <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="completo" value="Cargar">
  </form>
</main>