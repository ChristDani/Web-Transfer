<?php
    require_once("../../model/usuario.php");
	
    $id=$_GET['id'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $clave=$_POST['clave'];
    
    $consultas=new user();
    $consultas->actualizarUsuario($id,$correo,$telefono,$clave);

	header("location:../../index.php?pagina=home&id=$id");
?>