<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Digite um número:<input type="number" name="numero"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_POST["numero"])) {
            if ($_POST["numero"] % 2 == 0) {
                echo "O número é par! <br>";
            } else {
                echo "O número é ímpar!";
            }
        }
    ?>
</body>
</html>