<form name='comentario' method="POST">
    Tema <br>
    <input type="text" name="tema" value="<?=$_REQUEST["tema"]?>" placeholder="Introduzca un asunto"><br>
    Comentario: <br>
    <textarea name="comentario" id="" cols="40" rows="5" placeholder="Introduzca su comentario"><?=$_REQUEST["comentario"]?></textarea><br>  
    <input type="submit" name="orden" value="Detalles">
    <input type="submit" name="orden" value="Nueva opinión">
    <input type="submit" name="orden" value="Terminar">
</form>
<style>
    form{
        padding:1em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>