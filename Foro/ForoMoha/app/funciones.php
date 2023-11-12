<?php

function usuarioOK($nombre,$contraseña){
    $nombre=htmlspecialchars($_REQUEST['nombre']);
    $contraseña=htmlspecialchars($_REQUEST['contraseña']);
    if(isset($nombre)&&isset($contraseña)){
        if($nombre==strrev($contraseña)){
            return true;
        }else{
            return false;
        };
    };
}

?>