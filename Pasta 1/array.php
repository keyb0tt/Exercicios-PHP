<?php
    // 1. Criação de array 
    $alunos = ["Ronaldinho", "Pelé", "Jailson Mendes", "Luis Inácio", "Surskity"];

    // 2. Mostrando nomes individualmente
    echo "Primeiro aluno: $alunos[0] <br>";
    echo "Segundo aluno: $alunos[1] <br>";
    echo "Terceiro aluno: $alunos[2] <br>";
    echo "Quarto aluno: $alunos[3] <br>";
    echo "Quinto aluno: $alunos[4] <br>";

    // 3. Mostrar total de alunos
    echo "<br>Total de alunos: " . count($alunos) . "<br><br>";

    // 4. Mostrar todos nomes usando foreach 
    echo "Lista de alunos: <br>";
    foreach ($alunos as $aluno) {
        echo "- $aluno<br>";
    }
?>