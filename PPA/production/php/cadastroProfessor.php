<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$matricula = $_POST["matricula"];

echo "Estou aqui";

echo $nome . '<br>';
echo $email . '<br>';
echo $matricula . '<br>';




include 'banco_prof.php';
cadastrar_professor($nome, $email, $matricula);
