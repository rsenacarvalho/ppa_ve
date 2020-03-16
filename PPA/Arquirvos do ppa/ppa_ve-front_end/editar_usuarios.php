<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />

    <title>PPA</title>


</head>

<body>

    <h2> Alterar informações do usuário</h2>
    <div>
        <?php
        include 'banco.php';
        $num_matricula = filter_input(INPUT_GET, 'num_matricula', FILTER_SANITIZE_NUMBER_INT);

        $result = get_usuario($num_matricula);

        $linha = $result[0];

        ?>
        <form method="POST" action="editar.php">
            <h3>Número de Matricula:</h3>
            <br>
            <input type="number" readonly="true" value="<?php echo $linha['num_matricula'];  ?>" name="num_matricula" id="num_matricula" class="campo">
            <br>
            <h3>Nome</h3>
            <br>
            <input type="text" name="nome" id="nome" value="<?php echo $linha['nome']; ?>">


            <br>
            <h3>Telefone</h3>
            <input type="text" name="telefone" id="telefone" value="<?php echo $linha['telefone']; ?>">
            <br>
            <h3>Email:</h3>
            <br>
            <input type="email" name="email" id="email" value="<?php echo $linha['email']; ?>">
            <br>

            <fieldset>
                <legend>Sexo * (Item obrigatório)</legend>
                <input type="radio" id="masc" name="sexo" value="Masculino">
                <label for="masc">Masculino</label>
                <input type="radio" id="fem" name="sexo" value="Feminino">
                <label for="fem">Feminino</label>

            </fieldset>
            <br>
            <h3>Curso:</h3>
            <br>
            <select name="id_curso" id="id_curso">
                <option value="1">Informática</option>
                <option value="2">Alimentos</option>
                <option value="3">Edificações</option>
            </select>
            <br>
            <h3>Turma:</h3>
            <br>
            <input type="number" name="id_turma" id="id_turma" class="campo">
            <br>


            <h3>Ano Letivo:</h3>
            <br>
            <input type="number" name="ano_letivo" id="ano_letivo" class="campo">
            <br><br>
            <input type="submit" name="Submit" value="Enviar" class="enviar">

        </form>

        <br>
    </div>

</body>

</html>