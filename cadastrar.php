
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script       src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

    <!-----inicio do top-------------------------------------------------------------------------------------->
        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <!---aqui vai um logo---->

            <div class="col-md-3  ">
              <ul class="nav navbar-nav">
                <li role="presentation" class="active"><a href="#">Home</a></li>
                <li role="presentation"><a href="#">Cadastro</a></li>
                <li role="presentation"><a href="#">Reservas</a></li>
              </ul>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <form class="navbar-form navbar-right"       action="valida_login.php" method="post">

              </form>
            </div>
          </div>
        </nav>



  <!-------------Inicia o corpo do projeto------------------>

    <h1>Cadastrar Usuário</h1>

      <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!----------------Inicio do  container-------------->
    <div class="container">
        <form action="index.php"p=cadastrar method="post">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input  name="nome type="text" value="" required class="form-control" >
          </div>

          <div class="form-group">
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" class="form-control" required name="sobrenome">
          </div>

          <div class="form-group">
            <label for="email">E-mail:</label>
            <input name="email" type="email" class="form-control">
          </div>

          <label for="nivel_de_acesso">Nivel de acesso</label>
          <select name="nivel_de_acesso">
            <option value="">Selecione</option>
            <option value="1">Basico</option>
            <option value="2">Admin</option>
          </select>


          <div class="form-group">
            <label for="senha">Senha:</label>
            A senha deve ter entre 8 e 16 caracteres
            <input name="senha" type="password" class="form-control">
          </div>

          <div class="form-group">
            <label for="rsenha">Repita a Senha:</label>
            <input name="rsenha" type="password" class="form-control">
          </div>


          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <button value="Salvar" name="confirmar" type="submit" class="btn btn-default">Salvar</button>
        </form>
    <div/>


  </body>
</html>
