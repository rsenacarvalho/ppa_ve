<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Projeto PPA</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-radius: 5px;
        }

        td,
        th {
            border: 1px solid #4682B4;
            text-align: left;
            padding: 5px;
        }

        tr:nth-child(even) {
            background-color: #4682B4;
        }

        body {
            margin-top: 50px;
            margin-bottom: 100px;
            margin-right: 150px;
            margin-left: 80px;

        }

        .btnExcluir:link,
        .btnExcluir:visited {
            background-color: #f44336;
            color: white;
            padding: 7px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        .btnEditar:link,
        .btnEditar:visited {
            background-color: #FFA500;
            color: white;
            padding: 7px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        .btnExcluir:hover,
        .btnExcluir:active {
            background-color: red;
            border-radius: 5px;
        }

        .btnEditar:hover,
        .btnEditar:active {
            background-color: #FF4500;
            border-radius: 5px;
        }

        .linkNovo {
            margin-top: 10px;
        }

        .linkNovo:link,
        .linkNovo:visited {
            background-color: #6495ED;
            color: white;
            padding: 7px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;

        }

        .linkNovo:hover,
        .linkNovo:active {
            background-color: #4169E1;
            border-radius: 5px;
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

<body>

<h2>Turmas Cadastrados</h2>

<div>


    <table>
        <tr>
        
        <th>Código</th>

            <th>Turmas</th>
            <th>Turno</th>
            <th>Ano</th>
            <th colspan='2' style='text-align: center'>Ações</th>
        </tr>
        <?php
        include 'banco_turma.php';
        $result = get_turmas();
        foreach ($result as $linha) {
            echo '<tr>';
            echo '<td>' . $linha["id_turma"] . '</td>';
            echo '<td>' . $linha["nome"] . '</td>';
            echo '<td>' . $linha["turno"] . '</td>';
            echo '<td>' . $linha["ano"] . '</td>';
            $id_turma = $linha["id_turma"];
            echo '<td><a class="btnExcluir" href="excluir_turma.php?id_turma='.
            $id_turma.'">Excluir</a></td>';
            echo '<td><a class="btnEditar" href="editar_turma.php?id_turma='.
            $id_turma.'">Editar</a></td>';
            echo '</tr>';
        }

        ?>
    </table>

    <a class="linkNovo" href="formulario_turma.html">Nova Turma</a>
</div>

</body>

</html>