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

    <h2> Alterar informações da Turma</h2>
    <div>

        <?php
        include 'banco_turma.php';

        $id_turma = filter_input(
            INPUT_GET,
            'id_turma',
            FILTER_SANITIZE_NUMBER_INT
        );

        $result = get_turma($id_turma);

        $linha = $result[0];

        ?>
        <form method="POST" action="edita_turma.php">
        <label for="codigo">Código:</label>
            <input type="text" id="codigo" name="codigo" value="<?php echo $linha['id_turma']; ?>" readonly="true"><br>
            
            <label for="nome">Nome Da Turma:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $linha['nome']; ?>"><br>
            
            <fieldset>
                <legend>Turno</legend>
                <input type="radio" id="matutino" name="turno" 
                <?php 
                    if($linha['turno'] === 'Matutino'){
                        echo 'checked';
                    }                
                ?>
                value="Matutino">
                <label for="matutino">Matutino</label><br>

                <input type="radio" id="vespetino" name="turno" 
                <?php 
                    if($linha['turno'] === 'Vespetino'){
                        echo 'checked';
                    }                
                ?>
                value="Vespetino">
                <label for="vespetino">Vespetinoo</label><br>

                <input type="radio" id="noturno" name="turno"
                <?php 
                    if($linha['turno'] === 'Noturno'){
                        echo 'checked';
                    }                
                ?>
                value="Noturno">
                <label for="noturno">Noturno</label>

            </fieldset>

            <fieldset>
                <legend>Ano da Turma:</legend>
                <input type="radio" id="primeiro" name="ano" 
                <?php 
                    if($linha['ano'] === 'Primeiro'){
                        echo 'checked';
                    }                
                ?>
                value="Primeiro">
                <label for="primeiro">Primeiro</label><br>

                <input type="radio" id="Segundo" name="ano" 
                <?php 
                    if($linha['ano'] === 'segundo'){
                        echo 'checked';
                    }                
                ?>
                value="Segundo">
                <label for="segundo">Segundo</label><br>

                <input type="radio" id="terceiro" name="ano"
                <?php 
                    if($linha['ano'] === 'Terceiro'){
                        echo 'checked';
                    }                
                ?>
                value="Terceiro">
                <label for="terceiro">Terceiro</label>

            </fieldset>
            <input type="submit" value="Confirma alteração">
        </form>
        <br>
        <a href="index_turma.php">Turma Cadastrada</a>
    </div>

</body>

</html>