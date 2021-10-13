<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require('util.php');
        
        enableErrors();
    ?>
    <h2>Registro</h2>
    <form method="post" action="web3.php">
    
        <?php
            foreach ($_POST as $name => $value) {?>
                <input type="hidden" name="<?php echo $name;?>" value="<?php echo $value;?>"/>
            <?php }
        ?>
            
        <fieldset>
            <legend>Nombre, apellidos y correo</legend><br>
            Introduce nombre: <input type="text" name="nombre"/> <br><br>
            Introduce apellidos: <input type="text" name="apellidos"/> <br><br>
            Introduce correo electrónico: <input type="email" name="correo"/> <br><br>
            <input type="submit"/> <br>
        </fieldset>
    </form>
</body>
</html>
