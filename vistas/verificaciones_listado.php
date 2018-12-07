<main class="w3-container w3-light-grey" style="padding:128px 16px;">
  <table class="w3-table w3-striped w3-table-all">
    <?php 
    if (($ultima_ficha = Verificacion::getUltimaFichaControl($_REQUEST["Lote_Numero_FK"])) != false):?>
    <tr>
      <th>Ficha N°
        <?=$ultima_ficha["Numero"]?> |
        <?=$ultima_ficha["Año"]?> | Semana
        <?=$ultima_ficha["Semana"]?> | Estado Lote
        <?=$ultima_ficha["Estado_Lote"]?>
      </th>
      <th>
        <?=$ultima_ficha["Observaciones_Generales"]?>
      </th>
    </tr>
    <tr>
      <th>Nombre</th>
      <th>Tipo</th>
      <th>Fecha</th>
      <th>Hora</th>
      <th>Resultado</th>
      <th>Cumple</th>
    </tr>
    <?php foreach (Verificacion::getVerificaciones($ultima_ficha["Numero"]) as $verificacion): ?>
    <tr>
      <td>
        <?=$verificacion["Nombre"]?>
      </td>
      <td>
        <?=$verificacion["Tipo"]?>
      </td>
      <td>
        <?=$verificacion["Fecha"]?>
      </td>
      <td>
        <?=$verificacion["Hora"]?>
      </td>
      <td>
        <?=$verificacion["Resultado"]?>
      </td>
      <td>
        <?=$verificacion["Cumple"]?>
      </td>
    </tr>
    <?php endforeach; ?>
    <?php else: ?>
    <tr>
      <th>No se ha producido ninguna Ficha de Control de este Lote</th>
    </tr>
    <tr>
      <td>
        <a href="/tpfinal-basededatos/controladores/verificaciones.php?agregar=" class="w3-button w3-block w3-blue w3-section w3-padding">
          <strong class="white-l">Registrar Verificación</strong>
        </a>
      </td>
    </tr>
    <?php endif;?>
  </table>
</main>