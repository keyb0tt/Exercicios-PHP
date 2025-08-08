<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo em PHP usando POST</title>
</head>
<body>
    <form method="post">
        Primeiro número: <input type="number" name="numero1"><br>
        Segundo número: <input type="number" name="numero2"><br>
        <input type="submit" value="Calcular"><br>
    </form>

    <?php
        if (isset($_POST["numero1"]) && isset( $_POST["numero2"])) {
            $num1 = $_POST["numero1"];
            $num2 = $_POST["numero2"];

            $soma = $num1 + $num2;
            echo "Soma: $soma";
        }
    ?>
</body>
</html>