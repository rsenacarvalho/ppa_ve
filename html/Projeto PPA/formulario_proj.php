
<?php

$titulo=$_POST["titulo"];
$tema=$_POST["tema"];
$problema=$_POST["problema"];
$justificativa=$_POST["justificativa"];
$objetivogeral=$_POST["objetivogeral"];
$objetivosespecificos=$_POST["objetivosespecificos"];
$horarias=$_POST["horarias"];
$atividades=$_POST["atividades"];
$projeto=$_POST["projeto"];
$produto=$_POST["produto"];


include 'banco_proj.php';

cadastrar_projeto($titulo, $tema, $problema, $justificativa, 
$objetivogeral, $objetivosespecificos, $horarias, $atividades, $projeto, $produto);
?>