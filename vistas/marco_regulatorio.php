<main class="w3-container" style="padding:128px 16px;">
  <h1 class="white-l">Nuevo Marco Regulatorio</h1>
  <form action="/tpfinal-basededatos/controladores/marco_regulatorio.php" method="POST">
      <label class="white-l" for="numero"><strong>Número:</strong></label>
      <input class="w3-input w3-margin-bottom" type="number" name="numero" id="numero">
      <label class="white-l" for="duracion"><strong>Duración en Días:</strong></label>
      <input class="w3-input w3-margin-bottom" type="number" name="duracion" id="duracion">
      <label class="white-l" for="minima"><strong>Temperatura Mínima:</strong></label>
      <input class="w3-input w3-margin-bottom" type="number" name="minima" id="minima">
      <label class="white-l" for="maxima"><strong>Temperatura Máxima:</strong></label>
      <input class="w3-input w3-margin-bottom" type="number" name="maxima" id="maxima">
      <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Agregar" name="agregar">
  </form>
</main>