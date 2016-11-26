<?php include_once 'header.php'; ?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Cadastrar Turma</h3>
                        <form role="form" action="../controller/Cadastrar_turma.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="InputText">Código</label>
                                <input class="form-control" name="codigo" id="InputCodigo" placeholder="Código da turma"
                                       type="text" maxlength="8" pattern="[A-Z]{3}[0-9]{3}" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Disciplina</label>
                                <input class="form-control" name="disciplina" id="InputNome" placeholder="Disciplina da turma"
                                       type="text" maxlength="6" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Ano</label>
                                <input class="form-control" name="ano" id="InputNome" placeholder="Ano da turma"
                                       type="text" maxlength="4" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Período</label>
                                <input class="form-control" name="periodo" id="InputNome" placeholder="Período da turma"
                                       type="text" maxlength="1" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Vagas</label>
                                <input class="form-control" name="vagas" id="InputNome" placeholder="Vagas da turma"
                                       type="text" maxlength="2" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Vagas</label>
                                <input class="form-control" name="professor" id="InputNome" placeholder="Vagas da turma"
                                       type="text" maxlength="2" required>
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