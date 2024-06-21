<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <select>
        <?php
        //Con esto queda demostrado que el PHP se puede abrir en cualquier parte
        for($edad = 0; $edad<=99 ; $edad++){
            echo "<option> $edad </option>";
        } 
        ?>
    </select>
    
</body>
</html>