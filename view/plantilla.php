<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Transfer</title>
	<link rel="icon" href="view/img/banco.png">
    <link rel="stylesheet" href="view/css/styles.css">
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
            include_once"paginas/home.php";
        }
        
    }
    else
    {

        include_once"paginas/login.php";

    }
        ?>
</body>
</html>