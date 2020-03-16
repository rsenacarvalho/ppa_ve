<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />



</head>

<body>
    <?php
    $id_projeto= $_POST["codigo"];
    $titulo = $_POST["titulo"];
    $tema = $_POST["tema"];
    $problema = $_POST["problema"];
    $justificativa = $_POST["justificativa"];
    $objetivogeral = $_POST["objetivogeral"];
    $objetivosespecificos = $_POST["objetivosespecificos"];
    $horarias = $_POST["horarias"];
    $atividades = $_POST["atividades"];
    $projeto = $_POST["projeto"];
    $produto = $_POST["produto"];

    /*
    echo $id_projeto. '<br>';
    echo $titulo. '<br>';
    echo  $tema. '<br>';
    echo  $problema. '<br>';
    echo  $justificativa. '<br>';
    echo  $objetivogeral. '<br>';
    echo  $objetivosespecificos. '<br>';
    echo  $horarias. '<br>';
    echo $atividades . '<br>';
    echo  $projeto . '<br>';
    echo $produto. '<br>';
*/


    include 'banco_proj.php';
    atualizar_projeto( $id_projeto, $titulo, $tema, $problema, $justificativa, 
    $objetivogeral, $objetivosespecificos, $horarias, $atividades, $projeto, $produto);

    ?>


</body>

</html>