<main class="w3-container w3-center" style="padding:128px 16px;">
  <h1 class="white-l">Nuevo Proveedor</h1>
  <form class="w3-container" style="text-align:left;" action="empresa_proveedora.php">
    <label class="white-l"><b>RNE</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el RNE de la empresa" name="rne">
    <label class="white-l"><b>CUIT</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el CUIT sin guiones" name="cuit"
      required>
    <label class="white-l"><b>Nombre</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre de la empresa" name="nombre"
      required>
    <label class="white-l"><b>Direccion</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la direccion de la empresa"
      name="direccion" required>
    <label class="white-l"><b>Telefono</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el telefono de la empresa"
      name="telefono" required>
    <label class="white-l"><b>Email</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el email de la empresa" name="email"
      required>
    <input class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="enviar" value="Agregar">
  </form>
</main>