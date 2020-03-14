<?php


function cadastrar_professor($nome, $email, $matricula)
{

    $conexao = conectar();

    $sql = "INSERT INTO professores (nome, email, matricula) VALUES (:NOME,:EMAIL,:MATRICULA)";
    try {
        $declaracao = $conexao->prepare($sql);

        $declaracao->bindParam(":NOME", $nome);
        $declaracao->bindParam(":EMAIL", $email);
        $declaracao->bindParam(":MATRICULA", $matricula);
        echo $nome;
        echo '<br>';
        echo $declaracao->execute();
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    // header('Location:../form/index.html');
}

function conectar()
{
    try {

        $conn = new PDO("mysql:dbname=ppa;host=localhost", "aluno", "aluno");
        return $conn;
    } catch (PDOException $e) {
        echo "<br>" . $e->getMessage();
    }
}
