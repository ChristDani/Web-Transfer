<main class="Main--register">
    <div class="Imagen"></div>
    <div class="form__container">
        <h2 class="form__container__title">Registro de Usuario</h2>
        <form action="controller/usuario/agregar.php" method="post" class="form__container">

            <label for="nombre">
                <span id="subir">Ingresa tu Nombre</span>
                <input class="form__container__input" type="text" name="nombre" id="nombre" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑáéíóúÁÉÍÓÚ]/g, '').replace(/(\..*)\./g, '$1');"> 
            </label>

            <label for="apellido">
                <span id="subir">Ingresa tu Apellido</span>
                <input class="form__container__input" type="text" name="apellido" id="apellido" required oninput="this.value = this.value.replace(/[^a-zA-ZñÑáéíóúÁÉÍÓÚ]/g, '').replace(/(\..*)\./g, '$1');">
            </label>

            <label for="dni">
                <span id="subir">Ingresa tu DNI</span>
                <input class="form__container__input" type="text" name="dni" id="dni" required maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
            </label>

            <label for="sexo">
                <span id="subir">Ingresa tu Sexo</span>
                <select name="sexo" required>
                    <option selected disabled>--seleccione--</option>
                    <option id="sexo" value="masculino">masculino</option>
                    <option id="sexo" value="femenino">femenino</option>
                </select>
            </label>

            <label for="correo">
                <span id="subir">Ingresa tu Correo</span>
                <input class="form__container__input" type="email" name="correo" id="correo" required title="el formato de correo@gmail.com" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
            </label>

            <label for="clave">
                <span id="subir">Ingresa tu Clave</span>
                <input class="form__container__input" type="password" name="clave" id="clave" maxlength="6" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
            </label>

            <input class="form__container__button" type="submit" value="Registrar">
            <p class="ayuda">¿Ya tienes una cuenta? <a href="index.php?pagina=login" class="form__container__small">Inicie Sesion</a></p>
        </form>
    </div>
</main>