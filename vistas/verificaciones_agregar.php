<main class="w3-container" style="padding:128px 16px;">
  <h1 class="white-l">Nueva Ficha</h1>
  <form action="/tpfinal-basededatos/controladores/verificaciones.php" method="post">
    <label for="Numero" class="white-l"><b>Numero Ficha:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" name="numero" id="numero" required>
    <label for="Empresa_Proveedora_RNE_FK" class="white-l"><b>Lote:</b></label>
    <select name="Empresa_Proveedora_RNE_FK" id="Empresa_Proveedora_RNE_FK" class="w3-input w3-border w3-margin-bottom" required>
      <option value="" selected disabled>Seleccione un Lote</option>
      <?php foreach (Lote::getAllLotes() as $lote): ?>
        <option value="<?=$lote["Lote_Numero"]?>"><?="Lote ".$lote["Lote_Numero"]." - ".$lote["Producto_Nombre"]."(".$lote["Producto_Marca"].")"?></option>
      <?php endforeach; ?>
    </select>
    <label for="Año" class="white-l"><b>Año:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" name="Año" id="Año" value="<?=date("Y")?>" required>
    <label for="Semana" class="white-l"><b>Semana:</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" name="Semana" id="Semana" value="<?=date("W")?>" required>
    <label for="Estado_Lote" class="white-l"><b>Estado_lote:</b></label>
    <select name="Estado_Lote" id="Estado_Lote" class="w3-input w3-border w3-margin-bottom" required>
      <option value="" selected disabled>Seleccione un Estado</option>
      <option value="">Seleccione un Estado</option>
      <option value="">Seleccione un Estado</option>
    </select>

    <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="completo" value="Cargar">
  </form>
</main>