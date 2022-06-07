<?php  

    require_once("model/tarjeta.php");

    function listarTarj($id)
    {

        $consultas=new tarjeta();

        $filas=$consultas->listarTarjeta($id);


        if ($filas != null) 
        {

            echo '<div class="Tarjeta__nuevo">';
            echo "<a href='index.php?pagina=gnrTarjeta&id=".$id."&bono=no' alt='Generar Tarjeta' title='Generar Tarjeta'>";
            echo "<p class='Tarjeta__datalle'>Agregar nueva tarjeta</p>";
            echo "</a>"; 
            echo "</div>";

            foreach ($filas as $fila) 
            {
                if ($fila[4]==="1") {
                    $mn="S/";
                }
                else {
                    $mn="<i class='fa-solid fa-dollar-sign'></i>";
                }
                $saldo= number_format($fila[7],2);
                echo '<div class="Tarjeta">';
                echo "<a href='index.php?pagina=tarjeta&cta=".$fila[5]."&id=".$fila[1]."' alt='Cuenta=$fila[5]' title='Cuenta=$fila[5]'>";
                echo "<p class='Tarjeta__datalle'>$fila[5]</p>";
                echo "<p class='Tarjeta__datalle'>$mn $saldo</p>";
                echo "</a>"; 
                echo "</div>";                
            }
        }
        else 
        {
            echo '<div class="Tarjeta__nuevo">';
            echo "<a href='index.php?pagina=gnrTarjeta&id=".$id."&bono=si' alt='Generar Tarjeta' title='Generar Tarjeta'>";
            echo "<p class='Tarjeta__datalle'>Agregar nueva tarjeta</p>";
            echo "</a>"; 
            echo "</div>";
        }

    }

?>