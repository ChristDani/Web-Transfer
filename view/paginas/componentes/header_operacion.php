
<?php 
$id=$_GET["id"];
?>

<header class="Header Header--home">
    <div class="l-container--row">
        <h1 class="Header__logo">Logo</h1>
        <div class="Header__menu" id="btn_nav">
        <i class="fa-solid fa-bars"></i>
        </div>
        <nav class="Nav" id="menu">
        <?php echo "<a href='index.php?pagina=home&id=".$id."' class='Nav__link'>Inicio</a>"; ?>
        <a href='#' class="Nav__link">Operaciones</a>
        <?php echo "<a href='index.php?pagina=perfil&id=".$id."' class='Nav__link'>Mi Perfil</a>"; ?>
        <a href='controller/acceso/logout.php' class="Nav__link">Cerrar Session</a>
        </nav>
    </div>
</header>