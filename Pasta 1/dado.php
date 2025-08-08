<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Quantas vezes deseja jogar o dado? <input type="number" name="vezes">
        <input type="submit" value="jogar">
    </form>

    <?php
    if (isset($_POST['vezes'])) {
        $vezes = $_POST["vezes"];

        for ($i = 1; $i <= $vezes; $i++) {
            $dado = rand(1,6);
            echo "Jogada $i: Você tirou $dado <br>";
        }
    }
    ?>
</body>
</html>