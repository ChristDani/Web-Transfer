<main class="Main l-container">
      <div class="form__container form__perfil">
        <h2 class="form__container__title">Generar tarjeta</h2>
        <?php echo"<form
          action='controller/tarjeta/agregar.php?id=".$id."&bono=".$bono."'
          method='post'
          class='form__container'
        >";?>
        <label class="form__container__label"
        for="tarjetas">
          Tipo de cuenta
          <select name="idtpct" id="tarjetas">
            <option value="">--- --- ---</option>
            <option value="2">Debito</option>
            <option value="1">Credito</option>
          </select>
        </label>

        <label class="form__container__label"
        for="tarjetas">
          Tipo de moneda
          <select name="idtpmn" id="tarjetas">
            <option value="">--- --- ---</option>
            <option value="2">Dolares</option>
            <option value="1">Soles</option>
          </select>
        </label>

          <label for="clave">
            <span id="subir">Clave:</span>
            <input
              class="form__container__input"
              type="text"
              name="clave"
              id="clave"
              maxlength="6"
              required
              oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');"
            />
          </label>
          <input
            class="form__container__button"
            type="submit"
            value="Generar tarjeta"
          />
        </form>
      </div>
    </main>