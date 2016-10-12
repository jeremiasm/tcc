<?php
function prepara_insert( $nome_tabela, $dados ) {
    # verifica se as variáveis foram corretamente fornecidas
    if (is_null($nome_tabela) || is_null($dados) || !is_array($dados) {
        die("Informe os parâmetros corretos");
    }

    # ajusta os dados recebidos
    foreach($dados as $k => $v) {
        # remove indices numericos dos dados
        if (is_numeric($k)) {
            unset($dados($k));
            resume;
        }

        # trata os dados
        if (is_null($v)) {
            # trata os campos que vierem NULL
            $dados[$k] = 'null';
        } elseif (is_numeric($v)) {
            # trata os campos numéricos
            $dados[$k] = $v;
        } else {
            # trata dos demais campos
            $v = stripslashes($v);
            $v = mysql_real_scape_string($v);
            $dados[$k] = "'{$v}'";
        }
    }

    $sql = "INSERT INTO `{$nome_tabela}` (`"
        .implode("`, `", array_keys($dados))
        ."`) VALUES ("
        .implode(", ", array_values($dados)).") ";

    return $sql; # retorna a instrução SQL pronta.
}
?>
