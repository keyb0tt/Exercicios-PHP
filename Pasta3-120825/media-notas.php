<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Nota 1:<input type="number" name="nota1"><br>
        Nota 2:<input type="number" name="nota2"><br><br>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST["nota1"]) && isset($_POST["nota2"])){
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            
            echo "<br> A sua média foi de: " . ($nota1 + $nota2) / 2; 
        } else {
            echo "<br> Aguardando envio...";
        }
    ?>

</body>
</html>