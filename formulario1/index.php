<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['enviar'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $suma = $num1 + $num2;
    }

    ?>
    <!-- recogiendo datos de un formulario pero aplicando la lógica dentro de la misma página -->
    <form method="POST">
        <label for="num1">Inserta el número 1</label>
        <input type="number" name="num1" id="num1">

        <label for="num1">Inserta el número 2</label>
        <input type="number" name="num2" id="num2">

        <input type="submit" value="Sumar" name="enviar">
    </form>

    <?php
    if (isset($_POST['enviar'])) {
        echo $suma;
    }

    ?>

</body>

</html>