

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
  
  <body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <form role="form" action="../controller/Login.php" method="POST">
              <div class="form-group">
                <label class="control-label" for="InputEmail1">Usuário</label>
                <input class="form-control" name="login" id="InputEmail1" placeholder="Digite seu CPF"
                       type="text" maxlength="11" pattern="[0-9]+$" required>
              </div>
              <div class="form-group">
                <label class="control-label" for="InputPassword">Senha</label>
                <input class="form-control" name="password" id="InputPassword" placeholder="Digite a senha"
                       type="password" maxlength="20" required>
              </div>
                <div class="form-group">
                <label class="control-label" for="InputTipo">Tipo de usuário</label>
                <select class="form-control" name="tipo" id="InputTipo" value="Aluno" type="text" required="">
                  <option>Aluno</option>
                  <option>Professor</option>
                  <option>Admnistrador</option>
                </select>
              </div>
              <?php
              if(isset($_GET['erro'])){
                 echo "<p class=\"text-danger\">" . $_GET['erro'] . "</p>"; 
              }
              ?>  
              <button type="submit" name="submit" class="btn btn-default">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
