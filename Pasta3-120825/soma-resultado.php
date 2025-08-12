<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soma de números</h1>
    <form method="post">
        Digite o primeiro número: <input type="number" name="n1"><br>
        Digite o segundo número: <input type="number" name="n2"><br>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST["n1"]) && isset($_POST["n2"])){
            $numero1 = $_POST["n1"];
            $numero2 = $_POST["n2"];
            echo "O resultado é igual a: " . $numero1 + $numero2;
        } else {
            echo "<br> Aguardando envio...";
        }
    ?>
</body>
</html>