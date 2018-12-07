<?php
    $Producto = $_REQUEST["Producto"];
    $Elementos = UnidadVenta::ProductoINNERUnidadVenta($Producto);
    
    if(isset($_POST["Confirmar"])){
        $Unidad = $_POST["Unidad"];
        $Codigo = $_POST["Codigo"];
        $Lote = $_POST["Lote"];
        $Tipo = $_POST["Tipo"];
        $Material = $_POST["Material"];
        $Peso = $_POST["Peso"];
        $Volumen = null;
        $Fecha = null;
        $Descripcion = null;

        if(isset($_POST["Volumen"])){
            $Volumen = $_POST["Volumen"];
        }
        if(isset($_POST["Fecha"])){
            $Fecha = $_POST["Fecha"];
        }
        if(isset($_POST["Descripcion"])){
            $Descripcion = $_POST["Descripcion"];
        }

        UnidadVenta::Crear($Unidad, $Codigo, $Lote, $Tipo, $Material, $Peso, $Volumen, $Fecha, $Descripcion);

        echo '  <script type="text/javascript">
                Actualizar();
                </script>';
    }
?>
<main class="w3-container w3-center w3-centered w3-card-4" style="padding:128px 16px;">
  <table class="w3-table w3-striped w3-table-all">
    <tr>
        
    </tr>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Nº de lote</th>
        <th>Mas informacion</th>
        <th>Borrar</th>
    </tr>

    <?php
      //Retorno de las categorias
      foreach ($Elementos as $Item) {
          $Codigo = $Item["Codigo"];
          $Nombre = $Item["Nombre"];
          $Marca = $Item["Marca"];
          $Lote = $Item["Lote"];
          # code...
          echo "    <tr>
                        <td>$Codigo</td>
                        <td>$Nombre</td>
                        <td>$Marca</td>
                        <td>$Lote</td>
                        <td><a href='Informes/?ID=$Codigo' class='far fa-file-pdf' style='text-decoration:none' title='Ver informe'></a></td>
                        <td><a href=BorrarUV.php?ID=$Codigo&Producto=$Producto class='fa fa-trash' style='text-decoration:none' title='Borrar elemento'></td>
                    </tr>";
      }
      ?>
  </table>
</main>
  <br>
    <br>
    <div class="w3-container w3-light-grey">
    <?php
        if(isset($_GET["Agregar"]))
        {
    ?>
    <div class="w3-container">
        <br>
        <form method="post" action="UnidadVenta.php">
            <label>Código de la unidad</label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el codigo de la unidad" name="Unidad" autofocus required>
            <label>Código del producto</label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el codigo de producto" name="Codigo" autofocus required>
            <label>Nº del lote</label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el Nº del lote" name="Lote" required>
            <label>Tipo de envase</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el tipo de envase" name="Tipo" required>
            <label>Material del envase</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese el material del envase" name="Material" required>
            <label>Peso</label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el peso del producto" name="Peso" required>
            <label>Volumen</label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese el volumen del producto (Opcional)" name="Volumen">
            <label>Fecha de retiro</label>
            <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="Ingrese la fecha de retiro (Opcional)" name="Fecha">
            <label>Descripcion adicional</label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="" name="Descripcion">
            <?php
                echo "<input type=text hidden name='Producto' value='$Producto'>";         
            ?>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="Confirmar">Confirmar</button>

            
        </form>
        <form method="get" action="UnidadVenta.php">
            <?php
                echo "<input type=text hidden name='Producto' value='$Producto'>";         
            ?>
            <button href="UnidadVenta.php" class="w3-button w3-block w3-red w3-section w3-padding" type="submit" >Cancelar</button>
        </form>

        <br>
    </div>
    <?php
        }
        else
        {
    ?>
    <form class="w3-container" method="get" style="text-align:left;" action="UnidadVenta.php">
          <div class="w3-section">   
            <?php
                echo "<input type=text hidden name='Producto' value='$Producto'>";         
            ?>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="Agregar">Agregar nueva unidad</button>
            <button class="w3-button w3-block w3-orange w3-section w3-padding" type="submit" name="Modificar">Modificar unidades</button>
          </div>
  </form>
    <?php
        }
    ?>
  </div>
</main>