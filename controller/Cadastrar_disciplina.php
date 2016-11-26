<?php

include_once ("../model/Disciplina.php");


        if (isset($_POST['submit'])) {

            $codigo = $_POST['codigo'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $status = "Aberta";

            $disciplina = new Disciplina($codigo, $nome, $descricao, $status);

            if ($disciplina->insert() == false) {
                header("Location:../view/resposta.php?falha=Não foi possivel cadastar a disciplina.");
            } else {
                header("Location:../view/resposta.php?sucesso=Disciplina cadastrada com sucesso.");
            }
        }

?>