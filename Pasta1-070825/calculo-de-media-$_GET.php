<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de média GET</title>
</head>
<body>
    <form type="get">
        Primeira Nota: <input type="number" name="nota1"><br>
        Segunda Nota: <input type="number" name="nota2">
        <br>
        <input type="submit" value="Registrar">
    </form>

    <?php
        if (isset($_GET["nota1"]) && isset( $_GET["nota2"])){
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];

            $media = ($nota1 + $nota2) /2;
            echo "<br> Média: $media";
        }
    ?>
</body>
</html>