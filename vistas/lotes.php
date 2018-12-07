<main class="w3-container w3-light-grey" style="padding:128px 16px;">
  <h1 class="white-l">Nuevo Lote</h1>
  <form action="/tpfinal-basededatos/controladores/lotes.php" method="POST">
    <div class="w3-section">
      <label class="white-l" for="numero"><strong>Número de Lote:</strong></label>
      <input class="w3-input w3-margin-bottom" type="number" name="numero" id="numero">
      <label class="white-l" for="producto"><strong>Producto:</strong></label>
      <select class="w3-select w3-border w3-margin-bottom" name="producto" id="producto" required>
        <?php foreach (Producto::getProductos() as $producto): ?>
        <option value="<?=$producto["Codigo"]?>">
          <?=$producto["Nombre"]?>
        </option>
        <?php endforeach; ?>
      </select>
      <label class="white-l" for="fecha_emision"><strong>Fecha de Emisión:</strong></label>
      <input class="w3-input w3-margin-bottom" type="date" name="fecha_emision" id="fecha_emision">
      <label class="white-l" for="fecha_entrada"><strong>Fecha de Entrada:</strong></label>
      <input class="w3-input w3-margin-bottom" type="date" name="fecha_entrada" id="fecha_entrada" value="<?=date("Y-m-d")?>">
      <label class="white-l" for="fecha_vcto"><strong>Fecha de Vencimiento:</strong></label>
      <input class="w3-input w3-margin-bottom" type="date" name="fecha_vcto" id="fecha_vcto">
      <label class="white-l" for="cantidad"><strong>Cantidad:</strong></label>
      <input class="w3-input w3-margin-bottom" type="number" name="cantidad" id="cantidad">
      <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Agregar" name="agregar">

    </div>
  </form>
</main>