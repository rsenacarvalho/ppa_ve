<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

</head>

<body>
    <?php

    $id_disc = $_POST["codigo"];
    $nomeDaDisc = $_POST["nomeDaDisc"];
    $nomeDaProf = $_POST["nomeDaProf"];
    $descricao = $_POST["descricao"];
    include 'banco_disciplina.php';
    atualizar_disciplina($id_disc, $nomeDaDisc, $nomeDaProf, $descricao);
    ?>
</body>

</html>