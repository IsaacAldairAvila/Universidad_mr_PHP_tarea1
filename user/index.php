<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1> Nombre y Edad </h1>
        <div class="form">
            <?php
            function muestranombre($nombre)
            {
                print "<h3 class='h3'> Su nombre es: $nombre </h3>";
            }
            function muestraedad($edad)
            {
                print "<h3 class='h3'> Su edad es: $edad </h3>";
            }
            muestranombre("Marco Rodriguéz");
            muestraedad("23");
            ?>
        </div>
    </div>
</body>

</html>