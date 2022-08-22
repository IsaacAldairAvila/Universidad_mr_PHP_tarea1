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
        <h1> Números del 1 al 100 </h1>
        <div class="form">
            <?php
            for ($x = 0; $x <= 100; $x++) {
                if ($x % 10 == 0 && $x != 0) {
                    echo " $x <br>";
                }
                else{
                    echo " $x, ";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>