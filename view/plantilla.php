<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Transfer</title>
	<link rel="icon" href="view/img/banco.png">
    <link rel="stylesheet" href="view/css/styles.css">
    <link
      rel="stylesheet"
      href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"
    />
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
        elseif ($_GET["pagina"]==="home") 
        {
            if (session_start()) 
            {
                include_once"paginas/home.php";
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
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#myTable").DataTable();
      });
    </script>

</body>
</html>