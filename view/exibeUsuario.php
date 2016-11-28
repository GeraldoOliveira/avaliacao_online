<?php include_once 'header.php'; ?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Usuário</h3>
                        <form role="form" action="../controller/Listar_usuario.php" method="POST">
                            <div class="form-group">
                                <label class="control-label" for="InputText">CPF</label>
                                <input class="form-control" name="cpf" id="InputCpf" placeholder="Cpf do usuário"
                                       type="text" maxlength="11" value="<?php echo $usuario->cpf; ?>" pattern="[0-9]{11}" required 
                                       <?php echo $visualizar; ?>>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Nome</label>
                                <input class="form-control" name="nome" id="InputNome" placeholder="Nome do usuário"
                                       type="text" maxlength="100" value="<?php echo $usuario->nome; ?>" required
                                       <?php echo $visualizar; ?>>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Email</label>
                                <input class="form-control" name="email" id="InputNome" placeholder="Email do usuário"
                                       type="text" maxlength="100" value="<?php echo $usuario->email; ?>" required
                                       <?php echo $visualizar; ?>>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputText">Senha</label>
                                <input class="form-control" name="senha" id="InputNome" placeholder="Senha do usuário"
                                       type="text" maxlength="20" value="<?php echo $usuario->senha; ?>" required
                                       <?php echo $visualizar; ?>>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="InputTipo">Status</label>
                                <select class="form-control" name="status" id="InputTipo" type="text" required <?php echo $visualizar; ?>>
                                    <?php
                                    if ($usuario->status == "Ativado") {
                                        echo "<option selected>Ativado</option>;
                                            <option>Desativado</option>
                                            ";
                                    } else {
                                        echo "<option>Ativado</option>
                                            <option selected>Desativado</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <input name="<?php echo $acao; ?>" type="hidden" value="<?php echo $usuario->cpf; ?>">
                            <input name="Tipo" type="hidden" value="<?php echo $usuario->tipo; ?>">
                            <button type="submit" name="Alterar" class="btn btn-info"><?php echo $acao; ?></button>
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