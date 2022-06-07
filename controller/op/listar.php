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

    function listarOpCT()
    {

        $consultas=new op();

        $filas=$consultas->listarOperacionC();


        if ($filas != null) 
        {

            foreach ($filas as $fila) 
            {
                if ($fila[5]==="1") {
                    $mn="S/";
                }
                else {
                    $mn="<i class='fa-solid fa-dollar-sign'></i>";
                }
                $f=$fila[0]-> format('d/m/Y H:i:s');
                $cto=$fila[1];
                $ctd=$fila[2];
                $m= number_format($fila[3],2);
                $to=$fila[4];
            }
            echo "<p>Cuenta de Origen: <span>$cto</span></p>";
            echo "<p>Cuenta de Destino: <span>$ctd</span></p>";
            echo "<p>Tipo de Operación: <span>$to</span></p>";
            echo "<p>Monto: <span>$mn $m</span></p>";
            echo "<p>Fecha de Operación: <span>$f</span></p>";
        }

    }

    function listarOpCP()
    {

        $consultas=new op();

        $filas=$consultas->listarOperacionC();


        if ($filas != null) 
        {

            foreach ($filas as $fila) 
            {
                if ($fila[5]==="1") {
                    $mn="S/";
                }
                else {
                    $mn="<i class='fa-solid fa-dollar-sign'></i>";
                }
                $f=$fila[0]-> format('d/m/Y H:i:s');
                $cto=$fila[1];
                $ctd=$fila[2];
                $m= number_format($fila[3],2);
                $to=$fila[4];
            }
            echo "<p>Cuenta de Origen: <span>$cto</span></p>";
            echo "<p>Servicio: <span>$ctd</span></p>";
            echo "<p>Tipo de Operación: <span>$to</span></p>";
            echo "<p>Monto: <span>$mn $m</span></p>";
            echo "<p>Fecha de Operación: <span>$f</span></p>";
        }

    }

?>