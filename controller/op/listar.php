<?php  

    require_once("model/operacion.php");

    function listarOp(/**$id**/)
    {

        $consultas=new op();

        $filas=$consultas->listarOperacion(/**$id**/);


        if ($filas != null) 
        {


            foreach ($filas as $fila) 
            {
                $fecha=$fila[6]-> format('d/m/Y');
                echo "<tr>";
                echo "<td>$fila[0]</td>";
                echo "<td>$fecha</td>";
                echo "<td>$fila[2]</td>";
                echo "<td>$fila[3]</td>";
                echo "<td>S/.$fila[5]</td>";
                echo "<td>$fila[1]</td>";
                echo "</tr>";
                
            }
        }

    }

?>