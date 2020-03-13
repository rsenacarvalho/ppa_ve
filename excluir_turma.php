<?php
   
   include 'banco_turma.php';

   $id_turma = filter_input(INPUT_GET,'id_turma',FILTER_SANITIZE_NUMBER_INT);

   excluir_turma($id_turma);