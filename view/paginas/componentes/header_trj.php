
<?php

$ct = $_GET["cta"];
$id = $_GET["id"];

require_once('controller/op/listar.php');
require_once('model/tarjeta.php');

$consultas=new tarjeta();

$filas=$consultas->listarTarjetaCt($ct);

if ($filas != null) 
    {
      foreach ($filas as $fila) 
      {
        if ($fila[3]==="1") {
            $mn="S/";
        }
        else {
            $mn="$";
        }
        $cta=$fila[0];
        $ctait=$fila[1];
        $saldo= number_format($fila[2],2);
?>

<header class="Header Header--home">
      <div class="l-container--row">
        <h1 class="Header__logo"><img class="logo" src="view/img/logo.PNG"></h1>
        <div class="Header__menu" id="btn_nav">
          <i class="fa-solid fa-bars"></i>
        </div>
        <nav class="Nav" id="menu">
          <ul class="Nav__contenedor">
            <li class="Nav__item">
              <?php echo "<a href='index.php?pagina=home&id=".$id."' class='Nav__link'>Inicio</a>"; ?>
            </li>
            <li class="Nav__item  submenu">
              <a href="" class="Nav__link">Operaciones</a>
              <ul class="Nav__submenu">
                <li class="Nav__subitem">
                  <?php echo "<a class='Nav__sublink' href='index.php?pagina=transaccion&id=".$id."'>Transferencias</a>";?>
                </li>
                <li class="Nav__subitem">
                  <?php echo "<a class='Nav__sublink' href='index.php?pagina=pagos&id=".$id."'>Pagos de Servicio</a>";?>
                </li>
              </ul>
            </li>
            <li class="Nav__item">
              <?php echo "<a href='index.php?pagina=perfil&id=".$id."' class='Nav__link'>Mi Perfil</a>"; ?>
            </li>
            <li class="Nav__item">
              <a href='controller/acceso/logout.php' class="Nav__link">Cerrar Session</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="Header__bienvenida">
        <div class="Informacion__tarjeta">
          <div class="Informacion__item">
            <h4>Saldo:</h4>
            <span><?php echo "$mn $saldo"; ?></span>
          </div>
          <div class="Informacion__item">
            <h4>N° de cuenta:</h4>
            <span><?php echo "$cta"; ?></span>
          </div>
          <div class="Informacion__item">
            <h4>N° de cuenta interbancaria:</h4>
            <span><?php echo "$ctait"; ?></span>
          </div>
        </div>
      </div>
</header>
<?php }}?>