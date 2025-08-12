<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificador de aprovação</h1>
    <form method="post">
        Insira a sua primeira nota: <input type="number" name="nota1"><br>
        Insira a sua segunda nota: <input type="number" name="nota2"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST["nota1"]) && isset($_POST["nota2"])){
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];

            $media = ($nota1 + $nota2) /2;
            
            $situacao = ($media >= 7) ? '<br> Aprovado' : '<br> Reprovado';
            echo "$situacao";
        } else {
            echo "<br> Aguardando envio...";
        }
    ?>
</body>
</html>