<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>cadastro de usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<h1>Usuários</h1>
<a href="cadastrar.php?p=cadastar">Cadastrar usuário</a>
<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container">
  <h2>tabela</h2>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>E-mail</th>
          <th>Nível de acesso</th>
          <th>Data de Cadastro</th>
          <th>Ação</th>

        </tr>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th> <a href="index.php?p=editar&usuario">Editar</a></th>
          <th> <a href="index.php?p=deletar&usuario">Deletar</a></th>
        </tr>
      </thead>

    </table>

  </div>

</div>

</body>
</html>
