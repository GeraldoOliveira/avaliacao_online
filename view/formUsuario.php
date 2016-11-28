<?php include_once 'header.php'; ?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Cadastrar Usuário</h3>
                        <form role="form" action="../controller/Cadastrar_usuario.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="InputText">CPF</label>
                                <input class="form-control" name="cpf" id="InputCPF" placeholder="Digite o CPF"
                                       type="text" maxlength="11" pattern="[0-9]{11}" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputTipo">Tipo de usuário</label>
                                <select class="form-control" name="tipo" id="InputUsuario" value="Aluno" type="text" required>
                                    <option>Aluno</option>
                                    <option>Professor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Nome</label>
                                <input class="form-control" name="nome" id="InputNome" placeholder="Digite o nome"
                                       type="text" maxlength="100" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Email</label>
                                <input class="form-control" name="email" id="InputEmail" placeholder="Digite o email"
                                       type="email" maxlength="100" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-info">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
include_once 'footer.php';
?>