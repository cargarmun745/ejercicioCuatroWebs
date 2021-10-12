<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web3</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="post" action="web4.php">
        
        <input type="hidden" name="usuario" value="<?php 
            echo $_POST["usuario"];
        ?>" />
        <input type="hidden" name="contraseña1" value="<?php 
            echo $_POST["contraseña1"];
        ?>" />
        <input type="hidden" name="contraseña2" value="<?php 
            echo $_POST["contraseña2"];
        ?>" />
        <input type="hidden" name="nombre" value="<?php 
            echo $_POST["nombre"];
        ?>"/>
        <input type="hidden" name="apellidos" value="<?php 
            echo $_POST["apellidos"];
        ?>"/>
        <input type="hidden" name="correo" value="<?php 
            echo $_POST["correo"];
        ?>"/>
        <select name="marcas[]" multiple size="5">
            <option value="mercedes">Mercedes</option>
            <option value="volkswagen">Volkswagen</option>
            <option value="renault">Renault</option>
            <option value="hyundai">Hyundai</option>
            <option value="bmw">BMW</option>
        </select><br>
        <input type="submit"/> 
    </form>
</body>
</html>
