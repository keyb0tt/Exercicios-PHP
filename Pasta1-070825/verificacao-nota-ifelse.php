<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Nota</title>
</head>
<body>
    <form method="post">
        Nota: <input type="number" name="nota">
        <input type="submit" value="Verificar">
    </form>

    <?php
        if (isset($_POST["nota"]) == null) {
            echo"<br> Aguardando informação...";
        } else {
            if ($_POST["nota"] >= 6) {
                echo "Aprovado";
                } elseif ($_POST["nota"] >= 4 && $_POST["nota"] < 6) {
                    echo "Recuperação";
                    } else {
                        echo "Reprovado";
                        }
        }
    ?>
</body>
</html>