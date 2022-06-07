<?php 
require_once "conexion.php";

class tarjeta
{

    public function insertarTarjeta($id,$clave,$idtpct,$idtpmn)
    {

        $model=new conexion();
		$conexion=$model->conectar();
        $sql="declare @nmrtrj char(16); set @nmrtrj = dbo.Gennmrtrj();
        declare @nmrcta char(14); set @nmrcta = dbo.Gennmrcta();
        declare @nmrctait char(20); set @nmrctait = dbo.Gennmrctait();
        exec sp_generarTrj @nmrtrj,'$id','$clave','$idtpct','$idtpmn',@nmrcta,@nmrctait";

		$rs=sqlsrv_query($conexion,$sql);

		$conexion=$model->desconectar();
        return "Tarjeta Registrada Satisfactoriamente...";

    }

    public function insertarTarjetaBn($id,$clave,$idtpct,$idtpmn,$monto)
    {

        $model=new conexion();
		$conexion=$model->conectar();
        $sql="declare @nmrtrj char(16); set @nmrtrj = dbo.Gennmrtrj();
        declare @nmrcta char(14); set @nmrcta = dbo.Gennmrcta();
        declare @nmrctait char(20); set @nmrctait = dbo.Gennmrctait();
        exec sp_trjBono @nmrtrj,'$id','$clave','$idtpct','$idtpmn',@nmrcta,@nmrctait,'$monto'";

		$rs=sqlsrv_query($conexion,$sql);

		$conexion=$model->desconectar();
        return "Tarjeta Registrada Satisfactoriamente...";

    }
    
    public function listarTarjeta($id)
    {

        $filas=null;
        $model=new conexion();
        $conexion=$model->conectar();
        $sql="SELECT * FROM tarjeta WHERE iduser='$id'";
        $rscat=sqlsrv_query($conexion,$sql);
        while($row=sqlsrv_fetch_array($rscat))
        {
            $filas[]=$row;
        }
        $conexion=$model->desconectar();
        return $filas;
        
    }

    public function listarTarjetaCt($ct)
    {

        $filas=null;
        $model=new conexion();
        $conexion=$model->conectar();
        $sql="SELECT nmrcta,nmrctait,monto,idtpmn FROM tarjeta WHERE nmrcta='$ct'";
        $rscat=sqlsrv_query($conexion,$sql);
        while($row=sqlsrv_fetch_array($rscat))
        {
            $filas[]=$row;
        }
        $conexion=$model->desconectar();
        return $filas;
        
    }

    public function listarTarjetaD($id)
    {

        $filas=null;
        $model=new conexion();
        $conexion=$model->conectar();
        $sql="select top 1 nmrcta,nmrctait,monto,fechaRgTrj,idtpmn from tarjeta where iduser='$id' order by nmrtj desc";
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