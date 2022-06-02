<?php
    require_once("../../model/usuario.php");
	
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $sexo=$_POST['sexo'];
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    
    $consultas=new user();
    $consultas->insertarUsuario($nombre,$apellido,$dni,$sexo,$correo,$clave);

    $_SESSION["user"]=$nombre;
	session_start();
    $iduser=$consultas->buscarUser($dni);
	header("location:../../index.php?pagina=home&id=$iduser&nombre=$nombre");
?>