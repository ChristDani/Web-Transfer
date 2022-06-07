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
        $sql="SELECT o.idop,o.fechaOp,o.origen,o.destino,o.monto,t.nombre,o.idtpmn FROM operaciones as o inner join tipo_op as t on t.idtpop=o.idtpop where o.origen='$cta' or o.origen='$ctait' or o.destino='$cta' or o.destino='$ctait'";
        $rscat=sqlsrv_query($conexion,$sql);
        while($row=sqlsrv_fetch_array($rscat))
        {
            $filas[]=$row;
        }
        $conexion=$model->desconectar();
        return $filas;
        
    }

    public function listarOperacionC()
    {

        $filas=null;
        $model=new conexion();
        $conexion=$model->conectar();
        $sql="SELECT top 1 o.fechaOp,o.origen,o.destino,o.monto,t.nombre,o.idtpmn FROM operaciones as o inner join tipo_op as t on t.idtpop=o.idtpop order by idop desc";
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