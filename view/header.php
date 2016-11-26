<?php

// Valida a sessao
include_once '../ontroller/Validacao.php';

// Define o link da home pra cada tipo de usuario
$tipo_sessao = $_SESSION['tipo'];

?>

<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  
 <!-- Cria o menu -->
  <body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <div class="btn-group btn-group-lg">
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Disciplinas  <span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#">Cadastar</a>
              </li>
              <li>
                <a href="#">Listar</a>
              </li>
              <li>
                <a href="#">Buscar</a>
              </li>
              <li>
                <a href="#">Deletar</a>
              </li>
            </ul>
          </div>
          <div class="btn-group btn-group-lg">
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Turmas  <span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="#">Cadastar</a>
              </li>
              <li>
                <a href="#">Listar</a>
              </li>
              <li>
                <a href="#">Buscar</a>
              </li>
              <li>
                <a href="#">Deletar</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="Location:../view/home<?php echo $tipo_sessao; ?>.php">Home</a>
            </li>
            <li>
                <a href="../controller/Logout.php">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>