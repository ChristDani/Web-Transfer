<?php  

    require_once("model/operacion.php");

    function listarOp($cta,$ctait)
    {

        $consultas=new op();

        $filas=$consultas->listarOperacion($cta,$ctait);


        if ($filas != null) 
        {

            foreach ($filas as $fila) 
            {
                if ($fila[6]==="1") {
                    $mn="S/";
                }
                else {
                    $mn="<i class='fa-solid fa-dollar-sign'></i>";
                }
                echo "<tr>";
                $fecha=$fila[1]-> format('d/m/Y');
                echo "<td>$fecha</td>";
                echo "<td>$fila[2]</td>";
                echo "<td>$fila[3]</td>";
                $monto= number_format($fila[4],2);
                echo "<td>$mn $monto</td>";
                echo "<td>$fila[5]</td>";
                echo "</tr>";
                
            }
        }

    }

?>