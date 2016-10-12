<?php
$dados = array(
    'id' => null,
    'nome' => 'O nome do cidadão',
    'email' => 'email@dominio'
);

$meu_sql = prepara_insert('usuario' /* nome da tabela */, $dados /* array com os dados */);

// a partir daqui, você já pode usar o $meu_sql pra inserir no bd.
?>
