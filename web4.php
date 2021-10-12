<h2>Registro</h2>
<?php
    require('util.php');

    enableErrors();

    echo 'El usuario introducido es:' . $_POST["usuario"];?></br>
    <?php echo 'La contraseña primera introducido es:' . $_POST["contraseña1"];?></br>
    <?php echo 'La contraseña segunda introducido es:' . $_POST["contraseña2"];?></br>
    <?php iguales($_POST["contraseña1"], $_POST["contraseña2"]);?></br>
    <?php echo 'El nombre introducido es:' . $_POST["nombre"];?></br>
    <?php echo 'Los apellidos introducidas son:' . $_POST["apellidos"];?></br>
    <?php echo 'El correo introducido es:' . $_POST["correo"];?></br>
    <?php echo 'Las marcas introducidas son:' . prettyVardump($_POST["marcas"]);
?>
