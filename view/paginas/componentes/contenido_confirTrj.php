<main class="Main l-container">
    <div class="Perfil">
        <h2 class="Perfil__title">Detalles de la tarjeta</h2>
        <div class="Perfil__container">
            <?php listarTarjD($id); 
                echo "<a href='index.php?pagina=home&id=".$id."' class='form__container__button'>Ir a Inicio</a>";
            ?>
            
        </div>
    </div>
</main>