<main class="w3-container w3-center" style="padding:128px 16px;">

  <h1 class="w3-margin w3-jumbo titulo-grande">
  <span class="w3-center w3-padding-large w3-jumbo w3-wide w3-animate-opacity titulo-grande "><strong style="font-size:115px;" class=" w3-text-red">SUPERCARO</strong></span>
  </h1>
  <!-- <p class="w3-xlarge">Template by w3.css</p> -->
    <?php if (isset($_SESSION["user"]) == null){?>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Iniciar
    sesion</button>
    <?php }?>
  <div class="w3-container">

    <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

        <div class="w3-center"><br>
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright"
            title="Cerrar ventana">X</span>
          <img src="/tpfinal-basededatos/img/squeaky farms.png" alt="Avatar" style="width:25%" class="w3-circle w3-margin-top">
        </div>

        <form class="w3-container" method="post" action="/tpfinal-basededatos/index.php">
          <div class="w3-section">
            <label><b>DNI del Usuario</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="number" placeholder="Ingrese su DNI" name="dni"
              required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit" name="init">Iniciar sesion</button>
          </div>
        </form>

        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancelar</button>
          
        </div>

      </div>
    </div>
  </div>
</main>