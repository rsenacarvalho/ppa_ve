<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$matricula = $_POST["matricula"];
//$senha = $_POST["senha"];


include 'banco_prof.php';    
cadastrar_professor($nome, $email, $matricula);


