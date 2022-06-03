<?php

if ($lista!=null) {
    

foreach($lista as $columna) 
{

    $nombre=$columna[1];
    $apellido=$columna[2];
	$dni = $columna[3];
    $sexo = $columna[4];
    $correo = $columna[5];
    $telefono = $columna[6];
	$clave = $columna[7];
		

?>
    <main class="Main l-container">
      <div class="form__container form__perfil">
        <h2 class="form__container__title">Datos de Usuario</h2>
        <form
          action="controller/usuario/agregar.php"
          method="post"
          class="form__container"
        >
          <label for="nombre">
            <span id="subir">Nombre:</span>
            <input
              class="form__container__input"
              type="text"
              name="nombre"
              id="nombre"
              value="<?php echo $nombre; ?>"
            />
          </label>

          <label for="apellido">
            <span id="subir">Apellido:</span>
            <input
              class="form__container__input"
              type="text"
              name="apellido"
              id="apellido"
              value="<?php echo $apellido; ?>"
            />
          </label>

          <label for="dni">
            <span id="subir">DNI:</span>
            <input
              class="form__container__input"
              type="text"
              name="dni"
              id="dni"
              value="<?php echo $dni; ?>"
            />
          </label>

          <label for="sexo">
            <span id="subir">Sexo:</span>
            <select name="sexo" required class="form__container__input" value="<?php echo $sexo; ?>">
              <option id="sexo" value="masculino">masculino</option>
              <option id="sexo" value="femenino">femenino</option>
            </select>
          </label>

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
