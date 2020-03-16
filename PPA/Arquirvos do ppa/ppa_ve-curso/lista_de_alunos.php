<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
   
       
</head>

<body>

    <body>

        <h2>Usuários Cadastrados</h2>

        <div>


            <table>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Sexo</th>
                    <th>Curso</th>
                    <th>Turma<th>
                    <th>Número da Matricula<th>
                    <th>Ano letivo<th>
                    <th><th>
                    <th colspan='2' style='text-align: center'>Ações</th>
                </tr>
                <?php
                include 'banco.php';
                $result = get_usuarios();
                foreach ($result as $linha) {
                    echo '<tr>';
                    echo '<td>' . $linha["nome"] . '</td>';
                    echo '<td>' . $linha["telefone"] . '</td>';
                    echo '<td>' . $linha["email"] . '</td>';
                    echo '<td>' . $linha["sexo"] . '</td>';
                    echo '<th>' . $linha["id_turma"] . '</th>';
                    echo '<td>' . $linha["id_curso"] . '<th>';
                    echo '<th>' . $linha["num_matricula"] . '</th>';
                    echo '<th>' . $linha["ano_letivo"] . '</th>';
                 
                    $num_matricula = $linha["num_matricula"];
                    echo '<td><a class="btnExcluir" href="excluir_aluno.php?num_matricula='.
                    $num_matricula.'">Excluir</a></td>';
                    echo '<td><a class="btnEditar" href="editar_usuarios.php?num_matricula='.$num_matricula.'">Editar</a></td>';
                    echo '</tr>';
                }

                ?>
            </table>

            <a class="linkNovo" href="index.html">Novo Usuário</a>
        </div>

    </body>

</html> 