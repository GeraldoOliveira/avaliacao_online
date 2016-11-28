<?php
//
include_once 'header.php';
?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <h3 class="text-center text-muted">Lista de Usuários</h3>
                    <?php
                    $tp = "a";
                    foreach ($tipos as $tipo) {
                        if($tipo == $tp){
                            
                            break;
                        }
                        if ($tipo != "Administrador") {
                            ?>
                            <div class = "col-md-12">
                                <table class = "table">
                                    <caption style="font-size: 1.25em;"><b><?php echo $tipo; ?></b></caption>
                                    <thead>
                                        <tr>
                                            <th>CPF</th>
                                            <th style="width: 40%;">Nome</th>
                                            <th style="width: 30%;">Email</th>
                                            <th style="width: 10%;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($usuarios as $usuario) {
                                            //Mostra todos os usuarios de acordo com o tipo
                                            if ($usuario->tipo == $tipo && $usuario->tipo != "Administrador") {
                                                ?>
                                                <tr>
                                                    <td><a href="../controller/Listar_usuario.php?CPF=<?php echo $usuario->cpf; ?>&Tipo=<?php echo $usuario->tipo; ?>"><?php echo $usuario->cpf; ?></a></td>
                                                    <td><?php echo $usuario->nome; ?></td>
                                                    <td><?php echo $usuario->email; ?></td>
                                                    <td><?php echo $usuario->status; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                    }
                                    $tp = $tipo;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


<?php
include_once 'footer.php';
?>