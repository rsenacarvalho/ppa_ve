<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <title>Estudando PHP</title>
    <style>
        body {
            margin-top: 50px;
            margin-bottom: 100px;
            margin-right: 150px;
            margin-left: 80px;

        }

        fieldset {
            border-radius: 5px;
        }

        a:link,
        a:visited {
            background-color: #00FA9A;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        a:hover,
        a:active {
            background-color: #006400;
            border-radius: 5px;
        }

        input[type=text],
        input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #FFA500;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            text-align: center;
            background-color: #4682B4;
            border-radius: 5px;
        }
    </style>

</head>

<body>

    <h2> Alterar informações do Projeto</h2>
    <div>

        <?php
        include 'banco_proj.php';

        $id_projeto = filter_input(
            INPUT_GET,
            'id_projeto',
            FILTER_SANITIZE_NUMBER_INT
        );

        $result = get_projeto($id_projeto);

        $linha = $result[0];

        ?>
        <form method="POST" action="editar_proj.php">
        <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" value="<?php echo 
            $linha['id_projeto']; ?>" readonly="true"><br>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $linha['titulo']; ?>"><br>
            <label for="tema">Tema:</label>
            <input type="tema" id="tema" name="tema" value="<?php echo $linha['tema'] ?>"><br>
            <label for="problema">Problema:</label>
            <input type="problema" id="problema" name="problema" value="<?php echo $linha['problema'] ?>"><br>
            <label for="justificativa">Justificativa:</label>
            <input type="justificativa" id="justificativa" name="justificativa" value="<?php echo $linha['justificativa'] ?>"><br>
            <label for="objetivogeral">Objetivo Geral:</label>
            <input type="objetivogeral" id="objetivogeral" name="objetivogeral" value="<?php echo $linha['objetivogeral'] ?>"><br>
            <label for="objetivosespecificos">Objetivo Especificos:</label>
            <input type="objetivosespecificos" id="objetivosespecificos" name="objetivosespecificos" value="<?php echo $linha['objetivosespecificos'] ?>"><br>
            <label for="horarias">Carga Horaria:</label>
            <input type="horarias" id="horarias" name="horarias" value="<?php echo $linha['horarias'] ?>"><br>
            <label for="atividades">Atividades:</label>
            <input type="atividades" id="atividades" name="atividades" value="<?php echo $linha['atividades'] ?>"><br>
            <label for="projetos">Projetos:</label>
            <input type="projeto" id="projeto" name="projeto" value="<?php echo $linha['projeto'] ?>"><br>
            <label for="produto">Produto:</label>
            <input type="produto" id="produto" name="produto" value="<?php echo $linha['produto'] ?>"><br>
            <input type="submit" value="Confirma alteração">
        </form>
        <br>
        <a href="index_proj.php">Projetos cadastrados</a>
    </div>

</body>

</html>