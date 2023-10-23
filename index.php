<?php

session_start();
$_SESSION['autenticado'];
?>


<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

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
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
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
              <form action="valida_login.php" method="post"> <!-- enviando dados pro valida_login  para retornar a página HTML, method post = não mostra as informações na URL-->
                <div class="form-group">
                  <input name="email" type="email" class="form-control"placeholder="E-mail"> <!-- name = passa a receber o valor contido no campo, sendo encapsulada e disparadas junto com a requisição  -->
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

     <!--  isset(): verifica a existência de um índice antes mesmo de ver se existe -->
      <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

      <div class="text-danger">
        Usuário ou senha inválido(s)
      </div>

      <?php  } ?> <!-- Para colocar HTML dentro de uma verificação -->

      <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ //erro2: para sinalizar o erro quando tentar acessar sem fazer login?>

<div class="text-danger">
 Faça login antes de acessar as páginas.
</div> 

<?php  } ?>


                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>