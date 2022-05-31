<?php 

    require_once('../../controller/tarjeta/listar.php');

?>

<main class="Main--register">
    <div class="logout">
        <a href='../../controller/acceso/logout.php'><img src='../img/salida.png' alt='Cerrar Session' title='Cerrar Session' width='30' height='30'></a>
    </div>
    <div>
        <?php 

            listarTarj();

        ?>
    </div>
</main>