<?php

$_SESSION["user"]=null;

require_once("../../model/usuario.php");
	
$dni=$_POST['dni'];
$clave=$_POST['clave'];

$consultas=new user();
$filas2=$consultas->buscarUser($dni);

print_r($filas2);
	
foreach($filas2 as $columna) 
{

	$iduser=$columna[0];
    $tusu=$columna[1];
	$tdni = $columna[3];
	$tclave = $columna[7];
		
}
	
if (($dni=="") || ($clave=="")) 
{

	header("location:../../index.php");

}

elseif(($dni==$tdni) && ($clave == $tclave))
{

	$_SESSION["user"]=$tusu;
	session_start();
	header("location:../../index.php?pagina=home&id=$iduser");

}

else
{
    
	header("location:../../index.php");
	  
}

?>