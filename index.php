<?php
include ("conexao.php");
$consulta = "SELECT * FROM usuario";
$con = $mysqli->query($consulta) or die($mysqli->error);
?>
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
<!-----inicio do top-------------------------------------------------------------------------------------->
<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
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
          <div  id="navbar" class="collapse navbar-collapse " id="navbar-main">
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



  </div><!--------------------container--------->

</nav>
<!----------------final do cabeçalho top-------------------------------------------------------------------------------------->



<!-----------------Criando a tabela de dados------------------------------------------------------------------------>
<div class="table-responsive">
<table border="1" class="table table-hover">
  <thead>
    <tr>
      <td>Codigo</td>
      <td>Nome ususario</td>
      <td>E-mail</td>
      <td>acesso</td>
      <td>Data de Cadastro</td>
    </tr>
    <?php while($dado = $con->fetch_array()){ ?>

    <tr>
      <th><?php echo $dado["cod_usuario"];?></th>
      <th><?php echo $dado["nome_usuario"];?></th>
      <th><?php echo $dado["email_usuario"];?></th>
      <th><?php echo $dado["nivel_de_acesso"];?></th>
      <th><?php echo $dado["data_de_cadastro"];?></th>
      <!--<td><?php echo date("d/m/Y",strtotime($dado["data_reserva"]));?></td>converte a data para o formato d/m/y-->
    </tr>
  </thead>
    <?php } ?>

</table>

</div>

<!-------------------------------Fim da tabela----------------------------------->

<div class="row" >
  <h2>Rodape</h2>

</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
