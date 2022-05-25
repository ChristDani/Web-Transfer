<?php
    require_once("../../model/usuario.php");
	
    $id=$_POST['id'];
    $correo=$_POST['correo'];
    $telefono=$_POST[''];
    $clave=$_POST['clave'];
    
    $consultas=new user();
    $consultas->actualizarUsuario($id,$correo,$telefono,$clave);

	header("location:../../view/paginas/home.php");
?>