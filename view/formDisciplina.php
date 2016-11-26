<?php include_once 'header.php'; ?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Cadastrar Disciplina</h3>
                        <form role="form" action="../controller/Cadastrar_disciplina.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="InputText">Código</label>
                                <input class="form-control" name="codigo" id="InputCodigo" placeholder="Código da disciplina"
                                       type="text" maxlength="6" pattern="[A-Z]{3}[0-9]{3}" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Nome</label>
                                <input class="form-control" name="nome" id="InputNome" placeholder="Nome da disciplina"
                                       type="text" maxlength="100" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Descrição</label>
                                <textarea class="form-control" rows="10" id="InputDescricao" name="descricao"  placeholder="Descrição da Disciplina"
                                          maxlength="2000" required></textarea>
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