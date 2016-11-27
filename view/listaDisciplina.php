<?php
include_once 'header.php';
?>

<html
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center text-muted">Lista de Disciplinas</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Disciplina</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($disciplinas as $disciplina) {
                                    if($disciplina->status == "Aberta"){
                                        $classe = "success";
                                    } else {
                                        $classe = "danger";
                                    }
                               
                               echo "<tr>"
                                    . "<td><a href=\"../controller/Listar_disciplina.php?Visualizar=" . $disciplina->codigo . "\">" . $disciplina->codigo . "</a></td>"
                                    . "<td>" . $disciplina->nome . "</td>"
                                    . "<td class=\"text-left text-" . $classe . "\">" . $disciplina->status . "</td>"
                                  . "</tr>";
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