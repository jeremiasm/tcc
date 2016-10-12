<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro de Laboratórios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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

        <!------------------------Fim do topo------------------------>


        <!-------------Corpo do projeto------------------->
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastro e Equipamento</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cod_lab">Código do Equipamento</label>
  <div class="col-md-2">
  <input id="cod_equip" name="disciplina" type="text" placeholder="codigo do Equipamento" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Tipo do Equipamento</label>
  <div class="col-md-4">
  <input id="nome_disciplina" name="disciplina" type="text" placeholder="Digite o Nome da Disciplina" class="form-control input-md">

  </div>
</div>

<form action="index.html" method="post">
  <hr>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary" name="button">Salvar</button>
      <a href="../index.html"class="btn btn-default">Cancelar</a>
    </div>

  </div>

</form>


</fieldset>
</form><!----fim da classe container------->




<!--------------------------Jquery------------------------->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script       src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
