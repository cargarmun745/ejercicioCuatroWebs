<h2>Registro</h2></br>
<?php
    require('util.php');
    
    enableErrors();
    ?>
    <fieldset>
        <legend>Usuario y contraseña</legend><br>
        <?php echo str_repeat('&nbsp', 5) . 'El usuario introducido es:' . str_repeat('&nbsp', 2) . $_POST["usuario"];?></br></br>
        <?php echo str_repeat('&nbsp', 5) . 'La contraseña primera introducido es:' . str_repeat('&nbsp', 2) . $_POST["contraseña1"];?></br></br>
        <?php echo str_repeat('&nbsp', 5) . 'La contraseña segunda introducido es:' . str_repeat('&nbsp', 2) . $_POST["contraseña2"];?></br></br>
        <?php echo str_repeat('&nbsp', 5);
        iguales($_POST["contraseña1"], $_POST["contraseña2"]);?></br></br>
    </fieldset></br>
    <fieldset>
        <legend>Nombre, apellidos y correo</legend><br>
        <?php echo str_repeat('&nbsp', 5) . 'El nombre introducido es:' . str_repeat('&nbsp', 2) . $_POST["nombre"];?></br></br>
        <?php echo str_repeat('&nbsp', 5) . 'Los apellidos introducidas son:' . str_repeat('&nbsp', 2) . $_POST["apellidos"];?></br></br>
        <?php echo str_repeat('&nbsp', 5) . 'El correo introducido es:' . str_repeat('&nbsp', 2) . $_POST["correo"];?></br></br>
    </fieldset></br>
    <fieldset>
        <legend>Lista de coches</legend><br>
        <?php echo str_repeat('&nbsp', 5) . 'Las marcas introducidas son:' . str_repeat('&nbsp', 2);
        if(!validar('marcas', $_POST) == null){
            echo prettyVardump($_POST["marcas"]);
        } ?></br></br>
    </fieldset>
