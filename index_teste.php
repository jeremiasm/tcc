<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>teste de banco</title>
  </head>
  <body>

    <?php
    require '/funcoes/config.php';
    require '/funcoes/connections.php';
    require '/funcoes/database.php';




    /*****Deleta Arquivos****/

    $dropCurso = DBDelete('curso', 'id = 3');
    if ($dropCurso) {
      echo 'OK'
    }else {
      echo 'não';
    }








    /*******Update

    DBUpdate('cursos',array(),'id = 2');
    */

    /******* Ler Registros
    $curso =DBRead('curso',null,'cod_curso,nome_curso');

    foreach ($curso as $curso_1) {
      echo $curso_1['cod_curso'].'<br>';
      echo $curso_1['nome_curso'].'<br><hr>';
    }
    ********************/



      /***grava no banco o arrray
      $curso = array(
        'cod_curso'   => 3,
        'nome_curso' => 'agronomia'

      );

      $grava = DBCreate('curso', $curso);

      if ($grava) {
        echo 'OK';
      }else{
        echo 'falhou';
      }

      ********/

     ?>

  </body>
</html>
