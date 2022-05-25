<?php
    require_once("../../model/tarjeta.php");
	
    $iduser=$_POST[''];
    $clave=$_POST['clave'];
    $idtpct=$_POST[''];
    $idtpmn=$_POST[''];
    
    $consultas=new tarjeta();
    $consultas->insertarTarjeta($iduser,$clave,$idtpct,$idtpmn);

	header("location:../../view/paginas/home.php");
?>