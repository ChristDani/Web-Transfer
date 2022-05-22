<main class="Main--register">
        <div class="Imagen"></div>
        <div class="form__container">
            <h2 class="form__container__title">Registro  de Usuario</h2>
            <form action="controller/usuario/agregar.php" method="post" class="form__container">

                <label for="nombre">
                    <span id="subir">Ingresa tu Nombre</span>
                    <input class="form__container__input" type="text" name="nombre" id="nombre" required>
                </label>

                <label for="apellido">
                    <span id="subir">Ingresa tu Apellido</span>
                    <input class="form__container__input" type="text" name="apellido" id="apellido" required>
                </label>

                <label for="dni">
                    <span id="subir">Ingresa tu DNI</span>
                    <input class="form__container__input" type="text" name="dni" id="dni" required>
                </label>

                <label for="sexo">
                    <span id="subir">Ingresa tu Sexo</span>
                    <select name="sexo" required>
                        <option></option>
                        <option id="sexo" value="masculino">masculino</option>
                        <option id="sexo" value="femenino">femenino</option>
                    </select>
                </label>

                <label for="correo">
                    <span id="subir">Ingresa tu Correo</span>
                    <input class="form__container__input" type="text" name="correo" id="correo" required>
                </label>

                <label for="clave">
                    <span id="subir">Ingresa tu Clave</span>
                    <input class="form__container__input" type="password" name="clave" id="clave" maxlength="6" required>
                </label>

                <input class="form__container__button" type="submit" value="Registrar">
                <small>¿Ya tienes una cuenta? <a href="index.php?pagina=login" class="form__container__small">Inicia Sesion</a></small>
            </form>
        </div>
</main>