<?php
include_once 'header.php'; 
?>

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
                                       type="text" maxlength="9" value="<?php echo str_pad($turma, 4, "0", STR_PAD_LEFT); ?>" readonly required> <!-- Exibre o código da nova turma  no formato "0000" e não permite que o campo seja editado (readonly) -->
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputDisciplina">Disciplina</label>
                                <select class="form-control" name="disciplina" id="InputDisciplina" placeholder="Escolha uma disciplina" type="text" required>
                                    <!-- Lista todas disciplinas dentro do <select> -->
                                    <?php
                                    foreach ($disciplinas as $disciplina) {
                                        echo "<option value=" . $disciplina->codigo . ">" . $disciplina->codigo . " - " .  $disciplina->nome . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Ano</label>
                                <input class="form-control" name="ano" id="InputNome" placeholder="Ano da turma"
                                       type="text" maxlength="4" pattern="[0-9]+$" value="<?php echo date('Y'); ?>" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputPeriodo">Período</label>
                                <select class="form-control" name="periodo" id="InputPeriodo" value="1" type="text" required>
                                    <option value="1">1º</option>
                                    <option value="2">2º</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="InputProfessor">Professor</label>
                                <select class="form-control" name="professor" id="InputNome" placeholder="Escolha um professor"
                                        type="text" required>
                                     <!-- Lista todas professores dentro do <select> -->
                                            <?php
                                    foreach ($allProfs as $prof) {
                                        echo "<option value=" . $prof->cpf . ">" . $prof->nome . "</option>";
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputVagas">Vagas</label>
                                <select class="form-control" name="vagas" id="InputVagas" type="text" required>
                                    <!-- Lista  quantidade de vagas de 10 a 100 -->
                                    <?php
                                    for ($i=9;$i<100;$i++) {
                                        if($i + 1 == 50){
                                            echo "<option selected>" . ($i+1) . "</option>";
                                        } else {
                                            echo "<option>" . ($i+1) . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
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