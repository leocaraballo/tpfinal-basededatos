<main class="w3-container w3-light-grey" style="padding:128px 16px;">
  <h1 class="white-l">Nuevo Tipo de Verificacion</h1>
  <form action="/tpfinal-basededatos/controladores/tipo_verificaciones.php" method="POST">
    <div class="w3-section">
      <label class="white-l" for="Nombre"><strong>Nombre:</strong></label>
      <input class="w3-input w3-margin-bottom" type="text" name="Nombre" id="Nombre">
      <label class="white-l" for="Tipo"><strong>Tipo:</strong></label>
      <input class="w3-input w3-margin-bottom" type="text" name="Tipo" id="Tipo">

      <input type="submit" class="w3-button w3-block w3-green w3-section w3-padding" value="Agregar" name="agregar">
    </div>
  </form>
</main>