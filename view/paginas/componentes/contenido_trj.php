  <?php

  require_once('controller/op/listar.php');
  $cta = $_GET["cta"];
  $ctait = $_GET["ctait"];
  $saldo = $_GET["saldo"];
  ?>

  <body>
    <div class="Header__bienvenida">
      <div class="Informacion__cuenta">
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
      <div class="Informacion__cuenta">
        <div class="Informacion__item">
          <a href=""><img src='view/img/trans.png' alt='Transferencias' title='Transferencias' width='50' height='50'></img></a>
          <span>Transferencias</span>
        </div>
        <div class="Informacion__item">
          <a href=""><img src='view/img/factura.png' alt='Pagos de Servicio' title='Pagos de Servicio' width='50' height='50'></img></a>
          <span>Pagos de Servicio</span>
        </div>
      </div>
    </div>
    <main class="Main l-container">

      <table id="Table" class="Table">
        <thead class="Table__head">
          <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Monto</th>
            <th>Tipo de Operación</th>
          </tr>
        </thead>
        <tbody class="Table__body">
          <?php

          listarOP($cta, $ctait);

          ?>
        </tbody>
      </table>
    </main>
  </body>