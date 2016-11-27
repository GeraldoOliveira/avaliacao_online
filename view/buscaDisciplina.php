<?php include_once 'header.php'; ?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Buscar Disciplina</h3>
                        <form role="form" action="../controller/Listar_disciplina.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="InputText">Código</label>
                                <input class="form-control" name="codigo" id="InputCodigo" placeholder="Código da disciplina que deseja buscar"
                                       type="text" maxlength="6" pattern="[A-Z]{3}[0-9]{3}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputTipo">Status</label>
                                <select class="form-control" name="status" id="InputTipo" type="text">
                                    <option></option>
                                    <option>Aberta</option>
                                    <option>Fechada</option>
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