<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificador de números positivos, negativos ou iguais a zero</h1><br>
    <form method="post">
        Digite o número a ser verificado: <input type="number" name="numero"><input type="submit" value="Enviar"><br><br>
    </form>

    <?php
        if(isset($_POST["numero"])){
            $numero = $_POST["numero"];
            $resultado = ($numero == 0) ? 'O número é igual a zero':
                        (($numero > 0) ? 'O número é positivo' : 'O número é negativo');
            echo $resultado;
        } else {
            echo "<br> Aguardando envio...";
        }
    ?>
</body>
</html>