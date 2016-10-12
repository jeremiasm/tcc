<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Reserva</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php

    require'/funcoes/config.php';
    require'/funcoes/connections.php';

    
     ?>







<!-----inicio do top-------------------------------------------------------------------------------------->
<nav class="navbar navbar-inverse navbar-fluid-top">
  <div class="container">
        <!---aqui vai um logo---->

      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">imagem</a>
        </div>

        <center>
          <div class="collapse navbar-collapse " id="navbar-main">
          <ul class="nav navbar-nav">

            <li role="presentation" class="active"><a href="projeto/index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toogle" data-toggle="dropdown"> Cadastro <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="conteudo/curso.php">Cadastrar Curso</a></li>
                <li><a href="conteudo/disciplina.php">Cadastrar Disciplina</a></li>
                <li><a href="conteudo/equipamento.php">Cadastrar Equipamento</a></li>
                <li><a href="conteudo/laboratorios.php">Cadastrar Laboratórios</a></li>
                <li><a href="conteudo/manutencao.php">Cadastrar Manutenção</a></li>

                <!--------- Para inserir no menu dropdown deve ser colocado apartir daqui-->

              </ul>

            </li>
            <li role="presentation"><a href="#">Reservas</a></li>
          </ul>
        </div><!------------/.nav-collapse-->

        <form class="form-inline navbar-right"role="form">
          <div class="form-group">
            <label class="sr-only" for="email" >Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="senha">senha</label>
            <input type="password" class="form-control" name="senha" placeholder="password">

          </div>
          <button type="submit" class="btn btn-default">entrar</button>

        </form>
</center>




  </div><!--------------------container--------->

</nav>
</body>
</html>
