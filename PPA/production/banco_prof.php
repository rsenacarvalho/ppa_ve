<?php


function cadastrar_professor($nome, $email, $matricula)
{
    $conexao = conectar();

    $sql = 'INSERT INTO professores (nome, email, matricula) VALUES (:NOME, :EMAIL, :MATRICULA)';

    $declaracao = $conexao->prepare($sql);

    $declaracao->bindParam(":NOME", $nome);
    $declaracao->bindParam(":EMAIL", $email);
    $declaracao->bindParam(":MATRICULA", $matricula);

    $declaracao->execute();

    header('Location: form.html');
}

function conectar()
{
    $conn = new PDO(
        "mysql:dbname=ppa;host=localhost",
        "aluno",
        "aluno"
    );

    return $conn;
}
?>