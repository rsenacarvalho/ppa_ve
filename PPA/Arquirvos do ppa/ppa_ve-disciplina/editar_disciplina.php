<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <title>Projeto PPA</title>
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

    <h2> Alterar informações da Disciplina</h2>
    <div>

        <?php
        include 'banco_disciplina.php';

        $id_disc = filter_input(
            INPUT_GET,
            'id_disc',
            FILTER_SANITIZE_NUMBER_INT
        );

        $result = get_disciplina($id_disc);

        $linha = $result[0];

        ?>
        <form method="POST" action="edita_disciplina.php">
        <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" value="<?php echo $linha['id_disc'] ?>" readonly="true"><br>
       
            
            <label for="nomeDaDisc">Disciplina:</label>
            <input type="text" id="nomeDaDisc" name="nomeDaDisc" value="<?php echo $linha['nomeDaDisc'] ?>"><br>
       
            <label for="nomeDaProf">Professor(o):</label>
            <input type="text" id="nomeDaProf" name="nomeDaProf" value="<?php echo $linha['nomeDaProf'] ?>"><br>

            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="<?php echo $linha['descricao'] ?>"><br>

            <input type="submit" value="Confirma alteração">
        </form>
        <br>
        <a href="index_disciplina.php">Disciplina cadastradas</a>
    </div>

</body>

</html>