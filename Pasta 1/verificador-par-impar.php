<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou impar</title>
</head>
<body>
    <form type="get">
        <b>Par ou ímpar</b>
        <br><br>

        Número: <input type="number" name="numero">
        <br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
        if (isset($_GET["numero"]) == null) {
            echo "<br> Aguardando informação...";
        } else {
            if (isset($_GET["numero"]) && $_GET["numero"] % 2 == 0) {
                echo "<br> Esse número é par";
            } else {
                echo "<br> Esse número é impar";
            }
        }
    ?>
</body>
</html>