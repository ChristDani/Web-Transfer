<?php $idtpop=1;?>
<main class="Main l-container">
      <div class="form__container form__perfil">
        <h2 class="form__container__title">Pago de servicios</h2>
        <?php echo"<form
          action='controller/op/agregar.php?id=".$id."&idtpop=".$idtpop."'
          method='post'
          class='form__container'
        >";?>
          <label for="tarjetas">
            Seleccione una cuenta
            <select name="origen" id="tarjetas">
              <option value="">--- --- ---</option>
              <?php 
                if ($filas != null) 
                {
                  foreach ($filas as $fila) 
                  {
                    $cta=$fila[5];
                    echo "<option value='$cta'>$cta</option>";
                  }
                }
              ?>
            </select>
          </label>
          
          <label for="tarjetas">
            Seleccione un servicio
            <select name="destino" id="servicios">
              <option value="">--- --- ---</option>
              <option value="Epsel">Epsel</option>
              <option value="Ensa">Ensa</option>
              <option value="Movistar">Movistar</option>
              <option value="Claro">Claro</option>
              <option value="Entel">Entel</option>
              <option value="Bitel">Bitel</option>
              <option value="Senati">Senati</option>
            </select>
          </label>
          <label class="form__container__label"
          for="tarjetas">
            Tipo de moneda
            <select name="idtpmn" id="tarjetas">
              <option value="1">Soles</option>
              <option value="2">Dolares</option>
            </select>
          </label>
          <input
            class="form__container__input"
            type="text"
            name="monto"
            id="monto"
            placeholder="Monto"
          />
          <input
            class="form__container__button"
            type="submit"
            value="Efectuar pago"
          />
        </form>
      </div>
    </main>