
<?php 

require_once('controller/tarjeta/listar.php');
$nm=$_GET["nombre"];
$id=$_GET["id"];
?>

<header class="Header Header--home">
      <div class="l-container--row">
        <h1 class="Header__logo">Logo</h1>
        <div class="Header__menu" id="btn_nav">
          <i class="fa-solid fa-bars"></i>
        </div>
        <nav class="Nav" id="menu">
          <a href='#' class="Nav__link">Inicio</a>
          <a href='#' class="Nav__link">Operaciones</a>
          <?php echo "<a href='index.php?pagina=perfil&id=".$id."' class='Nav__link'>Mi Perfil</a>"; ?>
          <a href='controller/acceso/logout.php' class="Nav__link">Cerrar Session</a>
        </nav>
      </div>
      <div class="Header__bienvenida">
        <div>
          <h2>HOLA <?php echo "! '$nm'";?></h2>
          <h3>¿QUE HAREMOS HOY?</h3>
        </div>
        <div class="Informacion__tarjeta">
        <div class="Informacion__accion">
        <a href=""><img src='view/img/trans.png' alt='Transferencias' title='Transferencias' width='50' height='50'></img></a>
        <span>Transferencias</span>
        </div>
        <div class="Informacion__accion">
        <a href=""><img src='view/img/factura.png' alt='Pagos de Servicio' title='Pagos de Servicio' width='50' height='50'></img></a>
        <span>Pagos de Servicio</span>
        </div>
    </div>
      </div>
    </header>


    
