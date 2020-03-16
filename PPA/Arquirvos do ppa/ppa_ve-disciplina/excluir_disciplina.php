<?php
   
   include 'banco_disciplina.php';

   $id_disc = filter_input(INPUT_GET,'id_disc',FILTER_SANITIZE_NUMBER_INT);

   excluir_disciplina($id_disc);