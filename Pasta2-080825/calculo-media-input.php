<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Primeira Nota:<input type="number" name="nota1"> <br>
        Segunda Nota:<input type="number" name="nota2"> <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if (isset($_POST["nota1"]) && isset($_POST["nota2"])) {
            $media = ($_POST["nota1"] + $_POST["nota2"]) /2;
            echo "A sua média foi:$media<br>";
        } else {
            echo "Aguardando cálculo...";
        }

    ?>
</body>
</html>