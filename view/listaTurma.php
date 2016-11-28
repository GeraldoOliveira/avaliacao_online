<?php //
include_once 'header.php';
?>

<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <h3 class="text-center text-muted">Lista de Turmas</h3>
                    <?php
                    foreach ($anos as $ano) {
                        ?>
                        <div class = "col-md-12">
                            <table class = "table">
                                <caption style="font-size: 1.25em;"><b><?php echo $ano; ?></b></caption>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th style="width: 50%;">Disciplina</th>
                                        <th>Período</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($turmas as $turma) {
                                        if($turma->ano == $ano){
                                            if ($turma->status == "Aberta") {
                                                $classe = "success";
                                            } else {
                                                $classe = "danger";
                                            }

                                            // Encontra o nome da disciplina da turma
                                            foreach ($disciplinas as $disciplina) {
                                                if ($turma->disciplina == $disciplina->codigo) {
                                                    $nome_disciplina = $disciplina->nome;
                                                }
                                            }
                                            ?>
                                            <tr>
                                                <td><a href="../view/Listar_turma.php?Visualizar=<?php echo $turma->codigo; ?>"><?php echo str_pad($turma->codigo, 4, "0", STR_PAD_LEFT); ?></a></td>
                                                <td><?php echo $turma->disciplina . " - " . $nome_disciplina; ?></td>
                                                <td><?php echo $turma->periodo . "º"; ?></td>
                                                <td class="text-left text-<?php echo $classe; ?>"><?php echo $turma->status; ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>

</html>


<?php
include_once 'footer.php';
?>