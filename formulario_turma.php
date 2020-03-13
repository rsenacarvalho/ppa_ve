<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <title>Teste de Conexão</title>


</head>

<body>

    <?php
    $nome = $_POST["nome"];
    $turno = $_POST["turno"];
    $ano = $_POST["ano"];

    echo "Nome da Turma: " . $nome . "<br>";
    echo "Turno: " . $turno . "<br>";
    echo "Ano: " . $ano;
    include 'banco_turma.php';
    cadastrar_turma($nome,$turno, $ano);
    ?>





</body>

</html>