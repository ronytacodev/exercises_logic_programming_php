<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sumar.php" method="POST">
        <label for="num1">Inserta el número 1</label>
        <input type="number" name="num1">

        <label for="num2">Inserta el número 2</label>
        <input type="number" name="num2">

        <input type="submit" value="Sumar" name="enviar">
    </form>
    <p>
        <?php
        session_start();
        if (isset($_SESSION['resultado'])) {
            echo $_SESSION['resultado'];
            session_destroy();
        }
        ?>
    </p>

</body>

</html>