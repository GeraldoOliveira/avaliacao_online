<?php include_once 'header.php'; ?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Disciplina</h3>
                        <form role="form" action="../controller/Listar_disciplina.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="InputText">Código</label>
                                <input class="form-control" name="codigo" id="InputCodigo" placeholder="Código da disciplina"
                                       type="text" maxlength="6" value="<?php echo $disciplina->codigo; ?>" pattern="[A-Z]{3}[0-9]{3}" required 
                                       <?php echo $visualizar; ?>>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Nome</label>
                                <input class="form-control" name="nome" id="InputNome" placeholder="Nome da disciplina"
                                       type="text" maxlength="100" value="<?php echo $disciplina->nome; ?>" required
                                       <?php echo $visualizar; ?>>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Descrição</label>
                                <textarea class="form-control" rows="10" id="InputDescricao" name="descricao"  placeholder="Descrição da Disciplina"
                                          maxlength="2000" required <?php echo $visualizar; ?>><?php echo $disciplina->descricao; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputTipo">Status</label>
                                <select class="form-control" name="status" id="InputTipo" type="text" required <?php echo $visualizar; ?>>
                                    <?php
                                    if ($disciplina->status == "Aberta") {
                                        echo "<option selected>Aberta</option>;
                                            <option>Fechada</option>
                                            ";
                                    } else {
                                        echo "<option>Aberta</option>
                                            <option selected>Fechada</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <input name="<?php echo $acao; ?>" type="hidden" value="<?php echo $disciplina->codigo; ?>">
                            <button type="submit" name="Salvar" class="btn btn-info"><?php echo $acao; ?></button>
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