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
        for($edad = 0; $edad<=99 ; $edad++){
            echo "<option> $edad </option>";
        } 
        ?>
    </select>
    
</body>
</html>