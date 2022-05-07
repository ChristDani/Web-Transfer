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
	header("location:../../view/paginas/home.php");
	// echo "<script>
	// 		if(window.history.replaceState) 
	// 		{
	// 			window.history.replaceState(null, null, window.location.href);
	// 		}

	// 		window.location = 'index.php?pagina=home'

	// 	</script>";

}

else
{
    
	header("location:../../index.php");
	  
}

?>