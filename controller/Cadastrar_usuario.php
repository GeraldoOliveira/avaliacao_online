<?php

include_once ("../model/Usuario.php");

        if (isset($_POST['submit'])) {

            $cpf = $_POST['cpf'];
            $tipo = $_POST['tipo'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['cpf'];
            $status = "Ativado";

            $aluno = new Usuario($cpf, $tipo, $nome, $email, $senha, $status);

            if ($aluno->insert() == false) {
                header("Location:../view/resposta.php?falha=Não foi possivel cadastrar o usuário.");
            } else {
                header("Location:../view/resposta.php?sucesso=Usuário cadastrado com sucesso.");
            }
        }

?>