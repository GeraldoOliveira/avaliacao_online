<?php

include_once ("../model/Disciplina.php");
include_once ("Conexao.php");

if (isset($_GET['Visualizar']) || isset($_POST['Modificar'])) { // Viusalizar ou edita uma disciplina
    
    if (isset($_GET['Visualizar'])) {   // Configura a view para visualizar disciplina
        $visualizar = "disabled";
        $acao = "Modificar";
        $codigo = $_GET['Visualizar'];
    } else {                            // Configura a view para alterar disciplina
        $visualizar = "";
        $acao = "Salvar";
        $codigo = $_POST['Modificar'];
    }

    //Procura a disciplina
    $sql = "SELECT * FROM disciplina WHERE codigo_disciplina = '" . $codigo . "'";
    $result = mysqli_query($con, $sql);
    $disciplinas = array();

    // Cria uma disciplina
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $disciplina = new Disciplina($row['codigo_disciplina'], $row['nome_disciplina'], $row['descricao_disciplina'], $row['status_disciplina']);

    mysqli_close($con);

    include_once ('../view/exibeDisciplina.php');
    
} else if (isset($_POST['Salvar'])) { // Alterar a disciplina
    $cod = $_POST['Salvar'];
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    $newdisciplina = new Disciplina($codigo, $nome, $descricao, $status);

    if ($newdisciplina->update($cod) == false) {
        header("Location:../view/resposta.php?falha=Não foi possível a a disciplina.");
    } else {
        header("Location:../view/resposta.php?sucesso=Disciplina alterada com sucesso.");
    }
} else if (isset($_POST['Buscar'])) { // Busca por uma ou vária disciplinas
    
    $codigo = $_POST['codigo'];
    $status = $_POST['status'];

    // Define qual busca fazer
    if ($codigo == "" && $status == "") {
        $sql = "SELECT * FROM disciplina ORDER BY status_disciplina, codigo_disciplina";
    } else if ($codigo == "") {
        $sql = "SELECT * FROM disciplina WHERE status_disciplina = '" . $status . "' ORDER BY status_disciplina";
    } else if ($status == "") {
        $sql = "SELECT * FROM disciplina WHERE codigo_disciplina = '" . $codigo . "'";
    } else {
        $sql = "SELECT * FROM disciplina WHERE codigo_disciplina = '" . $codigo . "' AND status_disciplina = '" . $status . "'";
    }

    //Procura todas disciplinas
    $result = mysqli_query($con, $sql);
    $disciplinas = array();

    if (mysqli_num_rows($result) == 1) {

        $visualizar = "disabled";
        $acao = "Modificar";
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $disciplina = new Disciplina($row['codigo_disciplina'], $row['nome_disciplina'], $row['descricao_disciplina'], $row['status_disciplina']);
        include_once ('../view/exibeDisciplina.php');
        
    } else if (mysqli_num_rows($result) > 1) {

        // Cria um arry com todas disciplinas
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $disciplinas[] = new Disciplina($row['codigo_disciplina'], $row['nome_disciplina'], $row['descricao_disciplina'], $row['status_disciplina']);
        }
        
        include_once ('../view/listaDisciplina.php');
        
    } else {

        header("Location:../view/resposta.php?busca=Não foi encontrado a disciplina com as caracteristicas que você procurou.");
    }

    mysqli_close($con);
    
} else { // Lista toda as disciplinas

    //Procura todas disciplinas
    $sql = "SELECT * FROM disciplina ORDER BY status_disciplina, codigo_disciplina";
    $result = mysqli_query($con, $sql);
    $disciplinas = array();

    // Cria um arry com todas disciplinas
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $disciplinas[] = new Disciplina($row['codigo_disciplina'], $row['nome_disciplina'], $row['descricao_disciplina'], $row['status_disciplina']);
    }

    mysqli_close($con);

    include_once ('../view/listaDisciplina.php');
}
?>