<main class="w3-container" style="padding:128px 16px;">
<header class="w3-container w3-center w3-centered " style="padding:128px 16px;">
  <table class="w3-table w3-striped w3-table-all">
      <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Unidades en venta</th>
      </tr>
      <?php
      foreach (Producto::getProductos() as $value) {
          echo    '<tr>'.
                  '<td>'. $value['Codigo'] .'</td>' .
                  '<td>'. $value['Nombre'] .'</td>' .
                  '<td><a href="UnidadVenta.php?Producto='. $value['Codigo'] .'" style="text-decoration:none" >Ver unidades</a>';
      }

      ?>
  </table>
</header>
</main>
<div class="w3-container w3-light-grey">
  <h1 class="">Nuevo Producto</h1>
  <form action="/tpfinal-basededatos/controladores/producto.php" method="post">
    <label class=""><b>Código</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese Codigo de producto" name="Codigo"
      required>
    <label class=""><b>Nombre</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el nombre del producto" name="Nombre"
      required>
    <label class=""><b>Registro de Numero de Establecimiento</b></label>
    <select name="Empresa_Proveedora_RNE_FK" class="w3-input w3-border w3-margin-bottom" required>
      <option value="" selected disabled>Seleccione un RNE</option>
      <?php foreach (EmpresaProveedora::getEmpresasProveedoras() as $empresa): ?>
        <option value="<?=$empresa["RNE"]?>"><?=$empresa["RNE"]." - ".$empresa["Nombre"]?></option>
      <?php endforeach; ?>
    </select>

    <label class=""><b>Marco Regulatorio</b></label>
    <select name="Marco_Regulatorio_Numero_FK" class="w3-input w3-border w3-margin-bottom">
      <option value="" selected disabled required>Seleccione un MR</option>
      <?php foreach (MarcoRegulatorio::getMarcosRegulatorios() as $mr): ?>
        <option value="<?=$mr["Numero"]?>">MR <?=$mr["Numero"]?></option>
      <?php endforeach; ?>
    </select>
    <label class=""><b>Registro Nacional Producto Alimenticio</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el RNPA" name="RNPA" required>

    <label class=""><b>Descripción</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la Descripcion" name="Descripcion"
      required>

    <label class=""><b>Marca</b></label>
    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese la Marca" name="Marca" required>

    <table class="">
      <tr>
        <th>Categorias</th>
        <th></th>
      </tr>
      <?php foreach (Categoria::RetornarTodas() as $cat): ?>
        <tr>
          <td><?= $cat ?></td>
          <td><input type="checkbox" name="<?=$cat?>" value="<?=$cat?>"></td>
        </tr>
      <?php endforeach; ?>
    </table>


    <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Agregar</button>
    <button class="w3-button w3-block w3-yellow w3-section w3-padding ">Modificar</button>
  </form>
    </div>
