<?php

class webTransferControlador
{

    static public function validarRegistro()
    {

        if(isset($_POST['nombre']))
        {

            $respuesta=webTransferModelo::validarRegistro($_POST['nombre'],$_POST['apellido'],$_POST['dni'],$_POST['sexo'],$_POST['correo'],$_POST['clave']);
            return $respuesta;

        }

    }

}

?>