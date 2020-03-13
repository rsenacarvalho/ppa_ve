<?php
function cadastrar_turma($nome, $turno, $ano)
{
    $conexao = conectar();

    $sql = "INSERT INTO turma (nome, turno, ano) VALUES (:NOME,:TURNO,:ANO)";

    $declaracao = $conexao->prepare($sql);

    $declaracao->bindParam(":NOME", $nome);
    $declaracao->bindParam(":TURNO", $turno);
    $declaracao->bindParam(":ANO", $ano);


    $declaracao->execute();

    header('Location:index_turma.php');
}

function atualizar_turma($id_turma, $nome,  $turno, $ano)
{
    $conn = conectar();

    $sql = "UPDATE turma SET nome = :NOME, turno = :TURNO, ano = :ANO WHERE id_turma = :ID_TURMA";

    $declaracao = $conn->prepare($sql);
    $declaracao->bindParam(":ID_TURMA", $id_turma);
    $declaracao->bindParam(":NOME", $nome);
    $declaracao->bindParam(":TURNO", $turno);
    $declaracao->bindParam(":ANO", $ano);
    

    $retorno = $declaracao->execute();

    if ($retorno) {
        header('Location:index_turma.php');
     
    }
   
}

function get_turmas()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM turma order by nome");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}



function get_turma($id_turma)
{
    $conexao = conectar();

    $declaracao = $conexao->prepare("SELECT * FROM turma where id_turma = :ID_TURMA");

    $declaracao->bindParam(":ID_TURMA", $id_turma);

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function excluir_turma($id_turma)
{

    $conexao = conectar();

    $declaracao = $conexao->prepare("DELETE FROM turma WHERE id_turma = :ID_TURMA");
    $declaracao->bindParam(":ID_TURMA", $id_turma);

    $retorno = $declaracao->execute();

    if ($retorno) {
        header('Location:index_turma.php');
    } else {
        echo "Erro ao deletar a turma";
    }
}


function conectar()
{
    $conn = new PDO(
        "mysql:dbname=ppa_turma;host=localhost",
        "root",
        ""
    );

    return $conn;
}
