<?php
    require_once("../../model/operacion.php");
	
    $idtpop=$_POST[''];
    $origen=$_POST[''];
    $destino=$_POST[''];
    $idtpmn=$_POST[''];
    $monto=$_POST[''];
    
    $consultas=new op();
    $consultas->insertarOperacion($idtpop,$origen,$destino,$idtpmn,$monto);

	header("location:../../view/paginas/home.php");
?>