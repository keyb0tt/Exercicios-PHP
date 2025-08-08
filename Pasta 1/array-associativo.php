<?php
    $produto = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => 3500,
        "estoque" => 15,
    ];

    echo "Nome: " . $produto["nome"] . "<br>";
    echo "Marca: " . $produto["marca"] . "<br>";
    echo "Preço: R$" . $produto["preco"] . "<br>";
    echo "Estoque: " . $produto["estoque"] . " unidades<br><br>";

    echo "<br>Informações completas do produto:<br>";
    foreach ($produto as $chave => $valor) {
        echo ucfirst($chave) . ": $valor<br>";
    }
?>