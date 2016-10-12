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
            </div>
        </nav>

        <!------------------------Fim do topo------------------------>


        <!-------------Corpo do projeto------------------->
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Recursos</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cod_lab">Código do Recurso</label>
  <div class="col-md-2">
  <input id="cod_recurso" name="recurso" type="text" placeholder="código do recurso" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Nome do Recurso</label>
  <div class="col-md-4">
  <input id="nome_recurso" name="recurso" type="text" placeholder="Digite o Nome do Recurso" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Nome do Recurso</label>
  <div class="col-md-4">
  <input id="tipo_recurso" name="tipo_recurso" type="text" placeholder="Digite o Nome do Recurso" class="form-control input-md">

  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="singlebutton"></label>
  <div class="col-md-2">
    <button id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
  </div>
</div>

</fieldset>
</form><!----fim da classe container------->







    </body>
  </head>
</html>
