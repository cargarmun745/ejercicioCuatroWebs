<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web2</title>
</head>
<body>
    <h2>Registro</h2>
    <form method="post" action="web3.php">
    
        <input type="hidden" name="usuario" value="<?php 
                echo $_POST["usuario"];
            ?>"
        
        <input type="hidden" name="contraseña1" value="<?php 
                echo $_POST["contraseña1"];
            ?>"
        
        <input type="hidden" name="contraseña2" value="<?php 
                echo $_POST["contraseña2"];
            ?>"
        
        Introduce nombre: <input type="text" name="nombre"/> <br>
        Introduce apellidos: <input type="text" name="apellidos"/> <br>
        Introduce correo electrónico: <input type="text" name="correo"/> <br>
        <input type="submit"/> <br>
    </form>
</body>
</html>
