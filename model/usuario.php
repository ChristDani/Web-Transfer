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
        $sql="declare @codigo char(9); set @codigo = dbo.Geniduser(); insert into usuario(iduser,nombre,apellido,dni,sexo,correo,clave) values(@codigo,'$nombre','$apellido','$dni','$sexo','$correo','$clave')";

		$rs=sqlsrv_query($conexion,$sql);

        

    }

}

?>