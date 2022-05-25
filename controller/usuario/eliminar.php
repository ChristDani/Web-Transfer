<?php
    require_once("../../model/usuario.php");
	
    $id=$_POST['id'];
    
    $consultas=new user();
    $consultas->eliminarUsuario($id);

	header("location:../../view/paginas/home.php");
?>