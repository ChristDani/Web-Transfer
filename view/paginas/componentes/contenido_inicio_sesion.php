<main class="Main--register">
        <div class="Imagen"></div>
        <div class="form__container">
            <h2 class="form__container__title">Inicio de Sesion</h2>
            <form action="" method="post" class="form__container">

                <label for="dni">
                    <span id="subir">Ingresa tu DNI</span>
                    <input class="form__container__input" type="text" name="dni" id="dni">
                </label>

                <label for="clave">
                    <span id="subir">Ingresa tu Clave</span>
                    <input class="form__container__input" type="password" name="clave" id="clave" maxlength="6">
                </label>

                <input class="form__container__button" type="submit" value="Entrar">
                <small>¿No tienes una cuenta? <a href="index.php?pagina=registro" class="form__container__small">Registrate</a></small>
            </form>
        </div>
</main>