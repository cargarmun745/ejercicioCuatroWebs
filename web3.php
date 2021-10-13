<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        require('util.php');
        enableErrors();
    ?>
    <h2>Registro</h2>
    <form method="post" action="web4.php">
        
        
        <?php
            foreach ($_POST as $name => $value) {?>
                <input type="hidden" name="<?php echo $name;?>" value="<?php echo $value;?>"/>
            <?php }
        ?>
        
        <fieldset>
            <legend>Lista de coches</legend><br>
            <select name="marcas[]" multiple size="5">
                <option value="mercedes">Mercedes</option>
                <option value="volkswagen">Volkswagen</option>
                <option value="renault">Renault</option>
                <option value="hyundai">Hyundai</option>
                <option value="bmw">BMW</option>
            </select><br><br>
            <input type="submit"/> <br>
        </fieldset>
    </form>
</body>
</html>
