
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Manutenção</title>
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

    <h1>Cadastro de Manutenção</h1>

  
<!----------------Inicio do  container-------------->
    <div class="container">
        <form action="index.php"p=cadastrar method="post">
          <div class="row">
            <div class="col-md-2">
              <label for="cod_manutencao">Codigo da Manutenção:</label>

              <input  name="cod_manutencao" size="6" type="text" value="" required >
            </div>
          </div>

          <div class="form-group">
            <label for="nome_equip">Nome do Equipamento:</label>
            <input type="text" class="form-control" required name="equipamento">
          </div>

          <div class="form-group">
            <label for="nome_defeito">Tipo do Defeito:</label>
            <input name="defeito" type="email" class="form-control">
          </div>


          <div class="row">
            <div class="col-md-2">
              <label for="numero_equip">Numero do Equipamento:</label>
            <input name="numero_equip" type="text" size="8">
          </div>
        </div><br/>

          <button value="Salvar" name="confirmar" type="submit" class="btn btn-primary">Salvar</button>
        </form>
    <div/>


  </body>
</html>
