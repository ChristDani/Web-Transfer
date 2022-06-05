<?php
    require_once("../../model/tarjeta.php");
	
    $id=$_GET['id'];
    $idtpct=$_POST['idtpct'];
    $idtpmn=$_POST['idtpmn'];
    $clave=$_POST['clave'];
    
    $consultas=new tarjeta();
    $consultas->insertarTarjeta($id,$clave,$idtpct,$idtpmn);

	header("location:../../index.php?pagina=home&id=$id");
?>