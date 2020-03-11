<?php

    include 'banco.php';



    $num_matricula = filter_input(INPUT_GET,'num_matricula',FILTER_SANITIZE_NUMBER_INT);
  
    excluir_aluno($num_matricula)
        ?>