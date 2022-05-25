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
    
    public function listarTarjeta()
    {


        
    }
    
}

?>