<?php include_once 'header.php'; ?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Buscar Usuário</h3>
                        <form role="form" action="../controller/Listar_usuario.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="InputText">CPF</label>
                                <input class="form-control" name="cpf" id="InputCodigo" placeholder="CPF do usuário que deseja encontrar"
                                       type="text" maxlength="11" pattern="[0-9]{11}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputTipo">Tipo</label>
                                <select class="form-control" name="tipo" id="InputTipo" type="text">
                                    <option></option>
                                    <option>Aluno</option>
                                    <option>Professor</option>
                                </select>
                            </div>
                            <button type="submit" name="Buscar" class="btn btn-info">Buscar</button>
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