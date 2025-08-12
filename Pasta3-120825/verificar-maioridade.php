<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificador de Maioridade</h1>
    <form method="post">
        Insira sua idade: <input type="number" name="idade"> <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST["idade"])){
            $idade = $_POST["idade"];

            if($idade >= 18){
                echo "<br> Você é maior de idade!";
            } else {
                echo "<br> Você é menor de idade!";
            }
        } else {
           echo "Aguardando envio...";
        }
    ?>
</body>
</html>