<?php

// Valida a sessao
include_once '../controller/Validacao.php';

// Define o link da home pra cada tipo de usuario
$tipo_sessao = $_SESSION['tipo'];

$home = "../view/home" . $tipo_sessao . ".php"
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
            <a class="btn btn-info dropdown-toggle" data-toggle="dropdown">Disciplinas  </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                  <a href="../view/formDisciplina.php">Cadastar</a>
              </li>
              <li>
                  <a href="../controller/Listar_disciplina.php">Listar</a>
              </li>
              <li>
                  <a href="../view/buscaDisciplina.php">Buscar</a>
              </li>
            </ul>
          </div>
          <div class="btn-group btn-group-lg">
            <a class="btn btn-info dropdown-toggle" data-toggle="dropdown">Turmas  </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                  <a href="../controller/Cadastrar_turma.php">Cadastar</a>
              </li>
              <li>
                  <a href="../controller/Listar_turma.php">Listar</a>
              </li>
              <li>
                <a href="#">Buscar</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="<?php echo $home; ?>">Home</a>
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