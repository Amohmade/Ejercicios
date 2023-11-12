
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web/style.css">
    <title>Miniforo</title>
</head>
<body>
    <h1><img src="web/logo.png" alt=""><br>MINIFORO version 1</h1>
        <?php
    // PRIMERA APROXIMACIÓN AL MODELO VISTA CONTROLADOR.
    // Funciones auxiliars Ej- usuarioOK
    include_once 'app/funciones.php';

    if ( !isset($_REQUEST['orden']) ){
        include_once 'app/entrada.php';
    }
    else {
        switch ($_REQUEST['orden']){
            
            case "Entrar":
                // Chequear usuario
                if ( isset($_REQUEST['nombre']) && isset($_REQUEST['contraseña']) &&
                    usuarioOK($_REQUEST['nombre'], $_REQUEST['contraseña'] )) {
                echo " Bienvenido <b>".$_REQUEST['nombre']."</b><br>";
                include_once  'app/comentario.html';
                }
                else {
                    include_once 'app/entrada.php';
                    echo " <br> Usuario no válido </br>";
                }
                break;
                
            case "Nueva opinión":
                echo " Nueva opinión <br>";
                include_once  'app/comentario.html';
                break;
            case "Detalles": // Mensaje y detalles
                echo "Detalles de su opinión";
                include_once 'app/comentariorelleno.php';
                include_once 'app/detalles.php';
                break;
            case "Terminar": // Formulario inicial
                include_once 'app/entrada.php';
        }

    }
    ?>
</body>
</html>
<style>
    img{
        width:100px;
    }
</style>