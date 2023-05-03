<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="calcular_areas.php" method="POST">
        <input type="radio" name="figura" value="circulo" id="" checked>Circulo<br />
        <input type="radio" name="figura" value="cuadrado" id="">Cuadrado<br />
        <input type="radio" name="figura" value="triangulo" id="">Triángulo<br />
        <br />
        <label for="radio">Radio</label>
        <input type="number" name="radio" id="radio">
        <br />
        <label for="lado">Lado</label>
        <input type="number" name="lado" id="lado">
        <br />
        <label for="base">Base</label>
        <input type="number" name="base" id="base">
        <br />
        <label for="altura">Altura</label>
        <input type="number" name="altura" id="altura">
        <br />
        <br />
        <input type="submit" value="Calcular">
    </form>

    <p>
        <?php
        session_start();
        if (isset($_SESSION['resultado'])) {
            echo "El resultado es: " . $_SESSION['resultado'];
            session_destroy();
        }
        ?>
    </p>

</body>

</html>