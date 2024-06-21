
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: red;
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <?php
        $nombre = "nico";
        $edad = 30 ;
        $existe = true;

        echo "hola $nombre <br>";

        if($edad >= 18){
            echo "Es mayor de edad <br>";
        }else{
            echo "Es menor de edad :( <br>";
        }
    ?>
</body>
</html>