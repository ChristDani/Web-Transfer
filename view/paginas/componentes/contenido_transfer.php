<?php $idtpop=2;?>
<main class="Main l-container">
      <div class="form__container form__perfil">
        <h2 class="form__container__title">Transferencias</h2>
        <?php echo"<form
          action='controller/op/agregar.php?id=".$id."&idtpop=".$idtpop."'
          method='post'
          class='form__container'
        >";?>
          <label for="tarjetas">
            Seleccione una cuenta
            <select name="origen" id="tarjetas">
              <option value="">---- ---- ----</option>
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
          
          <input
            class="form__container__input"
            type="text"
            name="destino"
            id="destino"
            placeholder="Cuenta de destino"
            maxlength="20" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
          />
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
            required
          />
          <input
            class="form__container__button"
            type="submit"
            value="Hacer transferencia"
          />
        </form>
      </div>
    </main>