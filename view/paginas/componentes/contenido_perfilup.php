
<?php

if ($lista!=null) {
    

foreach($lista as $columna) 
{

    $nombre=$columna[0];
    $apellido=$columna[1];
	$dni = $columna[2];
    $sexo = $columna[3];
    $correo = $columna[4];
    $telefono = $columna[5];
	$clave = $columna[6];
		

?>
<main class="Main l-container">
      <div class="form__container form__perfil">
        <h2 class="form__container__title">Datos de Usuario</h2>
        <?php echo '<form
          action="controller/usuario/actualizar.php?id='.$id.'"
          method="post"
          class="form__container"
        >';?>

          <label for="correo">
            <span id="subir">Correo:</span>
            <input
              class="form__container__input"
              type="email"
              name="correo"
              id="correo"
              required
              title="el formato de correo@gmail.com"
              pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"
              value="<?php echo $correo; ?>"
            />
          </label>

          <label for="telefono">
            <span id="subir">Telefono:</span>
            <input
              class="form__container__input"
              type="tel"
              name="telefono"
              id="telefono"
              value="<?php echo $telefono; ?>"
            />
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
              value="<?php echo $clave; ?>"
            />
          </label>

          <input
            class="form__container__button"
            type="submit"
            value="Actualizar Datos"
          />
        </form>
      </div>
    </main>
    <?php }}?>
