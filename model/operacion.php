<?php 
require_once "conexion.php";

class op
{

    public function insertarOperacion($idtpop,$origen,$destino,$idtpmn,$monto)
    {

        $model=new conexion();
		$conexion=$model->conectar();
        $sql="declare @codigo char(9); set @codigo = dbo.Genidop();
        exec sp_insertar_operacion @codigo,'$idtpop','$origen','$destino','$idtpmn','$monto'";

		$rs=sqlsrv_query($conexion,$sql);

		$conexion=$model->desconectar();
        return "Operación Registrada Satisfactoriamente...";

    }
    
    public function listarOperacion($cta,$ctait)
    {

        $filas=null;
        $model=new conexion();
        $conexion=$model->conectar();
        $sql="SELECT * FROM operaciones where origen='$cta' or origen='$ctait'";
        $rscat=sqlsrv_query($conexion,$sql);
        while($row=sqlsrv_fetch_array($rscat))
        {
            $filas[]=$row;
        }
        $conexion=$model->desconectar();
        return $filas;
        
    }

}

?>