<?php
function cadastrar_projeto($titulo, $tema, $problema, $justificativa, 
$objetivogeral, $objetivosespecificos, $horarias, $atividades, $projeto, $produto)
{
    $conexao = conectar();

    $sql = "INSERT INTO projeto (titulo, tema, problema, justificativa, 
    objetivogeral, objetivosespecificos, horarias, atividades, projeto, produto) VALUES (:TITULO,:TEMA,
    :PROBLEMA,:JUSTIFICATIVA,:OBJETIVOGERAL,:OBJETIVOSESPECIFICOS, :HORARIAS, :ATIVIDADES,:PROJETO,:PRODUTO)";

    $declaracao = $conexao->prepare($sql);

    $declaracao->bindParam(":TITULO", $titulo);
    $declaracao->bindParam(":TEMA", $tema);
    $declaracao->bindParam(":PROBLEMA", $problema);
    $declaracao->bindParam(":JUSTIFICATIVA", $justificativa);
    $declaracao->bindParam(":OBJETIVOGERAL", $objetivogeral);
    $declaracao->bindParam(":OBJETIVOSESPECIFICOS", $objetivosespecificos);
    $declaracao->bindParam(":HORARIAS", $horarias);
    $declaracao->bindParam(":ATIVIDADES", $atividades);
    $declaracao->bindParam(":PROJETO", $projeto);
    $declaracao->bindParam(":PRODUTO", $produto);


    $declaracao->execute();

    header('Location:index_proj.php');
}

function atualizar_projeto($id_projeto, $titulo, $tema, $problema, $justificativa, 
$objetivogeral, $objetivosespecificos, $horarias, $atividades, $projeto, $produto)
{
    $conn = conectar();

   

    $sql ="UPDATE projeto SET titulo=:TITULO, tema=:TEMA, problema=:PROBLEMA, justificativa=:JUSTIFICATIVA, 
    objetivogeral=:OBJETIVOGERAL, objetivosespecificos=:OBJETIVOSESPECIFICOS, horarias=:HORARIAS, atividades=:ATIVIDADES, 
    projeto=:PROJETO, produto= :PRODUTO  WHERE id_projeto= :ID_PROJETO";

    $declaracao = $conn->prepare($sql);
   
    $declaracao->bindParam(":TITULO", $titulo);
    $declaracao->bindParam(":TEMA", $tema);
    $declaracao->bindParam(":PROBLEMA", $problema);
    $declaracao->bindParam(":JUSTIFICATIVA", $justificativa);
    $declaracao->bindParam(":OBJETIVOGERAL", $objetivogeral);
    $declaracao->bindParam(":OBJETIVOSESPECIFICOS", $objetivosespecificos);
    $declaracao->bindParam(":HORARIAS", $horarias);
    $declaracao->bindParam(":ATIVIDADES", $atividades);
    $declaracao->bindParam(":PROJETO", $projeto);
    $declaracao->bindParam(":PRODUTO", $produto);
    $declaracao->bindParam(":ID_PROJETO", $id_projeto);
    

    $retorno = $declaracao->execute();

    if($retorno){
        header('Location:index_proj.php');
    }

}

function get_projetos()
{
    $conexao = conectar();

    $declaracao  = $conexao->prepare("SELECT * FROM projeto order by titulo");

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
function get_projeto($id_projeto)
{
    $conexao = conectar();

    $declaracao = $conexao->prepare("SELECT * FROM projeto where id_projeto = :ID_PROJETO");

    $declaracao->bindParam(":ID_PROJETO", $id_projeto);

    $declaracao->execute();

    $result = $declaracao->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function excluir_projeto($id_projeto)
{

    $conexao = conectar();

    $declaracao = $conexao->prepare("DELETE FROM projeto WHERE id_projeto = :ID_PROJETO");
    $declaracao->bindParam(":ID_PROJETO", $id_projeto);

    $retorno = $declaracao->execute();

    if ($retorno) {
        header('Location:index_proj.php');
    } else {
        echo "Erro ao deletar projeto";
    }
}


function conectar()
{
    $conn = new PDO(
        "mysql:dbname=bancoppa;host=localhost",
        "aluno",
        "aluno@IFBA"
    );

    return $conn;
}