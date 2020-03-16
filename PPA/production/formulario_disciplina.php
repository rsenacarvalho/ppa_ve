<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <title>Teste de Conexão</title>


</head>

<body>

    <?php
    $nomeDaDisc = $_POST["nomeDaDisc"];
    $nomeDaProf = $_POST["nomeDaProf"];
    $descricao = $_POST["descricao"];
    echo "Nome Da Disciplina: " . $nomeDaDisc . "<br>";
    echo "Professor(a): " . $nomeDaProf . "<br>"; 
    echo "Descrição: " . $descricao;
     include 'banco_disciplina.php';
    cadastrar_disciplina($nomeDaDisc, $nomeDaProf, $descricao);
    ?>





</body>

</html>