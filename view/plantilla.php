<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Transfer</title>
	  <link rel="icon" href="view/img/banco.png">
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"
    />
    <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css"
    />
    <link rel="stylesheet" href="view/css/styles.css">
    <script
      src="https://kit.fontawesome.com/00ec2580a1.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <?php
    if (isset($_GET["pagina"])) 
    {
    
        if($_GET["pagina"]==="registro")
        {

            include_once"paginas/registro.php";

        }
        elseif ($_GET["pagina"]==="login") 
        {
            include_once"paginas/login.php";
        }

        elseif (session_start()) 
        {
            if ($_GET["pagina"]==="home") 
            {
                include_once"paginas/home.php";
            }
            elseif ($_GET["pagina"]==="tarjeta") 
            {
              include_once"paginas/tarjeta.php";
            }
            elseif ($_GET["pagina"]==="gnrTarjeta") 
            {
              include_once"paginas/gnrTarjeta.php";
            }
            elseif ($_GET["pagina"]==="perfil") 
            {
              include_once"paginas/perfil.php";
            }
            elseif ($_GET["pagina"]==="perfilup") 
            {
              include_once"paginas/update_perfil.php";
            }
            elseif ($_GET["pagina"]==="transaccion") 
            {
              include_once"paginas/transaccion.php";
            }
            elseif ($_GET["pagina"]==="pagos") 
            {
              include_once"paginas/pagos.php";
            }
        }
        
    }
    else
    {

        include_once"paginas/login.php";

    }
        ?>

<script src="view/js/index.js"></script>
<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.6.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"
    ></script>

</body>
</html>