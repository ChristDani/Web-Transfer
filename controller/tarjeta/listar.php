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
                echo '<div class="Informacion__item">';
                echo "<a href='index.php?pagina=tarjeta&cta=".$fila[5]."&ctait=".$fila[6]."&saldo=".$saldo."' alt='Cuenta=$fila[5]' title='Cuenta=$fila[5]'><table border=1 align='center' width='10%' style='background:#91c1ba;'>";
                echo "<td align='left'>$fila[5]</td>";
                echo "<tr>";
                echo "<td align='right'>$saldo</td>";
                echo "</tr>";
                echo "</table></a>"; 
                echo "</div>";
                
            }
        }
        else 
        {
            echo "no tiene tarjetas";
        }

    }

?>