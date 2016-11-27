<?php

include_once("../model/Disciplina.php");
include_once("../model/Turma.php");

if (isset($_POST['submit'])) {
    
} else { // Lista todas as turmas
    include_once ("Conexao.php");

    //Procura todas disciplinas
    $sql = "SELECT * FROM disciplina";
    $result = mysqli_query($con, $sql);
    $disciplinas = array();

    // Cria um arry com todas disciplinas
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $disciplinas[] = new Disciplina($row['codigo_disciplina'], $row['nome_disciplina'], $row['descricao_disciplina'], $row['status_disciplina']);
    }

    //Procura todos anos
    $sql = "SELECT DISTINCT ano_turma FROM turma ORDER BY ano_turma DESC";
    $result = mysqli_query($con, $sql);
    $anos = array();

    // Cria um array com todos anos
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $anos[] = $row['ano_turma'];
    }

    //Procura todas turmas
    $sql = "SELECT * FROM turma ORDER BY periodo_turma DESC, codigo_turma ASC, disciplina_turma ASC";
    $result = mysqli_query($con, $sql);
    $turmas = array();

    // Cria um array com todas turmas
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $turmas[] = new Turma($row['codigo_turma'], $row['disciplina_turma'], $row['ano_turma'], $row['periodo_turma'], $row['professor_turma'], $row['vagas_turma'], $row['qtde_avaliacao_turma'], $row['status_turma']);
    }

    mysqli_close($con);

    include_once ('../view/listaTurma.php');
}
?>

