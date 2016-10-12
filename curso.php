<?php

  require '../funcoes/config.php';
  require '../funcoes/database.php';
  require '../funcoes/connections.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Laboratórios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script       src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>

<!-----inicio do top-------------------------------------------------------------------------------------->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <!---aqui vai um logo---->

            <div class="col-md-3  ">
              <ul class="nav navbar-nav">
                <li role="presentation" class="active"><a href="../index.php">Home</a></li>
                <li role="presentation"><a href="#">Cadastro</a></li>
                <li role="presentation"><a href="#">Reservas</a></li>
              </ul>
            </div>
            </div>
        </nav>

<!-------------------Fim do topo------------------------>

<!-----funcoes em php cadastro--------->
<?php

  if (isset( $_POST['salvar'])) {

    $form['cod_curso']  = strip_tags(trim($_POST['cod_curso']));
    $form['nome_curso'] =strip_tags(trim($_POST['nome_curso']));

    $form = DBEscape($form);

    if ( empty($form['cod_curso'])) {
      echo 'Preencha o campo codigo';
    }elseif ( empty($form['nome_curso'])) {
      echo 'Preencha o campo nome do curso';
    }else {
      // verifica se existem campos iguais
      $dbCheck = DBRead('curso', "WHERE  cod_curso = '" . $form['cod_curso']."'" );

      if ($dbCheck) {
        echo "Desulpe, mas já existe o codigo informado";
      }else {
        if (DBCreate('curso',$form)) {
          echo 'Cadastrador com sucesso!';
        }else {
          echo 'Desculpe não foi possivel cadastrar!';
        }
      }
    }




    echo '<hr>';
    # code...
  }


 ?>


<!-----funcoes em php cadastro--------->





<!-------------Corpo do projeto------------------->
<form class="form-horizontal" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Cursos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cod_curso">Código do Curso</label>
  <div class="col-md-2">
  <input id="cod_curso" name="cod_curso" type="text" placeholder="codigo do Curso" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Nome do Curso </label>
  <div class="col-md-4">
  <input id="nome_curso" name="nome_curso" type="text" placeholder="Digite o Nome do Curso" class="form-control input-md">

  </div>
</div>

<!-- Button -->

<div class="btn-f=group" role="group">
  <hr>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary" name="salvar">Salvar</button>
      <a href="../index.html"class="btn btn-default">Cancelar</a>
    </div>

  </div>

</div>

</fieldset>
</form><!----fim da classe container------->







    </body>
  </head>
</html>
