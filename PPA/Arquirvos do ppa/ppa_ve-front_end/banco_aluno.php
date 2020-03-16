<?php


function cadastrar_aluno($nome, $email, $id_curso, $id_turma, $ano_letivo, $sexo, $telefone, $num_matricula)
{
    $conexao = conectar();

    $sql = 'INSERT INTO aluno (nome, email, id_curso, id_turma, ano_letivo, sexo, telefone, num_matricula) VALUES (:NOME,:EMAIL,:CURSO,:TURMA,:ANO_LETIVO,:SEXO,:TELEFONE,:NUM_MATRICULA)';

    $declaracao = $conexao->prepare($sql);

    $declaracao->bindParam(":NOME", $nome);
    $declaracao->bindParam(":EMAIL", $email);
    $declaracao->bindParam(":CURSO", $id_curso);
    $declaracao->bindParam(":TURMA", $id_turma);
    $declaracao->bindParam(":ANO_LETIVO", $ano_letivo);
    $declaracao->bindParam(":SEXO", $sexo);
    $declaracao->bindParam(":TELEFONE", $telefone);
    $declaracao->bindParam(":NUM_MATRICULA", $num_matricula);

    $declaracao->execute();

    header('Location:index.html');
}

function get_usuarios()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM aluno order by nome");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}

function get_usuario($num_matricula)
{
    $conexao = conectar();

    $declaracao = $conexao->prepare("SELECT * FROM aluno where num_matricula = :NUM_MATRICULA");

    $declaracao->bindParam(":NUM_MATRICULA", $num_matricula);

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function atualizar_aluno($nome, $email, $id_turma,$id_curso, $ano_letivo, $sexo, $telefone, $num_matricula)
{
    $conn = conectar();

    
    $sql = "UPDATE aluno SET nome =  :NOME, email = :EMAIL, id_curso = :CURSO, id_turma = :TURMA, ano_letivo = :ANO_LETIVO, sexo = :SEXO, telefone = :TELEFONE WHERE num_matricula = :NUM_MATRICULA";
    
    echo $sql;
   
    $declaracao = $conn->prepare($sql);

    $declaracao->bindParam(":NOME", $nome);
    $declaracao->bindParam(":EMAIL", $email);
    $declaracao->bindParam(":CURSO", $id_curso);
    $declaracao->bindParam(":TURMA", $id_turma);
    $declaracao->bindParam(":ANO_LETIVO", $ano_letivo);
    $declaracao->bindParam(":SEXO", $sexo);
    $declaracao->bindParam(":TELEFONE", $telefone);
    $declaracao->bindParam(":NUM_MATRICULA", $num_matricula);

    $retorno = $declaracao->execute();

    if ($retorno) {
        header('Location:lista_de_alunos.php');
    }
}
function excluir_aluno($num_matricula)
{

    $conexao = conectar();

    $declaracao = $conexao->prepare("DELETE FROM aluno WHERE num_matricula = :NUM_MATRICULA");
    $declaracao->bindParam(":NUM_MATRICULA",$num_matricula);

    $retorno = $declaracao->execute();

    if($retorno){
        header('Location:lista_De_alunos.php');
    }else{
        echo "Erro ao deletar o aluno";
    }
}
function conectar()
{
    $conn = new PDO(
        "mysql:dbname=ppa;host=localhost",
        "sena",
        "password"
    );

    return $conn;
}
?>