<?php
    require_once("../../model/tarjeta.php");
	
    $id=$_GET['id'];
    $bono=$_GET["bono"];
    $idtpct=$_POST['idtpct'];
    $idtpmn=$_POST['idtpmn'];
    $clave=$_POST['clave'];
    
    if ($bono==="no") 
    {
       
        $consultas=new tarjeta();
        $consultas->insertarTarjeta($id,$clave,$idtpct,$idtpmn);

	    header("location:../../index.php?pagina=cTrj&id=$id");

    }
    elseif ($bono==="si") 
    {
        if ($idtpmn==="2") {
            $monto=50/3.8;
        }else {
            $monto=50;
        }
        $consultas=new tarjeta();
        $consultas->insertarTarjetaBn($id,$clave,$idtpct,$idtpmn,$monto);
        
	    header("location:../../index.php?pagina=cTrj&id=$id");

    }
    
?>