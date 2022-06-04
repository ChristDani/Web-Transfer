<?php  

    require_once("model/tarjeta.php");

    function listarTarj($id)
    {

        $consultas=new tarjeta();

        $filas=$consultas->listarTarjeta($id);


        if ($filas != null) 
        {
            foreach ($filas as $fila) 
            {
                $saldo= number_format($fila[7],2);
                echo '<div class="Tarjeta">';
                echo "<a href='index.php?pagina=tarjeta&cta=".$fila[5]."&id=".$fila[1]."' alt='Cuenta=$fila[5]' title='Cuenta=$fila[5]'>";
                echo "<p class='Tarjeta__datalle'>$fila[5]</p>";
                echo "<p class='Tarjeta__datalle'>S/. $saldo</p>";
                echo "</a>"; 
                echo "</div>";
                
            }
        }
        else 
        {
            echo "no tiene tarjetas";
        }

    }

?>