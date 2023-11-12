<form name='entrada' method="POST">
<table>
<tr>
<td>Nombre:</td><td> <input type="text" name="nombre"
    value="<?=(isset($_REQUEST['nombre']))?$_REQUEST['nombre']:''?>" minlength="8"></td></tr>
<tr>
<td>Contraseña: </td><td><input type="password" name="contraseña"
    value="<?=(isset($_REQUEST['contraseña']))?$_REQUEST['contraseña']:''?>" minlength="8"></td>
</tr>
</table>
<input type="submit" name="orden" value="Entrar">
</form>
<style>
    form{
        padding:1em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
</style>

