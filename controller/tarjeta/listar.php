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
                
                echo '<div class="Informacion__item">';
                echo "<a href='controller/op/listar.php?cta=".$fila[5]."&ctait=".$fila[6]."'' alt='Cuenta=$fila[5]' title='Cuenta=$fila[5]'><table border=1 align='center' width='10%' style='background:#91c1ba;'>";
                echo "<td align='left'>$fila[5]</td>";
                echo "<tr>";
                echo "<td align='right'>$fila[7]</td>";
                echo "</tr>";
                echo "</table></a>"; 
                echo "</div>";
                
            }
        }

    }

?>