  
  <?php 

    require_once('controller/op/listar.php');
    $cta=$_GET["cta"];
    $ctait=$_GET["ctait"];
    ?>
  
  <body>
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

                    listarOP($cta,$ctait);

                ?>
            </tbody>
        </table>
    </main>
  </body>
