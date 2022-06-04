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
        <div class="Perfil">
          <h2 class="Perfil__title">Mi perfil</h2>
          <div class="Perfil__container">
            <p>Nombre: <span><?php echo $nombre; ?></span></p>
            <p>Apellidos: <span><?php echo $apellido; ?></span></p>
            <p>DNI: <span><?php echo $dni; ?></span></p>
            <p>Sexo: <span><?php echo $sexo; ?></span></p>
            <p>Correo: <span><?php echo $correo; ?></span></p>
            <p>Telefono: <span><?php echo $telefono; ?></span></p>
            <a href="actualizar_perfil.html" class="form__container__button">Actualizar perfil</a>
          </div>
        </div>
    </main>


    
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
