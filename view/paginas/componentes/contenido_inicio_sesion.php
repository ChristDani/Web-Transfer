<main class="Main--register">
    <div class="Imagen"></div>
    <div class="form__container">
        <h2 class="form__container__title">Inicio de Sesion</h2>
        <form action="controller/acceso/login.php" method="post" class="form__container">

            <label for="dni">
                <span id="subir">Ingresa tu DNI</span>
                <input class="form__container__input" type="text" name="dni" id="dni" required maxlength="8" oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
            </label>

            <label for="clave">
                <span id="subir">Ingresa tu Clave</span>
                <input class="form__container__input" type="password" name="clave" id="clave" maxlength="6" required oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1');">
            </label>

            <input class="form__container__button" type="submit" value="Entrar">
            <p class="ayuda">¿No tienes una cuenta? <a href="index.php?pagina=registro" class="form__container__small">Registrate</a></p>
        </form>
    </div>
</main>