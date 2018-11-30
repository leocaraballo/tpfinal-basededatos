<main class="w3-container" style="padding:128px 16px;">
  <h1 class="white-l">Tipo de Verificaciones</h1>
  <form action="/tpfinal-basededatos/controladores/tiene.php" method="POST">
    <input type="hidden" name="Marco_Regulatorio_Numero_FK" value="<?=$_SESSION["marco_regulatorio_numero"];?>">
    <div id="contenedor">
      <label class="white-l"><b>Tipo de Verificación 1:</b></label>
      <select name="Tipo_Verificacion_Nombre_FK[]" class="w3-input w3-border w3-margin-bottom">
        <option value="" selected disabled required>Seleccione un Tipo de Verificación</option>
        <?php foreach (TipoVerificacion::getTipoVerificaciones() as $tipo): ?>
          <option value="<?=$tipo["Nombre"]?>"><?=$tipo["Nombre"]." (".$tipo["Tipo"].")"?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button class="w3-button w3-block w3-green w3-section w3-padding" id="mas">Añadir Otro</button>
    <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Agregar" name="add">
  </form>
</main>
<script>
</script>