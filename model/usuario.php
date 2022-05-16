<?php
require_once "conexion.php";

class user
{

    public function buscarUser($dni)
    {

        $filas=null;
        $model=new conexion();
		$conexion=$model->conectar();
        $sql="select * from usuario where dni='".$dni."'";
        $rs=sqlsrv_query($conexion,$sql);

        while($row=sqlsrv_fetch_array($rs))
		{
            $filas[]=$row;
        }
        
        $conexion=$model->desconectar();
        return $filas;
        
    }

    public function insertarUsuario($nombre,$apellido,$dni,$sexo,$correo,$clave)
    {

        $model=new conexion();
		$conexion=$model->conectar();
        $sql="declare @codigo char(9); set @codigo = dbo.Geniduser(); 
        exec sp_insertar_usuario @codigo,'$nombre','$apellido','$dni','$sexo','$correo','$clave'";

		$rs=sqlsrv_query($conexion,$sql);

		$conexion=$model->desconectar();
        return "Usuario Registrado Satisfactoriamente...";

    }

    public function actualizarUsuario($id,$correo,$telefono,$clave)
    {

        $model=new conexion();
		$conexion=$model->conectar();
        $sql="exec sp_actualizar_usuario '$id','$correo','$telefono','$clave'";

        $rs=sqlsrv_query($conexion,$sql);

		$conexion=$model->desconectar();
        return "Usuario Actualizado Satisfactoriamente...";

    }

    public function eliminarUsuario($id)
    {

        $model=new conexion();
		$conexion=$model->conectar();
        $sql="DELETE from usuario where iduser='$id'";

        $rs=sqlsrv_query($conexion,$sql);

		$conexion=$model->desconectar();
        return "Usuario Actualizado Satisfactoriamente...";

    }

}

?>