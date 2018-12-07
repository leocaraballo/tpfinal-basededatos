<main class="w3-container w3-light-grey" style="padding:128px 16px;">
  <form action="/tpfinal-basededatos/controladores/verificaciones.php?ver=" method="post">
    <select name="Lote_Numero_FK" id="Empresa_Proveedora_RNE_FK" class="w3-input w3-border w3-margin-bottom" required>
      <option value="" selected disabled>Seleccione un Lote</option>
      <?php foreach (Lote::getAllLotes() as $lote): ?>
      <option value="<?=$lote["Lote_Numero"]?>">
        <?="Lote ".$lote["Lote_Numero"]." - ".$lote["Producto_Nombre"]."(".$lote["Producto_Marca"].")"?>
      </option>
      <?php endforeach; ?>
    </select>
    <button type="submit" class="w3-button w3-block w3-green w3-section w3-padding">
      <strong class="white-l">Ver Verificaciones</strong>
    </button>
  </form>
  <a href="/tpfinal-basededatos/controladores/verificaciones.php?agregar=" class="w3-button w3-block w3-blue w3-section w3-padding">
    <strong class="white-l">Registrar Verificación</strong>
  </a>
  <a href="/tpfinal-basededatos/controladores/tipo_verificaciones.php" class="w3-button w3-block w3-red w3-section w3-padding">
    <strong class="white-l">Nuevo Tipo de Verificación</strong>
  </a>
</main>