
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
        $cta=$fila[0];
        $ctait=$fila[1];
        $saldo= number_format($fila[2],2);
?>

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
      <div class="Header__bienvenida">
        <div class="Informacion__tarjeta">
          <div class="Informacion__item">
            <h4>Saldo:</h4>
            <span><?php echo "S/. $saldo"; ?></span>
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
        <div class="Informacion__tarjeta">
          <div class="Informacion__accion">
            <a href=""
              ><img
                src="view/img/trans.png"
                alt="Transferencias"
                title="Transferencias"
                width="50"
                height="50"
            /></a>
            <span>Transferencias</span>
          </div>
          <div class="Informacion__accion">
            <a href=""
              ><img
                src="view/img/factura.png"
                alt="Pagos de Servicio"
                title="Pagos de Servicio"
                width="50"
                height="50"
            /></a>
            <span>Pagos de Servicio</span>
          </div>
        </div>
      </div>
</header>
<?php }}?>