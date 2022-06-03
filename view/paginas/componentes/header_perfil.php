
<?php  
require_once('model/usuario.php');
$id=$_GET["id"];

$consultas=new user();
$lista=$consultas->listarUser($id);?>

<header class="Header Header--home">
        <div class="l-container--row">
            <h1 class="Header__logo">Logo</h1>
            <div class="Header__menu" id="btn_nav">
                <i class="fa-solid fa-bars"></i>
            </div>
            <nav class="Nav" id="menu">
            <?php echo "<a href='index.php?pagina=perfil&id=".$id."' class='Nav__link'><img src='view/img/perfil.png' alt='Mi Perfil' title='Mi Perfil' width='30' height='30'></a>"; ?>
            <a href='controller/acceso/logout.php' class="Nav__link"><img src='view/img/salida.png' alt='Cerrar Session' title='Cerrar Session' width='30' height='30'></a>
            </nav>
        </div>
    </div>
      </div>
    </header>