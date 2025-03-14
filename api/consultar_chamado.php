<?php require_once "acesso.php";
?>

<?php


$chamados = array();

$arquivo = fopen('arquivo.txt', 'r');

while(!feof($arquivo)) {
$registro = fgets($arquivo);

$chamados[] = $registro;
}

fclose($arquivo);

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Claudio Code</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Claudio Code
      </a>
      <ul class='navbar-nav'>
        <li class='nav-item'>
          <a  class='nav-link' href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
              <?php
                            foreach($chamados as $chamado){
                ?>
                    <?php 
                    $chamado_dados = explode('#', $chamado);
                    
                      if($_SESSION['perfil_id'] == 2){
                      //só vamos exibir o chamado que foi aberto pelo usuario
                      if($_SESSION['id'] != $chamado_dados[0]){
                        continue;
                      }

                    }
                    if(count($chamado_dados) < 3){
                      continue;
                    }          
                    
                   

                    ?>


              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"> <?=$chamado_dados[1] ?> </h5>
                  <h6 class="card-subtitle mb-2 text-muted"> <?=$chamado_dados[2] ?> </h6>
                  <p class="card-text"> <?=$chamado_dados[3] ?> </p>

                </div>
              </div>

                                      <?php }?>                 
            

              <div class="row mt-5">
                <div class="col-6">
                  <a href="home.php" class="btn btn-lg btn-warning btn-block" type="submit">Voltar
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>