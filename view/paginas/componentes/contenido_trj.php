
    <main class="Main l-container Table">

      <table id="Table" class="Table w-100">
        <thead class="Table__head">
          <tr>
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