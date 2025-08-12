<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verificador de Par ou Ímpar</h1>
    <form method="post">
        Insira o número desejado: <input type="number" name="numero"> <input type="submit" value="Enviar">
    </form>
    
    <?php
        if (isset($_POST["numero"])){
            $numero = $_POST["numero"];

            if($numero % 2 == 0){
                echo "Esse número é par!";
            } else {
                echo "Esse número é ímpar!";
            }
        }
    ?>
</body>
</html>