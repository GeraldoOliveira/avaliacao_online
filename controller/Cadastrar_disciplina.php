<?php

if (isset($_POST['submit'])) {
    include_once ("../model/Disciplina.php");

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $disciplina = new Disciplina($codigo, $nome, $descricao);
    
    if ($disciplina->insert() == false) {
        header("Location:../view/resposta.php?falha='O código da disciplina já existe.'");
    } else {
        header("Location:../view/resposta.php?sucesso='O código da disciplina já existe.'");
    }
}
?>