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
                $fecha=$fila[6]-> format('d/m/Y');
                $monto= number_format($fila[5],2);
                echo "<tr>";
                echo "<td>$fila[0]</td>";
                echo "<td>$fecha</td>";
                echo "<td>$fila[2]</td>";
                echo "<td>$fila[3]</td>";
                echo "<td>S/.$monto</td>";
                echo "<td>$fila[1]</td>";
                echo "</tr>";
                
            }
        }

    }

?>