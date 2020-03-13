<?php

    $id_turma = $_POST["codigo"];
    $nome = $_POST["nome"];
    $turno = $_POST["turno"];
    $ano = $_POST["ano"];
    include 'banco_turma.php';
    atualizar_turma($id_turma, $nome,  $turno, $ano);


