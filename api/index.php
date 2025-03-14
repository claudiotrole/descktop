<?php 
session_start();
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Claudio Code</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="../index.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Claudio Code
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <!-------Mensagem de ERRO---------->
                <?php
                    if(isset($_GET['login']) && $_GET['login'] == 'erro'){
                    ?>
                   <div class='text-danger' >usuario ou senha invalido(s)</div>
                    <?php }?>
                <!-------Mensagem de ERRO---------->

                 <!-------Mensagem de ERRO2---------->
                 <?php
                    if(isset($_GET['login']) && $_GET['login'] == 'erro2'){
                    ?>
                   <div class='text-danger' >É preciso estar logado para acessar paginas protegidas</div>
                    <?php }?>
                <!-------Mensagem de ERRO2---------->


                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>