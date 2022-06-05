<?php

if ($lista!=null) {
    

foreach($lista as $columna) 
{

    $nombre=$columna[0];
    $apellido=$columna[1];
	$dni = $columna[2];
    $sexo = $columna[3];
    $correo = $columna[4];
    $telefono = $columna[5];
	$clave = $columna[6];
		

?>

<main class="Main l-container">
        <div class="Perfil">
          <h2 class="Perfil__title">Mi perfil</h2>
          <div class="Perfil__container">
            <p>Nombre: <span><?php echo $nombre; ?></span></p>
            <p>Apellidos: <span><?php echo $apellido; ?></span></p>
            <p>DNI: <span><?php echo $dni; ?></span></p>
            <p>Sexo: <span><?php echo $sexo; ?></span></p>
            <p>Correo: <span><?php echo $correo; ?></span></p>
            <p>Telefono: <span><?php echo $telefono; ?></span></p>
            <?php echo "<a href='index.php?pagina=perfilup&id=".$id."' class='form__container__button'>Actualizar Datos</a>";?>
          </div>
        </div>
    </main>
<?php }}?>
