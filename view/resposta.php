<?php
// cira o menu e valida a sessao
include_once 'header.php';
?>
<html>
    <body>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" >

                        <?php
                        if (isset($_GET['falha'])) {
                            echo "<h3 class=\"text-danger text-left\">Falha.</h3>
                                    <p>" . $_GET['falha'] . "</p>";
                        } else  if (isset ($_GET['sucesso'])){
                            echo "<h3 class=\"text-left text-success\">Sucesso.</h3>
                                    <p>" . $_GET['sucesso'] . "</p>";
                        } else {
                            echo "<h3 class=\"text-primary\">Não encontrado.</h3>
                                    <p>" . $_GET['busca'] . "</p>";
                        }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>   
</html>

<?php
include_once 'footer.php';
?>
