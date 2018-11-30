<main class="w3-container" style="padding:128px 16px;">
  <h1 class="white-l">Verificaciones</h1>
  <form action="/tpfinal-basededatos/controladores/verificaciones.php" method="post">
    <?php foreach(Verificacion::getTipoVerificaciones($_SESSION["lote"]["codigo_producto"]) as $tv):?>

      <label class="white-l"><b>Nombre:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" value="<?=$tv["Nombre"]?>" readonly>
      <label class="white-l"><b>Tipo:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" value="<?=$tv["Tipo"]?>" readonly>
      <label class="white-l"><b>Numero MR:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="number" value="<?=$tv["Numero"]?>" readonly>

      <input type="hidden" name="Ficha_control_Numero_FK[]" value="">
      <input type="hidden" name="Tipo_Verificacion_Nombre_FK[]" value="<?=$tv["Nombre"]?>">
      <label class="white-l"><b>Fecha:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="date" name="Fecha[]" required>
      <label class="white-l"><b>Hora:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="time" name="Hora[]" required>
      <label class="white-l"><b>Resultado:</b></label>
      <input class="w3-input w3-border w3-margin-bottom" type="text" name="Resultado[]" required>
      <label class="white-l"><b>Cumple:</b></label>
      <select class="w3-input w3-border w3-margin-bottom" name="Cumple[]" required>
        <option value="1" selected>Si</option>
        <option value="0">No</option>
      </select>
    <?php endforeach;?>

    <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="verif" value="Cargar">
  </form>
</main>