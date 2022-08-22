<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Formulario</h1>
        <h2>
        <?php
            if ($_POST) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                if ($num1 == '' || $num2 == '' || $num3 == '') {
                    echo "Complete los campos";
                }
                else{
                    $suma = ($num1 + $num2 + $num3)/3;
                    echo "Promedio: ".$suma;
                }
            }
            ?>
        </h2>
        <div>
            <form name="form1" method="POST" class="form" action="index.php" target="_blank">
                <div>
                    <div class="input">
                        <p>Número 1</p>
                        <input name="num1" type="number" id="num1" required>
                    </div>
                    <div class="input">
                        <p>Número 2</p>
                        <input name="num2" type="number" id="num2" required>
                    </div>
                    <div class="input">
                        <p>Número 3</p>
                        <input name="num3" type="number" id="num3" required>
                    </div>
                </div>
                <div>
                    <button type="submit">Calcular</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>