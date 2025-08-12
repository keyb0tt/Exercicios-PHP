<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tradutor de dia da semana: Número -> Escrita</h1><br>
    <form method="post">
        Insira o número do dia da semana(de 1 a 7): <input type="number" name="diaNumero"> <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST["diaNumero"])){
            $d = $_POST["diaNumero"];
            switch ($d) {
                case 1:
                    echo "<br>O primeiro dia é Domingo";
                    break;
                case 2:
                    echo "<br>O segundo dia é Segunda-Feira";
                    break;
                case 3:
                    echo "<br>O terceiro dia é Terça-Feira";
                    break;
                case 4: 
                    echo "<br>O quarto dia é Quarta-Feira";
                    break;
                case 5:
                    echo "<br>O quinto dia é Quinta-Feira";
                    break;
                case 6:
                    echo "<br>O sexto dia é Sexta-Feira";
                    break;
                case 7:
                    echo "<br>O sétimo dia é Sábado";
                    break;
            }
        } else {
            echo "Aguardando envio...";
        }
    ?>
</body>
</html>