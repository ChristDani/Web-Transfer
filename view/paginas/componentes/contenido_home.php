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

                    listarOP(/**$id**/);

                ?>
            </tbody>
        </table>
    </main>
  </body>
