<?php
    require_once("../../model/operacion.php");

	$id=$_GET["id"];
    $idtpop=$_GET['idtpop'];

    $origen=$_POST['origen'];
    $destino=$_POST['destino'];
    $idtpmn=$_POST['idtpmn'];
    $monto=$_POST['monto'];
    
    $consultas=new op();
    $consultas->insertarOperacion($idtpop,$origen,$destino,$idtpmn,$monto);

    if ($idtpop==="2") {
        header("location:../../index.php?pagina=cT&id=$id");
    }else {
        header("location:../../index.php?pagina=cP&id=$id");
    }
	
?>