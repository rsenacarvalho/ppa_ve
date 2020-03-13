<?php
   
  include 'banco_proj.php';
  
  $id_projeto = filter_input(INPUT_GET, 'id_projeto', FILTER_SANITIZE_NUMBER_INT);

 excluir_projeto($id_projeto);