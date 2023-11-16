<?php

session_start();
$compraRealizada="";

if(isset($_GET["cliente"])){
    $_SESSION["cliente"]=$_GET["cliente"];
    $_SESSION["pedido"]=[];
}
if(!isset($_SESSION["cliente"])){
    require_once "bienvenida.php";
    exit();
}
if(isset($_POST["accion"])){
    if($_POST["accion"]=="Anotar"){
        $fruta=$_POST["fruta"]; 
        $cantidad=$_POST["cantidad"]; 

        if($cantidad>0){
            if(isset($_SESSION["pedido"][$fruta])){
                $_SESSION["pedido"][$fruta]+=$cantidad;
            }else{
                $_SESSION["pedido"][$fruta]=$cantidad;
            }
        }
    }
    if($_POST["accion"]=="Terminar"){
        $compraRealizada=tablaPedido();
        require_once "despedida.php";
        session_destroy();
        exit();
    }
}
function tablaPedido():string{
    $msg="";
    if(count($_SESSION["pedido"])>0){
        $msg.="Este es su pedido: <br>";
        $msg.="<table style='border: 1px solid black;'>";
        foreach($_SESSION["pedido"] as $f=>$c){
            $msg.="<tr><td>$f</td><td>$c</td></tr>";
        }
        $msg.="</table>";
    }
    return $msg;
}
$compraRealizada=tablaPedido();
require_once "compra.php";
?>