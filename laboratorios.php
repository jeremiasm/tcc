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
<legend>Cadastro de Laboratório</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cod_lab">Código do Laboratório</label>
  <div class="col-md-2">
  <input id="cod_laboratorio" name="cod_lab" type="text" placeholder="cod_laboratorio" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Nome do Laboratorio</label>
  <div class="col-md-4">
  <input id="nome_lab" name="nome_laboratorio" type="text" placeholder="Digite o Nome do Laboratorio" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Nome dos  Programas</label>
  <div class="col-md-4">
  <input id="programas" name="nome_programas" type="text" placeholder="Digite o nome dos programas" class="form-control input-md">

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Quantidade de Computaores</label>
  <div class="col-md-2">
  <input id="computadores" name="quanti_comp" type="text" placeholder="Digite a quantidade de computadores" class="form-control input-md">

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
