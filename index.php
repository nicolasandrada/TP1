
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
    //VARIABLE 
    //se identifican con el $ y se declaran al momento de usar
        $nombre = "nico";
        $edad = 30 ;
        $existe = true;

    //Imprimir en el documento HTML
        echo "hola $nombre <br>";

    //TODA PROGRAMACION ES SIMILAR A C/C++
        if($edad >= 18){
            echo "Es mayor de edad <br>";
        }else{
            //Mensaje Funable
            echo "Es menor de edad :( <br>";
        }
    ?>
</body>
</html>