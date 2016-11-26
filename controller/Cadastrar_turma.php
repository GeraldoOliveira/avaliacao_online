<?php

include_once("../model/Usuario.php");
include_once("../model/Disciplina.php");
include_once("../model/Turma.php");

if (!isset($_POST['submit'])) {

    include_once ("Conexao.php");

    $sql = "SELECT * FROM usuario WHERE tipo_usuario = 'Professor' ORDER BY nome_usuario";
    $result = mysqli_query($con, $sql);
    $allProfs = array();

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $allProfs[] = new Usuario($row['cpf_usuario'], $row['tipo_usuario'], $row['nome_usuario'], $row['email_usuario'], $row['senha_usuario']);
    }

    $sql = "SELECT * FROM disciplina WHERE status_disciplina = 'Aberta'";
    $result = mysqli_query($con, $sql);
    $disciplinas = array();

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $disciplinas[] = new Disciplina($row['codigo_disciplina'], $row['nome_disciplina'], $row['descricao_disciplina'], $row['status_disciplina']);
    }

    $sql = "SHOW TABLE STATUS LIKE 'turma'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $turma = $row['Auto_increment'];

    mysqli_close($con);

    include_once ('../view/formTurma.php');
    
} else if (isset($_POST['submit'])){

    $codigo = $_POST['codigo'];
    $disciplina = $_POST['disciplina'];
    $ano = $_POST['ano'];
    $periodo =  $_POST['periodo'];
    $professor = $_POST['professor'];
    $vagas = $_POST['vagas'];

    $turma = new Turma($codigo, $disciplina, $ano, $periodo, $professor, $vagas, 0, "Aberta");

    if ($turma->insert() == false) {
        header("Location:../view/resposta.php?falha=Não foi possível cadastar a nova turma.");
    } else {
        header("Location:../view/resposta.php?sucesso=Turma cadastrada com sucesso.");
    }
}

