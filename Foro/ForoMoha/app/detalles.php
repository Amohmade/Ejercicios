<?php
$tema=$_REQUEST["tema"];
$comentario=$_REQUEST["comentario"];

$longitud=strlen($comentario);

$arrcomentario=explode(" ",$comentario);
$npalabras=count($arrcomentario);

$letras=count_chars($comentario,1);
arsort($letras);
foreach($letras as $l => $c){
    $cuenta[] = $c;
    $letra[] = $l;
};
$letramasrep=chr($letra[0]);

$palabramasrep=array_count_values($arrcomentario);
arsort($palabramasrep);
$palabra=key($palabramasrep); 

?>

<table>
    <th>Detalles</th>
    <tr>
        <td>Longitud: </td><td><?=$longitud?></td>
    </tr>
    <tr>
        <td>Nº de palabras:</td><td><?=$npalabras?></td>
    </tr>
    <tr>
        <td>Letra + repetida</td><td><?=$letramasrep?></td>
    </tr>
    <tr>
        <td>Palabra + repetida</td><td><?=$palabra?></td>
    </tr>
</table>

